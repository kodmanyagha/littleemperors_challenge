#!/bin/bash

git pull origin main

bash vendor/bin/sail up -d
bash vendor/bin/sail composer install
bash vendor/bin/sail composer du

rm -rf bootstrap/cache/*.php

bash vendor/bin/sail restart
sleep 2

bash vendor/bin/sail artisan cache:clear
bash vendor/bin/sail artisan route:clear
bash vendor/bin/sail artisan optimize:clear
bash vendor/bin/sail artisan optimize

bash vendor/bin/sail artisan migrate --force
bash vendor/bin/sail artisan db:seed --force
bash vendor/bin/sail composer queue-nohup
