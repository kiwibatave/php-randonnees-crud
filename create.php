<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="tres facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="tres difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Valider</button>

<?php

include ("connect.php");

if (isset($_POST['name'])){

$_name = $_POST['name'];
$_difficulty = $_POST['difficulty'];
$_distance = $_POST['distance'];
$_duration = $_POST['duration'];
$_height_difference = $_POST['height_difference'];

$req = $bdd->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference)
	VALUES (:name, :difficulty, :distance, :duration, :height_difference)");

$req->execute(array(

'name' => $_name,
'difficulty' => $_difficulty,
'distance' => $_distance,
'duration' => $_duration,
'height_difference' =>$_height_difference

));
?>
<script type="text/javascript">
		alert("La randonnée a été ajoutée avec succès.");
 </script>
 <?php
 // echo "La randonnée a été ajoutée avec succès.";

}

?>







	</form>
</body>
</html>
