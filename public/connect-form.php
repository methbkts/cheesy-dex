<?php
if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}
?>

<form class="" action="/admin" method="post">
	<input type="text" name="username" placeholder="Pseudo" required>
	<input type="password" name="password" value="mdp" placeholder="Mot de passe" minlength="4" required>
	<input type="submit" value="Se Connecter">
</form>
