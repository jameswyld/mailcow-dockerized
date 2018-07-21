FROM index.docker.io/tecnativa/duplicity:docker
# Should probably be made into a mailcow-specific Dockerfile with has no external dependency


# Overrides/defaults for tecnativa ENV's (we'll likely use our own from redis later)
# mainly done so we can REMOVE the default job (job_300)
ENV CRONTAB_15MIN='*/15 * * * *' \
    CRONTAB_HOURLY='0 * * * *' \
    CRONTAB_DAILY='0 2 * * MON-SAT' \
    CRONTAB_WEEKLY='0 1 * * SUN' \
    CRONTAB_MONTHLY='0 5 1 * *' \
    DST='' \
    EMAIL_FROM='' \
    EMAIL_SUBJECT='Mailcow Backup report: {hostname} - {periodicity} - {result}' \
    EMAIL_TO='' \
    JOB_300_WHAT='' \
    JOB_300_WHEN='' \
    OPTIONS='' \
    OPTIONS_EXTRA='' \
    SMTP_HOST='smtp' \
    SMTP_PORT='25' \
	SRC='/mnt/backup/src'


# Add mysql redis backup script 
# this is here so that password is hidden from job mail logs
COPY mysql-backup /usr/local/bin/
COPY redis-backup /usr/local/bin/
COPY redis-jobrunner /usr/local/bin/
COPY redis-dump /usr/local/bin/
RUN chmod a+rx /usr/local/bin/mysql-backup
RUN chmod a+rx /usr/local/bin/redis-backup
RUN chmod a+rx /usr/local/bin/redis-jobrunner
RUN chmod a+rx /usr/local/bin/redis-dump

# bootstrap script
COPY bootstrap.sh ./
RUN chmod a+rx bootstrap.sh

# install redis shell client
COPY redi.sh ./
RUN chmod a+rx redi.sh

#add tini to run things
RUN apk add --no-cache bash

#add py-redis for python access to redis
RUN apk add --no-cache py-redis

# remove tecnativa's jobrunnner and replace it with redis-jobrunner
RUN rm /etc/periodic/15min/jobrunner
RUN rm /etc/periodic/hourly/jobrunner
RUN rm /etc/periodic/daily/jobrunner
RUN rm /etc/periodic/weekly/jobrunner
RUN rm /etc/periodic/monthly/jobrunner
RUN ln -s /usr/local/bin/redis-jobrunner /etc/periodic/15min/redis-jobrunner
RUN ln -s /usr/local/bin/redis-jobrunner /etc/periodic/hourly/redis-jobrunner
RUN ln -s /usr/local/bin/redis-jobrunner /etc/periodic/daily/redis-jobrunner
RUN ln -s /usr/local/bin/redis-jobrunner /etc/periodic/weekly/redis-jobrunner
RUN ln -s /usr/local/bin/redis-jobrunner /etc/periodic/monthly/redis-jobrunner

#because sadistic and this is proof of concept. make fake periodic folders to fool jobrunner to run properly
RUN mkdir /opt
RUN mkdir /opt/periodic
RUN mkdir /opt/periodic/15min
RUN mkdir /opt/periodic/hourly
RUN mkdir /opt/periodic/daily
RUN mkdir /opt/periodic/weekly
RUN mkdir /opt/periodic/monthly
RUN ln -s /usr/local/bin/jobrunner /opt/periodic/15min/jobrunner
RUN ln -s /usr/local/bin/jobrunner /opt/periodic/hourly/jobrunner
RUN ln -s /usr/local/bin/jobrunner /opt/periodic/daily/jobrunner
RUN ln -s /usr/local/bin/jobrunner /opt/periodic/weekly/jobrunner
RUN ln -s /usr/local/bin/jobrunner /opt/periodic/monthly/jobrunner

# Use bootstrap to start up cron after checking duplicity is set to run
CMD ["/bootstrap.sh"]