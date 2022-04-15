#!/bin/bash
#
# Backup script
#

# Format: YEAR MONTH DAY - HOUR MINUTE SECOND
DATE=$(date +%Y%m%d-%H%M%S)

# Target file
TARTARGET="../stage04/crudapp-$DATE.tar.gz"

tar -czvf $TARTARGET ../*
