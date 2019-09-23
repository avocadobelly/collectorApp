<?php

$db = new PDO('mysql:host=db; dbname= House_Plants', 'root', 'password');

$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);

