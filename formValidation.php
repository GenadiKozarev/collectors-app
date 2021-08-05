<?php
$db = new PDO('mysql:host=db; dbname=collectorsApp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(isset($_POST['submit'])) {
    $newCardName = $_POST['cardName'];
    $newImageUrl = $_POST['imageUrl'];
    $newUnitStrength = $_POST['unitStrength'];
    $newCardType = $_POST['cardType'];
    $newCardPrice = $_POST['cardPrice'];
    $newCardTerritory = $_POST['cardTerritory'];

    $addCardQuery = $db->prepare('INSERT INTO `gwent_cards` (`name`,`image_link`, `unit_strength`, `type`, `price`, `territory`) VALUES (:newCardName, :newCardImageUrl, :newCardUnitStrength, :newCardType, :newCardPrice, :newCardTerritory);');

    $addCardQuery->bindParam(':newCardName', $newCardName);
    $addCardQuery->bindParam(':newCardImageUrl', $newImageUrl);
    $addCardQuery->bindParam(':newCardUnitStrength',$newUnitStrength);
    $addCardQuery->bindParam(':newCardType', $newCardType);
    $addCardQuery->bindParam(':newCardPrice', $newCardPrice);
    $addCardQuery->bindParam(':newCardTerritory', $newCardTerritory);

    $addCardQuery->execute();

    header('Location: index.php');
}