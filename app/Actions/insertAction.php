<?php
session_start();

require_once('./app/Connect/db.php');
// Manque le pseudo
addUserCheese($_SESSION['username'], $_POST['cheese']);
header('Location: /');die;
