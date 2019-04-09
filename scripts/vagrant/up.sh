#!/usr/bin/env bash

cd /vagrant

docker-compose up --detach --remove-orphans

echo "Done! Please wait a few seconds before the containers are up."
echo "Hostname: $HOSTNAME"