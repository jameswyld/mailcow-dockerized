#!/bin/bash

# Check if duplicity is set to run
if [[ "${SKIP_DUPLICITY}" =~ ^([yY][eE][sS]|[yY])+$ ]]; then
  echo "SKIP_DUPLICITY=y, skipping Duplicity backups..."
  sleep 365d
  exit 0
fi

# start cron per the dockerfile command in index.docker.io/tecnativa/duplicity
/usr/sbin/crond -fd8