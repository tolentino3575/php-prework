<?php
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $cost = ($weight/$distance) + 5;
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Cost</title>
    </head>
    <body>
        <p>You entered a weight of <?php echo $weight; ?> pounds, to travel a distance of <?php echo $distance; ?> miles.</p>
        <p>The cost to ship your package is:</p>
        <p>$<?php echo $cost; ?>.</p>
        <p>No thanks.</p>
    </body>
</html>
