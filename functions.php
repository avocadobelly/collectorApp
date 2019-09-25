<?php

/*
*Pulls information from specified data fields in the House_Plants Database.
*
*@param array $House_Plants is the database where all info on the plants is stored
*@param array $plant is a row of the database from which the function will call information on plant attributes
*
*@return string of attributes for each plant
 */
function list_of_plants(array $House_Plants): string{
    $result = '';
    foreach($House_Plants as $plant) {
        //if the result returns a string and the plant variable returns an array then the code will run
        if (gettype($plant['latin_name']) === 'string'  && gettype($plant['level_of_watering'] === 'string') && gettype($plant['level_of_sunlight'] === 'string')){
            //if the result returns anything but a string or the plant variable returns anything but an array then an error message will be displayed
            $result .= '<div>
                        <h1>' . $plant['latin_name'] . '</h1>
                        <h3>' . 'Level of Watering: ' . $plant['level_of_watering'] . '</h3>
                        <h3>' . 'Level of Sunlight: ' . $plant['level_of_sunlight'] . '</h3>
                    </div>';
        } else {
            return 'Retrieved wrong input type from database';
        }
    }
    return $result;

}

