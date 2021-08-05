<?php
require 'functions.php';

$db = new PDO('mysql:host=db; dbname=collectorsApp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$query = $db->prepare('SELECT * FROM `gwent_cards`;');
$query->execute();
$allCards = $query->fetchAll();


$addCardQuery = $db->prepare('INSERT INTO `gwent_cards` (`name`,`image_link`, `unit_strength`, `type`, `price`, `territory`) VALUES (:newCardName, :newCardImageUrl, :newCardUnitStrength, :newCardType, :newCardPrice, :newCardTerritory );');
$addCardQuery->bindParam(':newCardName', $newCardName);
$addCardQuery->bindParam(':newCardImageUrl', $newCardImageUrl);
$addCardQuery->bindParam(':newCardUnitStrength',$newCardUnitStrength);
$addCardQuery->bindParam(':newCardType', $newCardType);
$addCardQuery->bindParam(':newCardPrice', $newCardPrice);
$addCardQuery->bindParam(':newCardTerritory', $newCardTerritory);
$addCardQuery->execute();

$newCardName = '<h2>' . $_POST['cardName'] . '</h2>';
$newCardImageUrl = '<img src="' . $_POST['imageUrl'] . '" alt="an image of the card">';
$newCardUnitStrength = '<p>Unit Strength: ' . $_POST['unitStrength'] . '</p>';
$newCardType = '<p>Type: ' . $_POST['cardType'] . '</p>';
$newCardPrice = '<p>Price: ' . $_POST['cardPrice'] . '</p>';
$newCardTerritory = '<p>Territory: ' . $_POST['cardTerritory'] . '</p>';

$whatIsAdded = $newCardName . $newCardImageUrl . $newCardUnitStrength . $newCardType . $newCardPrice . $newCardTerritory;
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

    <h2>add a new card to your collection</h2>

    <div class="newCardForm">
        <form action="index.php" method="POST">
            <input type="text" placeholder="Enter card name" name="cardName" required>
            <input type="text" placeholder="Enter image URL" name="imageUrl" required>
            <input type="text" placeholder="Enter unit strength" name="unitStrength" required>
            <input type="text" placeholder="Enter type" name="cardType" required>
            <input type="text" placeholder="Enter price" name="cardPrice" required>
            <input type="text" placeholder="Enter territory" name="cardTerritory" required>
            <input type="submit" name="submit" value="Add a new card">
        </form>
    </div>



    <div class="allCards">
        <?php
        echo displayCollection($allCards);

        if(isset($_POST['submit'])) {
            filter_var($_POST['unitStrength'], FILTER_VALIDATE_INT);
            filter_var($_POST['cardPrice'], FILTER_VALIDATE_INT);
            echo $whatIsAdded
        } else {
            echo 'Error! Please use whole numbers when entering Unit Strength and/or Price.';
        }
        ?>
    </div>
</body>
</html>
