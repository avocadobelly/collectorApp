<?php

use PHPUNit\Framework\TestCase;
//below
require('../functions.php');

class TestFunctions extends TestCase
{
    public function testListOfPlants()
    {
        $expected = '<div>
                        <h1>' . 'Ivy' . '</h1>
                        <h3>' . 'Level of Watering: ' . 'Light' . '</h3>
                        <h3>' . 'Level of Sunlight: ' . 'Bright' . '</h3>
                    </div>';
        $input = [['latin_name' => 'Ivy', 'level_of_watering' => 'Light', 'level_of_sunlight' => 'Bright']];
        $case = list_of_plants($input);

        $this->assertEquals($expected, $case);
    }
}