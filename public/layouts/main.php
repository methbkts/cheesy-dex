<?php
if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}
?>

<main>
	<?php include 'public/views/home.php';?>
</main>
