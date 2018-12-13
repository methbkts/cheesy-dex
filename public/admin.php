<?php
session_start();

require('/var/www/html/app/Connect/db.php');
$users = getAllUsers();

?>

<form method="POST" action="interface.php">
	<?php
if (!isset($_POST['username']) && isset($_POST['mdp'])) {
	foreach ($users as $value) {
		$pseudo = $value['pseudo'];
		$mdp = $value['mdp'];
			if ($_POST['username'] == $pseudo && $_POST['mdp'] == $mdp) {
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['id'] = $_POST['id'];
				include 'layouts/header.php';
				include 'interface.php';
				include 'footer.php';
			} else {
				header("Location: /login");
			}
	}
} else {
	header("Location: /login");
}
?>
</form>

// if (isset($_SESSION['username'])) {
// 	include 'layouts/header.php';
// 	include 'interface.php';
// 	include 'footer.php';
// } else {
// 	header("Location: /login");
// }
//
