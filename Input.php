<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Input Page</title>
    </head>
<body>
    <form method="post" action="/functions.php">
        <fieldset>
            <div>
                <label for="latin_name">Latin name of plant:</label>
                <input type="text" name="latin_name">
            </div>
            <div>
                <label for="level_of_watering">Level of watering needed:</label>
                <input type="radio" name="level_of_watering" value="Light"><label for="Light">Light</label>
                <input type="radio" name="level_of_watering" value="Moderate"><label for="Moderate">Moderate</label>
                <input type="radio" name="level_of_watering" value="Heavy"><label for="Heavy">Heavy</label>
            </div>
            <div>
                <label for="level_of_sunlight">Level of sunlight needed:</label>
                <input type="radio" name="level_of_sunlight" value="Low"><label for="Low">Low</label>
                <input type="radio" name="level_of_sunlight" value="Moderate"><label for="Moderate">Moderate</label>
                <input type="radio" name="level_of_sunlight" value="Bright"><label for="Bright">Bright</label>
            </div>
            <input type="submit" value="Add to collection">
        </fieldset>
    </form>
</body>
</html>