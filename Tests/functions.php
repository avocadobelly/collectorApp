<?php

use PHPUNit\Framework\TestCase;

require('../functions.php');

//Success test:
class TestFunctions extends TestCase
{
    public function testListOfPlants_returnsAString()
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


//Malform test:
    public function testListOfPlants_integersNotStrings()
    {
        $expected = 'Retrieved wrong input type from database';
        $input = [['latin_name' => 1234, 'level_of_watering' => 4567, 'level_of_sunlight' => 7891]];
        $case = list_of_plants($input);

        $this->assertEquals($expected, $case);
    }
}