<?php
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"];
    $solution = $first_number + $second_number;
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Results</title>
    </head>
    <body>
        <h1>WOO MATH YA MATH OK</h1>
        <p>The sum of <?php echo $first_number; ?> and <?php echo $second_number; ?> is:</p>
        <p><?php echo $solution; ?></p>
    </body>
</html>
