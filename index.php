<?php

echo '<h1>Heroku Environment Variables (sample)</h1>';
echo '<strong>BUILDPACK_URL</strong>: ' . $_SERVER['BUILDPACK_URL'].'<br />';

// List the PHP info
echo '<h1>PHP Info</h1>';
phpinfo();
