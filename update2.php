<?php

include ("connect.php");

if (isset($_POST['name'])){

$_name = $_POST['name'];
$_difficulty = $_POST['difficulty'];
$_distance = $_POST['distance'];
$_duration = $_POST['duration'];
$_height_difference = $_POST['height_difference'];

$req = $bdd->prepare("UPDATE hiking SET(name, difficulty, distance, duration, height_difference) WHERE (id= ?)
	VALUES (:name, :difficulty, :distance, :duration, :height_difference)");

  $req->bindParam(':id', $id, PDO::PARAM_INT);
  $req->bindParam(':name', $name);
  $req->bindParam(':difficulty', $difficulty);
  $req->bindParam(':distance', $distance);
  $req->bindParam(':duration', $duration);
  $req->bindParam(':height_difference', $height_difference);


  $req->execute();
  header("location: read.php");
//  $req->execute(array(
//
//  'name' => $_name,
//  'difficulty' => $_difficulty,
//  'distance' => $_distance,
//  'duration' => $_duration,
//  'height_difference' =>$_height_difference
//
// ));

?>
<script type="text/javascript">
		alert("La randonnée a été modifiée avec succès.");
 </script>
 <?php
}
?>
