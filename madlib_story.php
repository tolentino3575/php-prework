<?php
    $person1 = $_GET["person1"];
    $person2 = $_GET["person2"];
    $animal = $_GET["animal"];
    $exclamation = $_GET["exclamation"];
    $verb = $_GET["verb"];
    $noun = $_GET["noun"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Mablib</title>
    </head>
    <body>
        <h1>OH YEAHHHHH</h1>
        <p>One day, <?php echo $person1; ?> and <?php echo $person2; ?> were walking through the woods, when suddenly a giant <?php echo $animal; ?> appeared.</p>
        <p>"<?php echo $exclamation; ?>", <?php echo $person1; ?> cried.</p>
        <p>The two of them <?php echo $verb; ?> as quickly possible, and when they were safe, <?php echo $person1; ?> and <?php echo $person2; ?> gave each other a giant <?php echo $noun; ?>.</p>
    </body>
</html>
