<?php

require_once __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(BASE_URL);

$router->namespace("Source\app\controllers");

$router->group(null);

// $router->get("/", "Msgs_Twilio:get_Messages");
$router->get("/", "Msgs_Twilio:makeView");

$router->dispatch();