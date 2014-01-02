Columbo PHP Buildpack Template
==============================

This is the template for the [Columbo Buildpack][].

[Columbo Buildpack]: https://github.com/taeram/heroku-buildpack-php-columbo
[NPM]: https://npmjs.org/
[Composer]: http://getcomposer.org/
[fork this repo]: https://help.github.com/articles/fork-a-repo

Requirements
============
* A [Heroku](https://www.heroku.com/) account
* An [Amazon AWS](http://aws.amazon.com/) account
* Your Amazon AWS Access Key and Secret Key
* An [Amazon S3](http://aws.amazon.com/s3/) bucket, for storing the buildpack assets

Configuration
=============

The [Columbo Buildpack][] contains basic Apache and PHP configurations, but those
configurations can be modified by modifiying the following files in your Columbo
Buildpack Template:

* To configure Apache, edit `/config/apache.conf`
* To configure PHP, edit `/config/php.ini`

To test and verify your configuration settings, simply push up the raw Columbo
Buildpack Template. Then go to the root url of your Heroku app, where you'll
be able to see the raw `phpinfo()` for your application.

Dependency Management
=====================

The Columbo Buildpack Template also supports [NPM][] and [Composer][] dependency management:
* NPM modules can be added to `package.json` in the root directory, and will be installed on deploy.
* Comoposer packages can be added to `composer.json` in the root directory, and will be installed on deploy.

Deploying
=========

Add any further configuration steps to `rollout.sh`, which is run during the deploy
process.

Setup
=====

Here's how to setup and configure the buildpack template for the first time.

#### 1. Fork the repo

Since buildpack template configuration can differ quite widely from project to project,
it's a good idea to [fork this repo][] and use the fork as your buildpack template.

#### 2. Create a Heroku application

First, you'll need to create an empty directory for your application, and tell
Heroku what name you want for your project:

```bash
    mkdir your-application
    cd your-application
    git init .
    heroku apps:create your-application
```

Then, you'll need to configure Heroku:
```bash
    # These steps should be run in your application directory, as created
    # above

    # Enable access to config variables during the build process
    heroku labs:enable user-env-compile

    # Set the S3 bucket where your buildpack assets are
    # This should match your [Columbo Buildpack][] BUILDPACK_S3_BUCKET setting
    heroku config:set BUILDPACK_S3_BUCKET=example/foo

    # Set the buildpack url
    # If you've created your own Columbo Buildpack fork, be sure and use that URL instead
    heroku config:set BUILDPACK_URL=https://github.com/taeram/heroku-buildpack-php-columbo

    # Set your New Relic license key
    heroku config:set NEW_RELIC_LICENSE_KEY=abcdefg1234567
```

#### 3. Deploy

Now you're all set to pull down a copy of the buildpack template, and deploy it to Heroku for the first time:

```bash
    # Download a copy of the buildpack template
    cd your-application
    curl -L https://github.com/taeram/heroku-buildpack-php-columbo-template/archive/master.tar.gz -o - | tar zx --strip-components=1

    # Add the buildpack template to your repo, and deploy
    git add .
    git commit -am "Initial commit"
    git push heroku master
```


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/taeram/heroku-buildpack-php-columbo-template/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

