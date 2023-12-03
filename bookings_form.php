<?php
require('database/database.php')
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>altHealth Webmedical</title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css" />
    </head>
    <body>
        <header>
            <img src="images/logo3.gif" alt="Welcome..." height="100" width="200"><hr>
            <h1>Client Information</h1>
        </header>
        <hr>
        <main>
            <h1>Enter Booking Details</h1>
            <form action="bookings.php" method="POST">
                
                <P>Date format(yyyy-mm-dd)</P>
                <label>Appointment Date:</label>
                <input type="date" name="AppointDate"><br>
                
                <P>Time format(hh:mm - hh:mm)</P>
                <label>Appointment Time:</label>
                <input type="text" name="AppointTime"><br>
                
                <label>Client ID:</label>
                <input type="text" name="ClientID"><br>
                                
                <label>&nbsp;</label>
                <input type="submit" value="Submit">
            </form>
            <p><a href="client_data.php">Main Admin</a></p>
            <p><a href="index.php">Back to main page</a></p>
        </main>
    </body>
</html>
