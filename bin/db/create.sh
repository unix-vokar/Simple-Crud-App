#!/bin/bash

#Authentication
source config.sh
#Database Jobs
DB=demo

mysql --user="$MYSQL_ROOT" --password="$MYSQL_PASS" -e "DROP DATABASE IF EXISTS demo"
mysql --user="$MYSQL_ROOT" --password="$MYSQL_PASS" -e "CREATE DATABASE $DB"
mysql --user="$MYSQL_ROOT" --password="$MYSQL_PASS" $DB < ../../db/schema.sql
mysql --user="$MYSQL_ROOT" --password="$MYSQL_PASS" $DB < ../../db/seed.sql

