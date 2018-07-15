#!/bin/sh

# BASIC RESTORE FOR BACKUPS CREATED USING "duplicity-backup" CONTAINER
# Set these to your AWS Credentials (or set elsewhere and comment out)
PASSPHRASE=encryption-key
AWS_ACCESS_KEY_ID=aws-key
AWS_SECRET_ACCESS_KEY=aws-secret
DUPLICITY_AWS_S3_PATH=s3://region.amazonaws.com/your-bucket-name/backup-path
DUPLICITY_RESTORE_PATH=/opt/restore
# no more settings


# pull down a basic duplicity image
docker pull wernight/duplicity

# restore /opt/mailcow-dockerized first, using wernight/duplicity
docker run --rm -it --user root \
    -e PASSPHRASE=$PASSPHRASE \
    -e AWS_ACCESS_KEY_ID=$AWS_ACCESS_KEY_ID \
    -e AWS_SECRET_ACCESS_KEY=$AWS_SECRET_ACCESS_KEY \
    -v $DUPLICITY_RESTORE_PATH:/opt/restore \
    wernight/duplicity \
    duplicity restore --file-to-restore mailcow-dockerized $DUPLICITY_AWS_S3_PATH /opt/restore/mailcow-dockerized

# move mailcow-dockerized folder into /opt
mv $DUPLICITY_RESTORE_PATH/mailcow-dockerized /opt && cd /opt/mailcow-dockerized

# run the duplicity-backup container and restore into the named volumes
# the volume paths here must match the paths in docker-compose.yaml (which mounts them read only by default)
# use the AWS Keys from this script instead of mailcow.conf, in case they are different for this server
docker-compose run --rm --no-deps \
    -v $DUPLICITY_RESTORE_PATH:/opt/restore \
    -v vmail-vol-1:/mnt/backup/src/volumes/vmail \
    -v mysql-vol-1:/mnt/backup/src/volumes/mysql \
    -v redis-vol-1:/mnt/backup/src/volumes/redis \
    -v rspamd-vol-1:/mnt/backup/src/volumes/rspamd \
    -v postfix-vol-1:/mnt/backup/src/volumes/postfix \
    -v crypt-vol-1:/mnt/backup/src/volumes/crypt \
    -e DST=$DUPLICITY_AWS_S3_PATH \
    -e AWS_ACCESS_KEY_ID=$AWS_ACCESS_KEY_ID \
    -e AWS_SECRET_ACCESS_KEY=$AWS_SECRET_ACCESS_KEY \
    duplicity-backup restore

# Drop & Restore mysql
docker-compose run --rm --no-deps \
    mysql-mailcow mysql -u root --password=$$MYSQL_ROOT_PASSWORD /var/lib/mysql/mailcow-backup.sql