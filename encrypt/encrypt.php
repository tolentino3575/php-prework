<?php
    $message_to_encode = $_GET["message"];
    $new_string = encode($message_to_encode);

    function encode($input_phrase)
    {
        $reversed_phrase = strrev($input_phrase);
        $capitalized_phrase = strtoupper($reversed_phrase);
        return $capitalized_phrase;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Encrypt a Message</title>
    </head>
    <body>
        <div class="container">
            <h1>Message Encrypted</h1>
            <h2>Here you go: <?php echo $new_string; ?></h2>
        </div>
    </body>
</html>
