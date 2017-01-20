<?php

require'client.php';
$date = date('d/m/Y', time());
$client1 = new Client('client1@mail.com','c1',$date);
$client2 = new Client('client2@mail.com','c2',$date);
$client3 = new Client ('client3@mail.com', 'c3', $date);

$tab = [$client1,$client2,$client3];
return $tab;