<?php
namespace App\Router;

class Router
{
	private $url;
	private $routes = [];

	public function __construct($url){
		$this->url = $url;
	}

	public function get($path, $callable){
		$route = new Route($path, $callable);
		$this->routes['GET'][] = $route;
	}

	public function post($path, $callable){
		$route = new Route($path, $callable);
		$this->routes['POST'][] = $route;
	}

	public function run(){
		// echo "<pre>";
		// echo print_r($this->routes);
		// echo "</pre>";
		if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
			throw new Exception("Error Processing Request, no routes matches", 1);
		}
	}
}
