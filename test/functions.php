<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessDisplayCollection()
    {
        $input = [['name' => 'Dandelion', 'image_link' => 'images/Dandelion-gwent-card.jpg', 'unit_strength' => 2, 'type' => 'Morale', 'price' => 20, 'territory' => 'Gustfields']];

        $expectedOutput = '<h2>Dandelion</h2>' .
        '<img src="images/Dandelion-gwent-card.jpg" alt="an image of the card">' .
        '<p>Unit Strength: 2</p>' .
        '<p>Type: Morale</p>' .
        '<p>Price: 20</p>' .
        '<p>Territory: Gustfields</p>';

        $actualOutput = displayCollection($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }


    public function testFailureDisplayCollection()
    {
        $input = [['name' => 'Freddie']];
        $expectedOutput = 'Invalid data. Please enter correct information.';
        $actualOutput = displayCollection($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }


    public function testMalformedDisplayCollection()
    {
        $input = -23483.3452;
        $this->expectException(TypeError::class);
        $output = displayCollection($input);
    }

}