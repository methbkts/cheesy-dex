<?php
session_start();
require_once('./app/Connect/db.php');

addUserCheese($_SESSION['username'], $_POST['cheese']);
header('Location: /');die;
