<?php
require 'vendor/autoload.php';

$router = new App\Router($_GET['url']);

$router->get('/fromages', function(){
	echo "Tous les fromages";
});
$router->get('/fromages/:id', function($id){
	echo "Afficher le fromage $id";
});
$router->post('/fromages/:id', function($id){
	echo "Poster le fromage $id";
});

$router->run();
