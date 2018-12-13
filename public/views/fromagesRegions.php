<?php
if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}
?>

<section id="fromages" class="fromages">
  <h2>Fromages</h2>
<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Comté</h4>
    <p class="card-text">le comté c'est bon.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</section>
