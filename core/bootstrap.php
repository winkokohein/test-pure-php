<?php 
$app = [];

//first step
// require "core/database/Connection.php";

// require "core/database/QueryBuilder.php";

// require "core/Request.php";

// require "core/Router.php";


//second step
// $app['config'] = require "config/config.php";

// $app['database'] = new QueryBuilder(Connection::make($app['config']['database']));


//third step

App::bind('config',require "config/config.php");

App::bind('database',
            new QueryBuilder(Connection::make(App::get('config')['database'])) 
        );
require "core/redirectview.php";

// function view()
// {
//     die('hello win ko ko hein');
// }

