<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (PHP_MAJOR_VERSION < 8) {
    die('Requires PHP version 8 or higher');
}

require_once '../vendor/autoload.php';

define('ROOT_DIR', dirname(__DIR__));
