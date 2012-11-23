Heroku Buildpack PHP Template
=============================

This is the template for [taeram/heroku-buildpack-php](https://github.com/taeram/heroku-buildpack-php).

Features
--------

Custom apache configuration can be added to `config/apache.conf`

If you deploy a plain copy of the template, `index.php` will list the Apache
and PHP setup.

NPM modules can be added to `package.json` and will be installed on deploy.

The `rollout.sh` script will be run as a part of the compile process.

Requirements
------------

    # Set the path variable to include /app/bin
    heroku config:set PATH=/usr/bin:/bin:/app/bin
