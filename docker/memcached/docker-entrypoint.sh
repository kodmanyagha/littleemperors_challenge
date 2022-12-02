#!/bin/bash
set -e

create_socket_dir() {
  mkdir -p /run/memcached
  chmod -R 0777 /run/memcached
  chown -R memcache:memcache /run/memcached
}

create_socket_dir

# allow arguments to be passed to redis-server
if [[ ${1:0:1} = '-' ]]; then
  EXTRA_ARGS="$@"
  set --
fi

# default behaviour is to launch redis-server
if [[ -z ${1} ]]; then
  echo "Starting memcached-server..."
  echo  start-stop-daemon --start --chuid ${MEMCACHED_USER}:${MEMCACHED_USER} --exec $(which memcached) \
           -d -s /usr/local/docker/memcached/memcached.sock -m 64 -p 11211${EXTRA_ARGS}
  exec $(which memcached) -vv -u nobody -d -s /usr/local/docker/memcached/memcached.sock -m 64 -p 11211 ${EXTRA_ARGS}
else
  exec "$@"
fi
