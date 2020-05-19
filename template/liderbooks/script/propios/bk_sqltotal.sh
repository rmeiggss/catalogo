#!/bin/bash
USER=root
PASS=Mar.Tru5747158
for db in `echo "show databases" | mysql -u$USER -p$PASS | grep -v ^mysql$ | grep -v ^Database$`;
do
  echo $db;
  #mysqldump -u$USER -p$PASS --opt ${db}> ${db}.sql;
  break
done
