# Little Emperors Challenge

## Development Process

- [x] Create service.
    - [x] `bulk` mode (100 lines per insert SQL.)
    - [ ] `load` mode (Fastest insert with MySQL LOAD DATA feature.)
- [x] Write tests for service and API.
- [x] Create command.
- [x] Create HTTP API.

## Requirements

- PHP 8.1
- Composer
- Docker

## Usage

```bash
# Install chokidar and other things for running Swoole in docker.
$ yarn

# Install packages and run docker.
$ cp .env.example .env
$ composer install
$ sail build --no-cache
$ sail up -d

# Wait a little until Mysql up and running.
$ sleep 20

$ sail artisan key:generate
$ sail artisan migrate:fresh

$ # List options for import hotels.
$ sail artisan import:hotels --help
Description:
  Hotel import from CSV file.

Usage:
  import:hotels [options]

Options:
  -F, --file[=FILE]            Full path for CSV file. [default: "./hotels.csv"]
  -D, --delimiter[=DELIMITER]  CSV row delimiter. [",", ";", "tab"] [default: ";"]
  -M, --mode[=MODE]            Import mode. Use SQL bulk insert or MySQL LOAD DATA FILE. [bulk, load] [default: "bulk"]
  -I, --interactive            Command interactive mode.
  -O, --override               Override existing or just create new.
  -h, --help                   Display help for the given command. When no command is given display help for the list command
  -q, --quiet                  Do not output any message
  -V, --version                Display this application version
      --ansi|--no-ansi         Force (or disable --no-ansi) ANSI output
  -n, --no-interaction         Do not ask any interactive question
      --env[=ENV]              The environment the command should run under
  -v|vv|vvv, --verbose         Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

# Example import commands:
$ sail artisan import:hotels
# sail artisan import:hotels --file=./hotels.csv
# sail artisan import:hotels --file=./hotels.csv --mode=bulk
# sail artisan import:hotels --file=./hotels.csv --mode=bulk --override

# Executing tests
$ sail phpunit

# Using with valet
$ valet proxy --secure challenge https://127.0.0.1:8490

$ curl https://challenge.test
{"app":"Challenge"}

# Access for API docs. (Example: https://challenge.test/docs)
$ sail artisan scribe:generate

```

## Task Details

The test should be done in Laravel and committed to this repository.

Feel free to install any libraries or plugins you want to facilitate the tasks.

### Test 1

Implement a console command to import a CSV file with a list of hotels and store them in a local database. You can use any
database engine of your choice.
In the hotels.csv file there are the fields and data you need to import.
Note the file columns are separated by semicolon ';' as some of the content might have commas in it, like the Hotel Name or
the Description.

To help with the CSV parsing, you're free to install via composer any existing import library if you want or just use the PHP
CSV functions. The script should run from the console via a simple command.

The script should run using the command: `php artisan import:hotels`

### Test 2

Implement a Restful API to manage CRUD operations for the hotels stored in the database from the *Test 1*.
The API should have an endpoint for each of the following actions:

- Return the list of all hotels. It should display only the id, name and city fields of each hotel.
- Return all the details of a single hotel given its ID.
- Add a new hotel in the database.
- Update the details of a single hotel.
- Delete a single hotel from the database. Please use soft deletes.

