<?php

function list_of_plants($House_Plants) {
    $result = '';
    //each row is an individual plant
    foreach($House_Plants as $plant) {
        //display this data from each row
        $result .= '<div>' .
                '<h1>'. $plant['latin_name'] . '</h1>' .
                '<h3>' . 'Level of Watering: ' . $plant['level_of_watering'] . '</h3>' .
                '<h3>' . 'Level of Sunlight: ' . $plant['level_of_sunlight'] . '</h3>' .
            '</div>';
    }
    return $result;
}

