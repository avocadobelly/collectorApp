<?php

//Set up connection to the DB.
$db = new PDO('mysql:host=db; dbname= House_Plants', 'root', 'password');
//Told PDO to return an associative array.
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);

$query= $db -> query('SELECT `latin_name`, `level_of_watering`, `level_of_sunlight` FROM House_Plants');

$House_Plants = $query -> fetchAll();

var_dump($House_Plants);

