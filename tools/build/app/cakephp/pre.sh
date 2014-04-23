#!/bin/bash -x

if [ "$DB" = 'mysql' ]; then mysql -e 'DROP DATABASE IF EXISTS test_nc3; CREATE DATABASE test_nc3;'; fi
if [ "$DB" = 'pgsql' ]; then psql -c 'CREATE DATABASE test_nc3;' -U postgres; fi
if [ "$DB" = 'pgsql' ]; then psql -c 'CREATE SCHEMA test2;' -U postgres -d test_nc3; fi
if [ "$DB" = 'pgsql' ]; then psql -c 'CREATE SCHEMA test3;' -U postgres -d test_nc3; fi
#mysql -utest -ptest -e 'DROP DATABASE IF EXISTS test_nc3; CREATE DATABASE test_nc3';
echo $DB
echo ${DB}
composer install
chmod -R 777 ./app/tmp
mkdir -p build/logs
cp app/Config/database.php.$DB app/Config/database.php

for p in `cat app/Config/vendors.txt`
do
  export IGNORE_PLUGINS=$IGNORE_PLUGINS,$WORKSPACE/app/Plugin/$p
  export IGNORE_PLUGINS_OPTS="$IGNORE_PLUGINS_OPTS --exclude app/Plugin/$p"
done

ant build-parallel
