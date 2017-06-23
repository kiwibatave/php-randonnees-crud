<?php
  include("connect.php");

  $req = $bdd->prepare('DELETE FROM hiking WHERE id= ?');

  $req->execute(array($_POST['id']));

header('Location: read.php');
  ?>
