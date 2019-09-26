<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Input Page</title>
    </head>
<body>
    <form method="post" action="/Display.php">
        <fieldset>
            <div>
                Latin name of plant:
                <input type=text" name="latin_name">
            </div>
            <br>
            <div>
                Level of watering needed:
                <input type=text" name="level_of_watering">
            </div>
            <br>
            <div>
                Level of sunlight needed:
                <input type=text" name="level_of_sunlight">
                <br>
                <input type="submit" value="Add to collection">
            </div>
        </fieldset>
    </form>
</body>
</html>