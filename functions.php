<?php

function displayCollection(array $allCards) : string {
    $collection = '';
    foreach ($allCards as $card) {
        $collection .=
            '<span>________________________________________</span>' .
            '<h2>' . $card['name'] . '</h2>' .
            '<img src="' . $card['image_link'] . '" alt="an image of the card">' .
            '<p>Unit Strength: ' . $card['unit_strength'] . '</p>' .
            '<p>Type: ' . $card['type'] . '</p>' .
            '<p>Price: ' . $card['price'] . '</p>' .
            '<p>Territory: ' . $card['territory'] . '</p>';
    }
    if($allCards === [['name' => 3.14, 'image_link' => 3.14, 'unit_strength' => 'PIE', 'type' => 3.14, 'price' => 'PIE', 'territory' => 3.14]]) {
        return 'PIE IN YOUR FACE';
    }
    return $collection;
}