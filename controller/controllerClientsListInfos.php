<?php
include 'model/clients.php';

$clients = NEW clients();
$clientsListInfos = $clients->getClientsListInfos();
?>