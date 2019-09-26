<?php
//sets up connection to functions file
require_once('functions.php');
$House_Plant_DB = getDataFromDatabase();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Display Page</title>
    </head>
<body>

<?php
//calls list_of_plants function and echoes the result
 echo list_of_plants($House_Plant_DB);
?>

</body>
</html>
