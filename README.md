Columbo Buildpack PHP Template
=============================

This is the template for [taeram/heroku-buildpack-php-columbo](https://github.com/taeram/heroku-buildpack-php-columbo).

Features
--------

Custom apache configuration can be added to `config/apache.conf`

If you deploy a plain copy of the template, visiting the site will show you `index.php`,
which will list the Apache and PHP configuration.

NPM modules can be added to `package.json` in the root directory, and will be installed on deploy.

Comoposer packages can be added to `composer.json` in the root directory, and will be installed on deploy.

The `rollout.sh` script will be run as a part of the compile process.

Usage
-----

Create your heroku application
    mkdir [your-application-name]
    cd [your-application-name]
    git init .
    heroku apps:create [your-application-name]
    
Set the heroku config variables:
    cd [your-application-name]
    # Set the S3 bucket where your buildpack assets are
    heroku config:set BUILDPACK_S3_BUCKET=example/foo
    
    # Set the buildpack url
    heroku config:set BUILDPACK_URL=https://github.com/taeram/heroku-buildpack-php-columbo

Download a copy of the buildpack template:
    cd [your-application-name]
    curl -L https://github.com/taeram/heroku-buildpack-php-columbo-template/archive/master.tar.gz -o - | tar zx --strip-components=1

Add the buildpack template to your repo, and deploy:
    cd [your-application-name]
    git add *
    git commit -am "Initial commit"
    git push heroku master
    
