<?php
    $itemOne = $_GET["itemOne"];
    $itemTwo = $_GET["itemTwo"];
    $itemThree = $_GET["itemThree"];
    $priceArray = array($itemOne, $itemTwo, $itemThree);
    $totalPrice=0;
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Total</title>
    </head>
    <body>
        <h1>Your total is:</h1>
            <?php
                foreach($priceArray as $singlePrice) {
                    $totalPrice = ($totalPrice + $singlePrice);
                }
                echo "$" . $totalPrice;
            ?>
    </body>
</html>
