FROM index.docker.io/tecnativa/duplicity:docker
## Should probably be made into a mailcow-specific Dockerfile with has no external dependency

# Add mysql backup script - so that password is hidden from job mail logs
COPY mysql-backup /usr/local/bin/
RUN chmod a+x /usr/local/bin/mysql-backup

# bootstrap script
COPY bootstrap.sh ./
RUN chmod a+x /bootstrap.sh

#add tini to run things
RUN apk add --no-cache bash

# Use bootstrap to start up cron after checking duplicity is set to run
CMD ["/bootstrap.sh"]