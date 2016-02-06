<?php
    $month = $_GET["month"];
    $fortune = fortuneTeller($month);

    function fortuneTeller($fortuneMonth) {
        if ($fortuneMonth == 1) {
            return "You have to fart";
        } elseif ($fortuneMonth == 2) {
            return "You are hungry";
        } elseif ($fortuneMonth == 3) {
            return "You like pizza";
        } elseif ($fortuneMonth == 4) {
            return "You have body odor";
        } elseif ($fortuneMonth == 5) {
            return "Nice shirt";
        } elseif ($fortuneMonth == 6) {
            return "I love you";
        } elseif ($fortuneMonth == 7) {
            return "Nice weather";
        } elseif ($fortuneMonth == 8) {
            return "Hi";
        } elseif ($fortuneMonth == 9) {
            return "Can you get me some fries";
        } elseif ($fortuneMonth == 10) {
            return "Liar";
        } elseif ($fortuneMonth == 11) {
            return "Nice";
        } else {
            return "Merry Chirstmas Fat Jesus!";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Your fortune</title>
    </head>
    <body>
        <h1><?php echo $fortune; ?></h1>
    </body>
</html>
