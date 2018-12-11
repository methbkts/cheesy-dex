<?php

require 'vendor/autoload.php';

use App\Router\Router;

$router = new Router($_GET['url']);



$router->get('/', function(){
	// echo "Bienvenue sur la homepage !";
	include 'public/index.php';
});
$router->post('/', function(){
	include 'public/index.php';
});
$router->get('/login', function(){
	include 'public/login.php';
});
$router->get('/admin', function(){
	include 'public/admin.php';
});
$router->post('/admin', function(){
	include 'public/admin.php';
});



$router->get('/fromages', function(){
	// echo "Tous les fromages";
	include 'public/fromages.php';
});
$router->get('/fromages/:id', function($id){
	echo "Afficher le fromage $id";
});
$router->post('/fromages/:id', function($id){
	echo "Poster le fromage $id";
});

$router->run();
