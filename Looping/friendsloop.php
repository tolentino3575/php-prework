<?php
    $friends = array("michael", "monica", "tristan", "marie", "jack", "mikey");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My friends</title>
    </head>
    <body>
        <ul>
            <?php foreach ($friends as $names) {
                echo "<li>" . $names . " is my friend" . "</li>";
            }
            ?>
        </ul>

    </body>
</html>
