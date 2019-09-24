<?php

function list_of_plants($plant_db){
    foreach($House_Plants as $plant) {
        echo $plant ['latin_name'], ['watering_level'], ['level_of_sunlight'];
    }
}
