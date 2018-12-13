<?php
session_start();


$cheese = getAllCheese();

if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}
?>

  <form class="" action="/insertAction" method="post">

		<label for="">Ajouter un fromage à votre cheesydex:</label><br>
  	<select type="text" name="cheese" value=""><br>
			<?php
			 	foreach ($cheese as $value) {
			 		$id = $value['id'];
					$name = $value['name'];
					echo "<option value='.$id'.'>$name</option>";
			 	}
			 ?>
  	<input type="submit" value="Ajouter">
  </form>
