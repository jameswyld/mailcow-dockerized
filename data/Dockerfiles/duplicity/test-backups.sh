#!/bin/bash
#TESTING ONLY: run through all configured backup tasks in one go.
echo "Testing all configured backups"

echo "15min..."
/etc/periodic/15min/redis-jobrunner

echo "hourly..."
/etc/periodic/hourly/redis-jobrunner

echo "daily..."
/etc/periodic/daily/redis-jobrunner

echo "weekly..."
/etc/periodic/weekly/redis-jobrunner

echo "monthly..."
/etc/periodic/monthly/redis-jobrunner

echo "Done testing.  I hope it worked :)"