#!/bin/sh

# BASIC RESTORE FOR BACKUPS CREATED USING "duplicity-backup" CONTAINER

####################################################################
#########            AWS AND RESTORE SETTINGS             ##########
####################################################################
# Set these to your AWS Credentials (or set elsewhere and comment out)
PASSPHRASE=encryption-key
AWS_ACCESS_KEY_ID=aws-key
AWS_SECRET_ACCESS_KEY=aws-secret
DUPLICITY_AWS_S3_PATH=s3://region.amazonaws.com/your-bucket-name/backup-path
# base restore path to download files to
DUPLICITY_RESTORE_PATH=/opt/restore
# this should match the docker-compose project name in mailcow.conf.
COMPOSE_PROJECT_NAME=mailcowdockerized
# no more settings
####################################################################

echo "starting off by downloading the backup using a basic duplicity container"
# pull down a basic duplicity image
docker pull wernight/duplicity

# restore /opt/mailcow-dockerized first, using wernight/duplicity
# full restore first
docker run --rm -it --user root \
    -e PASSPHRASE=$PASSPHRASE \
    -e AWS_ACCESS_KEY_ID=$AWS_ACCESS_KEY_ID \
    -e AWS_SECRET_ACCESS_KEY=$AWS_SECRET_ACCESS_KEY \
    -v $DUPLICITY_RESTORE_PATH:/opt/restore \
    wernight/duplicity \
    duplicity restore $DUPLICITY_AWS_S3_PATH $DUPLICITY_RESTORE_PATH/mailcow-restore

echo "Done! removing old mailcow folder and copying backedup one....."
rm -R /opt/mailcow-dockerized

# move mailcow-dockerized folder into /opt
mv $DUPLICITY_RESTORE_PATH/mailcow-restore/mailcow-dockerized /opt
cd /opt/mailcow-dockerized

echo "Using an ubuntu image to mount all volumes and copy the data in..."
# use ubuntu image to mount and restore each volume
docker pull ubuntu
docker run --rm \
  --volume ${COMPOSE_PROJECT_NAME}_vmail-vol-1:/tmp/volumes/vmail \
  --volume ${COMPOSE_PROJECT_NAME}_mysql-vol-1:/tmp/volumes/mysql \
  --volume ${COMPOSE_PROJECT_NAME}_redis-vol-1:/tmp/volumes/redis \
  --volume ${COMPOSE_PROJECT_NAME}_rspamd-vol-1:/tmp/volumes/rspamd \
  --volume ${COMPOSE_PROJECT_NAME}_postfix-vol-1:/tmp/volumes/postfix \
  --volume ${COMPOSE_PROJECT_NAME}_crypt-vol-1:/tmp/volumes/crypt \
  --volume $DUPLICITY_RESTORE_PATH:/tmp/restore \
  ubuntu \
  cp -Rfv /tmp/restore/mailcow-restore/volumes /tmp


echo "Dropping and restoring mysql from the db dump"
# Restore mysql
# start mysql
docker-compose up --no-deps -d mysql-mailcow
# actually wait for it to start
sleep 10s
# drop the db
docker-compose exec mysql-mailcow \
    sh -c 'mysql -u root --password="$MYSQL_ROOT_PASSWORD" -D "$MYSQL_DATABASE" -e "DROP DATABASE "$MYSQL_DATABASE";"'
# restore the dump file as root
docker-compose exec mysql-mailcow \
    sh -c 'mysql -u root --password="$MYSQL_ROOT_PASSWORD" < /var/lib/mysql/mailcow-backup.sql'
# stop mysql again
docker-compose stop mysql-mailcow


echo "Done! Starting it all up....."
docker-compose up -d

echo "Done! Cleaning it all up....."
rm -R /opt/restore
