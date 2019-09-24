<?php

function plants_list(){
    foreach($House_Plants as $plant) {
        echo $plant ['latin_name'], ['watering_level'], ['level_of_sunlight'];
    }
}
