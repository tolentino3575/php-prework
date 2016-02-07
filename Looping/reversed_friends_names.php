<?php
    $friends = array("michael", "monica", "tristan", "marie", "jack", "mikey");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Reversed Friends Names</title>
    </head>
    <body>
        <ul>
            <?php foreach($friends as $reversed) {
                echo "<li>" . $reversedName . " is my friend" . "</li>";
                $reversedName = strrev($reversed);
            }
            ?>
        </ul>
    </body>
</html>
