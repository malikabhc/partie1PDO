<?php
include 'controller/controllerClientsNameM.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Merienda|Oswald" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css" />
  <title> Colyseum - Clients dont le nom commence par M</title>
</head>
<body>
      <h1 class="text-center">5 - Liste des clients dont le nom commence par M</h1>
      <!--Création d'un tableau qui affichera le nom et prénom des 20 premiers clients-->
      <div class="container mt-4 mb-4">
          <?php foreach($clientsNameMList as $clientsNameMDetail){ ?>
          <p class="text-center font-weight-bold mt-4">Nom : <span><?= $clientsNameMDetail->lastName ?></span><br />
          Prénom : <span><?= $clientsNameMDetail->firstName ?></span></p>
      <?php } ?>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
