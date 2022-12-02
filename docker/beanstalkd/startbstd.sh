#!/bin/bash

pid="`cat ./app_bstd/bstd.pid`"
kill "$pid"

rm -rf ./app_bstd/*

if [ $1 == 'unix' ]
then
    nohup beanstalkd -l unix://$(pwd)/app_bstd/bstd.sock -z 32768 > wpcrm_bstd/bstd.log 2>&1 &
elif [ $1 == 'net' ]
then
    nohup beanstalkd -l 0.0.0.0 -p 11311 -z 32768 > wpcrm_bstd/bstd.log 2>&1 &
fi

pid=$!
echo "$pid" > app_bstd/bstd.pid
echo "$pid"

