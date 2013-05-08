#!/bin/bash

## --------------------------------------------------------------------------
# This script is run by the Heroku Buildpack on each deploy
## --------------------------------------------------------------------------

# Fail fast
set -e

BUILD_DIR=$1
CACHE_DIR=$2
WWW_DIR=$BUILD_DIR/www

echo "-----> Autobots roll out!"
cd $WWW_DIR
