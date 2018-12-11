<?php 

if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}

?>

<main>
	<section id="interface">
		<h2>
			<?php
			if (isset($_SESSION['username'])) {
				echo "Bienvenue sur l'interface d'administration " . $_SESSION['username'];
			} else {
				header("Location: /login");
			}
			?>
		</h2>
		<p>Sélectionne les sections à cacher :</p><br>
		<?php include 'interface-form.php'; ?>
	</section>
</main>
