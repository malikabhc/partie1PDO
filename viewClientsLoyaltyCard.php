<?php
include 'controller/controllerLoyaltyCard.php';
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
  <title>Colyseum - Liste des clients possédant une carte de fidélité</title>
</head>
<body>
      <h1 class="text-center">4 - Liste des clients possédant une carte de fidélité</h1>
      <!--Création d'un tableau qui affichera la liste des clients possédant une carte de fidélité-->
      <div class="container mt-4 mb-4">
        <table class="table table-bordered table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th class="text-center">Nom</th>
              <th class="text-center">Prénom</th>
            <!-- <th class="text-center">Carte de fidélité</th> -->
            </tr>
          </thead>
          <tbody>
            <?php foreach($clientsLoyaltyCardList as $clientsLoyaltyCardDetail){ ?>
              <tr>
                <td class="text-center"><?= $clientsLoyaltyCardDetail->lastName ?></td>
                <td class="text-center"><?= $clientsLoyaltyCardDetail->firstName ?></td>
                <!-- <td class="text-center"><?= $clientsLoyaltyCardDetail->card ?></td> -->
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
