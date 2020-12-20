<?php
//first step
// $router->define([
//     ''=>'controller/index.php',
//     'about'=>'controller/about.php',
//     'about/culture'=>'controller/about-culture.php',
//     'contact'=>'controller/contact.php',
//     'names'=>'controller/add-name.php'

// ]);


//second step
// $router->get('','controller/index.php');
// $router->get('about','controller/about.php');
// $router->get('about/culture','controller/about-culture.php');
// $router->get('contact','controller/contact.php');

// $router->post('names','controller/add-name.php');

//third step
$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('about/culture','PagesController@culture');
$router->get('contact','PagesController@contact');

$router->post('users/store','UsersController@store');
$router->get('users','UsersController@getAllUser');