<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

declare (strict_type = 1);

//autoloading vendors
require_once dirname(__DIR__).'/vendor/autoload.php';
$request = Request::createFromGlobals();
dump($request);
echo "Hello World!";