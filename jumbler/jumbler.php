<?php
    $first = $_GET["first"];
    $second = $_GET["second"];
    $third = $_GET["third"];
    $jumbledString = jumble($first, $second, $third);

    function jumble($dog, $cat, $bird)
    {
        $reverse = strrev($dog);
        $capital = strtoupper($cat);
        $reverseTwo = strrev($bird);
        $capitalTwo = strtoupper($reverseTwo);
        $newString = $reverse . $capital . $capitalTwo;
        return $newString;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Jumbler</title>
    </head>
    <body>
        <div class="container">
            <h1>Try to read this</h1>
            <p><?php echo $jumbledString; ?></p>
        </div>
    </body>
</html>
