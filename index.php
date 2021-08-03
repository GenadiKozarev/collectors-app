<?php

// WIREFRAME: https://balsamiq.cloud/s3isxla/p8k55mx/r2278

$db = new PDO('mysql:host=db; dbname=collectorsApp', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `gwent_cards`;');
$query->execute();

$allCards = $query->fetchAll();

 /*uncomment if you want to check the whole db array
print_r($allCards);
 */

?>

<html lang="en">
<head>
    <title>Gwent cards collection</title>

    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="collector, app, gwent, card, collection">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Suez+One&display=swap" rel="stylesheet">
</head>


<body>
    <h1>Gwent cards collection</h1>

    <div class="card">
    <?php
        foreach ($allCards as $card) {
            echo '<h2 class="name">' . $card['name'] . '</h2>';
            echo '<img src="' . $card['image_link'] . '" alt="an image of the card">';
            echo '<p>' . $card['description'] . '</p>';
        }
        ?>
    </div>
</body>
</html>
