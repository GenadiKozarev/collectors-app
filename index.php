<?php

$db = new PDO('mysql:host=db; dbname=collectorsApp', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('Select * FROM `gwent_cards`;');
$query->execute();

$allCards = $query->fetchAll();

// uncomment if you want to check the whole db array
print_r($allCards);
