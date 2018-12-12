<?php

require 'vendor/autoload.php';

use App\Router\Router;

// die($_GET['url']);

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
	include('public/admin.php');
});
$router->post('/admin', function(){
	// header("Location: /admin");
	include('public/admin.php');
	// echo 'wsh alors';
});

//

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


$router->post('/insertAction', function(){
	include 'app/Actions/insertAction.php';
});


//
$router->run();
