<?php
include 'model/clients.php';

$clients = NEW clients();
$clientsNameMList = $clients->getclientsNameMList();
?>
