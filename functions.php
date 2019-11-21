<?php
/**
*Pulls information from plants database.
*
*@return array of information in the database.
 */
function getDataFromDatabase(): array {
    $db = new PDO('mysql:host=db;dbname=plants', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    $query = $db->query('SELECT `latin_name`, `level_of_watering`, `level_of_sunlight` FROM `House_Plants`');
    $plantsDB = $query->fetchAll();

    return $plantsDB;
}
/**
*Pulls information from specified data fields in the plants Database.
*
*@param array $plantsDB is the database where all info on the plants is stored
*@param array $plant is a row of the database from which the function will call information on plant attributes
*
*@return string of attributes for each plant
 */
function list_of_plants(array $plantsDB): string{
    $result = '';
    foreach($plantsDB as $plant) {
        if (gettype($plant['name']) === 'string'  && gettype($plant['watering'] === 'string') && gettype($plant['sunlight'] === 'string')){
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
 *Puts user entered information into the plants database.
 * @param $name
 * @param $watering
 * @param $sunlight
 */
function putDataInDatabase($name, $watering, $sunlight)
{
    $db = new PDO('mysql:host=db;dbname=plants', 'root', 'password');
    $query = $db->prepare('INSERT INTO `housePlants` (`name`, `watering`, `sunlight`) VALUES (:name, :watering, :sunlight)');
    $query->execute([':name' => $name,
    ':watering' => $watering,
    ':sunlight' => $sunlight]);
}
