<?php

// for PHP files
define('APP', dirname(__FILE__) . DIRECTORY_SEPARATOR);

// for assets
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', dirname($_SERVER['SCRIPT_NAME']));
define('URL', URL_PROTOCOL .  URL_DOMAIN . URL_SUB_FOLDER . DIRECTORY_SEPARATOR);

require APP . 'controller/Gallery.php';

$application = new Gallery();
$application->showGallery();

