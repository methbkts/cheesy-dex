<?php
if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}
?>

  <form class="" action="/" method="post">
  	<input type="checkbox" name="sect1" value="sect1"> Cacher la section 1<br>
  	<input type="checkbox" name="sect2" value="sect2"> Cacher la section 2<br>
  	<input type="checkbox" name="sect3" value="sect3"> Cacher la section 3<br><br>
  	<input type="submit" value="Save">
  </form>
