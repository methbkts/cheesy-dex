<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="/public/css/style.css">
	<title>CheesyDex</title>
</head>
<body>
	<header>
    
	<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex bd-highlight mb-3">
	  <a class="navbar-brand" href="/"><img class="" src="./public/img/cheese.svg" alt="" width="72" height="50"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<div class="mr-auto p-2 bd-highlight d-flex">
					<li class="nav-item active">
						<a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/fromages">Liste des fromages</a>
					</li>
				</div>
				<div class="p-2 bd-highlight d-flex">
					<li class="nav-item">
						<a class="nav-link" href="/login">Login</a>
					</li>
				</div>
				<div class="p-2 bd-highlight d-flex">
					<li class="nav-item">
						<a class="nav-link" href="/register">Register</a>
					</li>	
				</div>
			</ul>
  		</div>
	</nav>
    
</header>