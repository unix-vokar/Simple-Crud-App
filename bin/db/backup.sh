#!/bin/bash
source config.sh

DB=demo
NAME=${NAME-crud_app_latest}

# Our DB is small, keep it as SQL
mysqldump --user="$MYSQL_ROOT" --password="$MYSQL_PASS" $DB > ../../db/backups/${NAME}.sql

# But, if it gets big, then pipe it into a gzip file
# pg_dump $DB | gzip > ./db/backups/${NAME}.gz
