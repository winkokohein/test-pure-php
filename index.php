<?php 

// $config = require "config/config.php";
require "vendor/autoload.php";
$select = require "core/bootstrap.php";

// $router = new Router();


$router = Router::load('routes.php');

// require "index.view.php";

$router->direct(Request::uri(),Request::method());