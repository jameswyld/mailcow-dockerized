#!/bin/bash
# connect to redis and load env vars for duplicity
export REDIS_HOST='redis-mailcow'

DUPLICITY_ENABLED=`./redi.sh -g DUPLICITY_ENABLED`

# Check if duplicity is set to run
if [[ "${DUPLICITY_ENABLED}" =~ ^([f][a][l][s][e]|[0]|[n])+$ ]]; then
  echo "DUPLICITY_ENABLED=false, skipping Duplicity backups..."
  sleep 365d
  exit 0
fi

#load the duplicity config from redis
export DST=`./redi.sh -g DUPLICITY_DST`
export AWS_ACCESS_KEY_ID=`./redi.sh -g DUPLICITY_S3_APIKEY`
export AWS_SECRET_ACCESS_KEY=`./redi.sh -g DUPLICITY_S3_APISECRET`
export PASSPHRASE=`./redi.sh -g DUPLICITY_ENCRYPTION`
export FTP_PASSWORD=`./redi.sh -g DUPLICITY_FTP_PASS`

# start cron per the dockerfile command in index.docker.io/tecnativa/duplicity
/usr/sbin/crond -fd8