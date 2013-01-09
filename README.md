Columbo Buildpack PHP Template
=============================

This is the template for [taeram/heroku-buildpack-columbo-php](https://github.com/taeram/heroku-buildpack-columbo-php).

Features
--------

Custom apache configuration can be added to `config/apache.conf`

If you deploy a plain copy of the template, visiting the site will show you `index.php`,
which will list the Apache and PHP configuration.

NPM modules can be added to `package.json` in the root directory, and will be installed on deploy.

Comoposer packages can be added to `composer.json` in the root directory, and will be installed on deploy.

The `rollout.sh` script will be run as a part of the compile process.

Requirements
------------

    # Set the path variable to include /app/bin
    heroku config:set PATH=/usr/bin:/bin:/app/bin
    
    # Set the S3 bucket where your buildpack assets are
    heroku config:set BUILDPACK_S3_BUCKET=example/foo
    
