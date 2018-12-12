<?php
session_start();

require_once('./app/Connect/db.php');
$all = getAll();

if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}
?>

<main>
	<section id="interface">
		<h2>
			<?php
			if (isset($_SESSION['username'])) {
				echo "Bienvenue sur votre Cheezydex " . $_SESSION['username'];
			} else {
				header("Location: /login");
			}
			?>
		</h2>
		<p> Gérer votre Cheesydex:</p><br>
		<table>
			<tr>
				<th>Fromage</th>
				<th>Lait</th>
				<th>Pâte</th>
				<th>Région</th>
			</tr>

			<?php

				foreach ($all as $key => $value) {
					$tr = "<tr>";
      		$tr .= "<td>" . $value['fromages'] . "</td>";
					$tr .= "<td>" . $value['lait'] . "</td>";
					$tr .= "<td>" . $value['type'] . "</td>";
					$tr .= "<td>" . $value['name'] . "</td>";
					$tr .= "<td><inpu></td>";
					$tr .= "</tr>";
      		echo $tr;
				}
			 ?>
		</table>

		<?php include 'interface-form.php';?>
	</section>
</main>
