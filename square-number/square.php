<?php
    $number = $_GET["number"];
    $squared = sqauredNumber($number);

    function sqauredNumber($number)
    {
        $final = $number * $number;
        return $final;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
        <h1>Your number squared is:</h1>
        <p><?php echo $squared; ?><p>
    </body>
</html>
