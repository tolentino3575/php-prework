<?php
    $band = array("Rock Face" => 10, "Smooth Jazz Metal" => 12, "album3" => 14, "album4" => 16);
    $shows = array("show1"=>"Feb 1", "show2"=>"Feb 2", "show3"=>"Feb 3", "show4"=>"Feb 4", "show5"=>"Feb 5", "show6"=>"Feb 6");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Album Prices</title>
    </head>
    <body>
        <h1>Band is selling their music! Find out how much below!</h1>
        <ul>
            <?php
                foreach($band as $name => $price){
                    echo "<li>" . "$name: $$price" . "</li>";
                }
            ?>
        </ul>
        <h1>Band is going on tour! Find out when below!</h1>
        <ul>
            <?php
                foreach($shows as $showTime => $date){
                    echo "<li>" . "$showTime: $date";
                }
            ?>
        </ul>
    </body>
</html>
