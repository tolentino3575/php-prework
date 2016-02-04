<?php
    $name = $_GET["name"];
    $date = $_GET["date"];
    $start = $_GET["start"];
    $end = $_GET["end"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Appointment Date</title>
    </head>
    <body>
        <h1>Your Appointment Time and Date</h1>
        <p>Dear <?php echo $name; ?>,</p>
        <p>Thank you for scheduling an appointment with us!</p>
        <p>Your appointment is scheduled for <?php echo $date; ?>. You are scheduled to start at <?php echo $start; ?>, and will finish your appointment at <?php echo $end; ?>. Please arrive 75 minutes early to fill out the longest most boring form of your life.</p>
    </body>
</html>
