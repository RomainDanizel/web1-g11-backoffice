<?php
ini_set('display_errors', 'on');

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

 $app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});
$app->addRoutingMiddleware();

define("APP_ROOT_DIR", dirname(__DIR__) . "/");

require_once APP_ROOT_DIR . "includes/pdo.php";
require_once APP_ROOT_DIR . "includes/files.php";
require_once APP_ROOT_DIR . "includes/function.php";
require  APP_ROOT_DIR . "app/add.php";
require  APP_ROOT_DIR . "app/read.php";

newVideo(104, 'jean', 'rap', 'dema.mp4', 'jamais . je . pensais . que . ça . allait . mal . se . passer');
getFile();


