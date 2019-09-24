<?php

//Set up connection to the DB.
$db = new PDO('mysql:host=db;dbname=House_Plants', 'root', 'password');
//Told PDO to return an associative array.
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
//queried the db remotely
$query = $db->query('SELECT `latin_name`, `level_of_watering`, `level_of_sunlight` FROM House_Plants');
//fetch all data listed in query and store in variable
$House_Plants = $query->fetchAll();
//output to the browser
var_dump($House_Plants);