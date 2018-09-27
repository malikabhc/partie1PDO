<?php
include 'model/clients.php';

$clients = NEW clients();
$firstTwentyClientsList = $clients->getFirstTwentyClientsList();
?>
