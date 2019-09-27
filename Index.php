<?php
require_once('functions.php');
$House_Plant_DB = getDataFromDatabase();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Display Page</title>
        <link href="normalize.css" rel="stylesheet" type="text/css">
        <link href="Styles.css" rel="stylesheet" type="text/css">
    </head>
<body class="collection">
    <div class="plant">
        <?php
        echo list_of_plants($House_Plant_DB);
        ?>
        <a href = "http://localhost:1234/collectorApp/Input.php">Add to the collection</a>
    </div>
</body>
</html>
