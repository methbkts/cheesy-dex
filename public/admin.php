<?php
if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}

if (isset($_SESSION['username'])) {
	include 'layouts/header.php';
	include 'interface.php';
	include 'footer.php';
} else {
	header("Location: /login");
}
?>
