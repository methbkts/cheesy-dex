<?php
if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}
?>

<main>
	<?php 
	if (isset($_POST['sect1'])) { 
		#include 'section1.php';
	} else {
		include 'public/views/section1.php';
	}

	if (isset($_POST['sect2'])) {
		#include 'section2.php';
	} else {
		include 'public/views/section2.php';

	}

	if (isset($_POST['sect3'])) {
		#include 'section3.php';
	} else {
		include 'public/views/section3.php';
	}
	?>

</main>
