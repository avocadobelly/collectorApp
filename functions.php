<?php
/*
*Pulls information from specified data fields in the House_Plants Database.
*
*@param array $House_Plants is the database where all info on the plants is stored
*@param array $plant is a row of the database from which the function will call information on plant attributes
*
*@return
 */
function list_of_plants($House_Plants) {
    $result = '';
    foreach($House_Plants as $plant) {
        $result .= '<div>' .
                '<h1>'. $plant['latin_name'] . '</h1>' .
                '<h3>' . 'Level of Watering: ' . $plant['level_of_watering'] . '</h3>' .
                '<h3>' . 'Level of Sunlight: ' . $plant['level_of_sunlight'] . '</h3>' .
            '</div>';
    }
    return $result;
}

