#!/bin/bash
source config.sh

DB=demo
NAME=${NAME-crud_app_latest}

# Our DB is small, keep it as SQL
mysql --user="$MYSQL_ROOT" --password="$MYSQL_PASS" -e "DROP DATABASE $DB" || true
mysql --user="$MYSQL_ROOT" --password="$MYSQL_PASS" -e "CREATE DATABASE $DB"
mysql --user="$MYSQL_ROOT" --password="$MYSQL_PASS" $DB < ../../db/backups/${NAME}.sql
