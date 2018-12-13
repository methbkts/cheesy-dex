<?php
session_start();
require_once('./app/Connect/db.php');

deleteUserCheese($_SESSION['username'], $_POST['id']);
header('Location: /');die;
