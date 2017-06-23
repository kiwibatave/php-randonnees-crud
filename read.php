<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="read">
    <h1>Liste des randonnées</h1>
    <a href="create.php"></a>
    <table>
      <!-- Afficher la liste des randonnées -->
      <?php

      include ("connect.php");

      $anwser = $bdd->query('SELECT * FROM hiking');
      $anwser1 = $anwser->fetchALL();

      foreach ($anwser1 as $value) {
?>
              <p>Nom de la randonnée : <?=$value->name?></p>
              <p>Difficulté : <?=$value->difficulty?></p>
              <p>Distance : <?=$value->distance?></p>
              <p>Durée de la randonnée : <?=$value->duration?></p>
              <p>Dénivelé de la randonnée : <?=$value->height_difference?></p><hr>

      <form class="" action="delete.php" method="post">
        <input type="hidden" type="number" name="id" value="<?= $value->id?>">
        <input type="submit" value="supprimer">
      </form>
      <form class="" action="update.php" method="post">
        <input type="hidden" type="number" name="id" value="<?= $value->id ?>">
        <input type="submit" value="edit">
      </form>
      <hr>
      <?php
      }
      ?>
    </table>
  </body>
</html>
