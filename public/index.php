<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

declare (strict_type = 1);

//autoloading vendors
require_once dirname(__DIR__).'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
$request = Request::createFromGlobals();
//dump($request);
use Symfony\Component\HttpFoundation\Response;
$response = new Response(
    'Content',
    Response::HTTP_OK,
    ['content-type' => 'text/html']
);
$response->setContent('Hello World');
$response->send();