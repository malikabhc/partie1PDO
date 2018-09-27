<?php
include 'model/showTypes.php';
/* Déclaration de l'instance show de l'objet Shows */
$show = NEW showTypes();
/* Récupération du modele getShowsList dans l'objet showsList */
$showsList = $show->getShowsList();
?>
