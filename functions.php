<?php
/**
*Pulls information from House Plants database.
*
*@return array of information in the database.
 */
function getDataFromDatabase(): array {
    $db = new PDO('mysql:host=db;dbname=House_Plants_2019-09-23', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    $query = $db->query('SELECT `latin_name`, `level_of_watering`, `level_of_sunlight` FROM `House_Plants`');
    $House_Plant_DB = $query->fetchAll();

    return $House_Plant_DB;
}
/**
*Pulls information from specified data fields in the House_Plants Database.
*
*@param array $House_Plant_DB is the database where all info on the plants is stored
*@param array $plant is a row of the database from which the function will call information on plant attributes
*
*@return string of attributes for each plant
 */
function list_of_plants(array $House_Plant_DB): string{
    $result = '';
    foreach($House_Plant_DB as $plant) {
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

