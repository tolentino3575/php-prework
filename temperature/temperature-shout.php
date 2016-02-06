<?php
    $temp = $_GET["temp"];
    $user = whatsTheTemp($temp);

    function whatsTheTemp($userTemp)
    {
        if ($userTemp <= 50) {
            return "Fuck it's cold out don't go outside.";
        } elseif ($userTemp > 50 && $userTemp <= 70) {
            return "A little chilly. Consider a turtleneck sweater.";
        } elseif ($userTemp > 70 && $userTemp <= 85) {
            return "Perfect weather man. Wear whatever. You'll be good. Don't worry. I got you.";
        } elseif ($userTemp > 85 && $userTemp <= 120) {
            return "It's hot as shit dude. You might get really sweaty. Swamp-ass is inevitable.";
        } else {
            return "You're dead.";
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
        <h1><?php echo $user; ?></h1>
    </body>
</html>
