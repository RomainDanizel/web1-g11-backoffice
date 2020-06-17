
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
 echo '<div class ="link">
    <a href="../includes/form.php" class ="link_form">Formulaire</a>
</div>
<style>
    link_form {
        background-color:green;
        width:30px;
        height: 30px;
    }
</style>
</div>'
?>



