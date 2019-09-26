<?php
require_once('functions.php');
if (isset($_POST['latin_name']) && isset($_POST['level_of_watering']) && isset($_POST['level_of_sunlight']))
{
    putDataInDatabase($_POST['latin_name'],$_POST['level_of_watering'],$_POST['level_of_sunlight']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Input Page</title>
    </head>
<body>
    <form method="post">
        <fieldset>
            <div>
                <label for="latin_name">Latin name of plant:</label>
                <input type="text" name="latin_name" required>
            </div>
            <div>
                <label for="level_of_watering">Level of watering needed:</label>
                <input type="radio" name="level_of_watering" value="Light" required><label for="Light" >Light</label>
                <input type="radio" name="level_of_watering" value="Moderate"><label for="Moderate">Moderate</label>
                <input type="radio" name="level_of_watering" value="Heavy"><label for="Heavy">Heavy</label>
            </div>
            <div>
                <label for="level_of_sunlight">Level of sunlight needed:</label>
                <input type="radio" name="level_of_sunlight" value="Low" required><label for="Low">Low</label>
                <input type="radio" name="level_of_sunlight" value="Moderate"><label for="Moderate">Moderate</label>
                <input type="radio" name="level_of_sunlight" value="Bright"><label for="Bright">Bright</label>
            </div>
            <input type="submit" value="Add to collection">
        </fieldset>
    </form>
</body>
</html>