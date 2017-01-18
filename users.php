<?php

require'client.php';
$client1 = new Client('client1@mail.com','c1',date('l jS \of F Y h:i:s A'));
$client2 = new Client('client2@mail.com','c2',date('l jS \of F Y h:i:s A'));
$tab = [$client1,$client2];
