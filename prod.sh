#!/usr/bin/env bash
git pull
export PROJECT_DOMAIN=itpassion.info
sh composer.sh install
docker-compose up -d server
