<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/':
        require 'public/index.php';
        break;
    // About page
    case '/fromages':
        require 'public/fromages.php';
		break;
	// Login page
	case '/login':
		require 'public/login.php';
		break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require 'public/views/404.php';
        break;
}

// require 'vendor/autoload.php';

// use App\Router\Router;

// $router = new Router($_GET['url']);



// $router->get('/', function(){
// 	// echo "Bienvenue sur la homepage !";
// 	include 'public/index.php';
// });
// $router->post('/', function(){
// 	include 'public/index.php';
// });
// $router->get('/login', function(){
// 	include 'public/login.php';
// });
// $router->get('/admin', function(){
// 	include 'public/admin.php';
// });
// $router->post('/admin', function(){
// 	include 'public/admin.php';
// });



// $router->get('/fromages', function(){
// 	// echo "Tous les fromages";
// 	include 'public/fromages.php';
// });
// $router->get('/fromages/:id', function($id){
// 	echo "Afficher le fromage $id";
// });
// $router->post('/fromages/:id', function($id){
// 	echo "Poster le fromage $id";
// });

// $router->run();
