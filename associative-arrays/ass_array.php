<?php
    $dictionary = array("dog"=>"mans best friend", "burger"=>"a delicious sandwich", "fries"=>"a delicious snack", "steak"=>"delicious cooked meat", "rice"=>"asian version of bread", "pasta"=>"carbs", "sd"=>"home", "friends"=>"love");
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <ul>
            <?php
                foreach($dictionary as $item => $definition) {
                    $reverseDef = strrev($definition);
                    echo "<li>" . "<h1>$item:</h1> <h3>($reverseDef)</h3>" . "</li>";
                }
            ?>
        </ul>
    </body>
</html>
