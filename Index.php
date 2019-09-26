<?php
require_once('functions.php');
// CAll the db connection function here
// $db = dbConnection();
//$House_Plant_DB = getDataFromDatabase($db);
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
 echo list_of_plants($House_Plant_DB);
?>

</body>
</html>
