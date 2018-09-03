#!/usr/bin/env bash
git pull
export PROJECT_DOMAIN=localhost
sh composer.sh install
docker-compose up -d server
