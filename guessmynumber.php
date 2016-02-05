<?php
    $guess = $_GET["user_guess"];
    $favorite_number = rand(1, 20);
    $message = checkGuess($guess, $favorite_number);

    function checkGuess($guessed_number, $winning_number)
    {
        if ($guessed_number == $winning_number){
            return "CONGRATS!!!! YOU WIN NOTHING! YOU LOSE! GOOD DAY SIR!";
        } elseif ($guessed_number < $winning_number){
            return "Too low too slow";
        } else {
            return "Too high";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Guess My Number</title>
    </head>
    <body>
        <div class="container">
            <h1><?php echo $message; ?></h1>
            <h3><?php echo "You guessed: " . $guess; ?></h3>
            <h3><?php echo "The right answer was: " . $favorite_number; ?></p>
        </div>
    </body>
</html>
