<?php

// Write the db connection function here


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
        if (gettype($plant['latin_name']) === 'string'  && gettype($plant['level_of_watering'] === 'string') && gettype($plant['level_of_sunlight'] === 'string')){
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

/**
 *Puts user entered information into the House Plants database.
 */
function putDataInDatabase()
{
    $db = new PDO('mysql:host=db;dbname=House_Plants_2019-09-23', 'root', 'password');
    $query = $db->prepare('INSERT INTO `House_Plants` (`latin_name`, `level_of_watering`, `level_of_sunlight`) VALUES (:name, :watering, :sunlight)');
    $query->execute([':name' => $_POST['latin_name'],
    ':watering' => $_POST['level_of_watering'],
    ':sunlight' => $_POST['level_of_sunlight']]);
}

