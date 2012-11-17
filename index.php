<?php
// List the installed Apache modules
echo '<h1>Apache Modules</h1>';

$apacheModules = apache_get_modules();
sort($apacheModules);

echo '<ul>';
foreach ($apacheModules as $module) {
    echo '<li>'.$module.'</li>';
}
echo '</ul>';

// List the PHP info
echo '<h1>PHP Info</h1>';
phpinfo();
