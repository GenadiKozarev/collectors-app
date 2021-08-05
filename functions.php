<?php

function displayCollection(array $allCards) : string {
    $collection = '';
    foreach ($allCards as $card) {
        if(!(array_key_exists('name', $card) &&
            array_key_exists('image_link', $card) &&
            array_key_exists('unit_strength', $card) &&
            array_key_exists('type', $card) &&
            array_key_exists('price', $card) &&
            array_key_exists('territory', $card))) {
            return 'Invalid data. Please enter correct information.';
        }
        $collection .=
            '<h2>' . $card['name'] . '</h2>' .
            '<img src="' . $card['image_link'] . '" alt="an image of the card">' .
            '<p>Unit Strength: ' . $card['unit_strength'] . '</p>' .
            '<p>Type: ' . $card['type'] . '</p>' .
            '<p>Price: ' . $card['price'] . '</p>' .
            '<p>Territory: ' . $card['territory'] . '</p>';
    }
    return $collection;
}