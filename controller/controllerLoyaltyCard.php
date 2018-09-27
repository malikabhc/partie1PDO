<?php
include 'model/clients.php';

$clients = NEW clients();
$clientsLoyaltyCardList = $clients->getclientsLoyaltyCardList();
?>
