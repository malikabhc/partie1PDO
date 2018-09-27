<?php
include 'model/clients.php';

$clients = NEW clients();
$clientList = $clients->getClientsList();
?>
