<?php
    $upper = $_GET["upper"];
    $count = $_GET["count"];
    $shuffle = $_GET["shuffle"];
    $position = $_GET["position"];
    $toupper = strtoupper($upper);
    $tocount = str_word_count($count);
    $toshuffle = str_shuffle($shuffle);
    $position = stripos("$position", "this");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Practice</title>
    </head>
    <body>
        <h1>Here they are!</h1>
        <p>Whatever you typed, here it is uppercased:</p>
        <p><?php echo $toupper; ?></p>
        <p>The number of words in your sentence is:</p>
        <p><?php echo $tocount; ?></p>
        <p>Here's whatever you typed, shuffled:</p>
        <p><?php echo $toshuffle; ?></p>
        <p>The position of the word "this" starts at index:</p>
        <p><?php echo $position; ?></p>
    </body>
</html>
