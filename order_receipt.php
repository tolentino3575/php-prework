<?php
    $name = $_GET["name"];
    $address =  $_GET["address"];
    $product = $_GET["product"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Receipt</title>
    </head>
    <body>
        <h1>Here is your receipt</h1>

        <p>Dear <?php echo $name; ?>,</p>

        <p>Thank you for ordering from us!</p>
        <p>Your <?php echo $product; ?> will be shipping in 90 days, and will never arrive!</p>
        <p>We will be shipping the <?php echo $product; ?> to the following address:</p>
        <p><?php echo $address; ?></p>
        <p>Have a terrible day! We hate you!</p>
    </body>
</html>
