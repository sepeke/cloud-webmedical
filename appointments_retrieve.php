<?php
require('database/database.php')
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css" />
    </head>
    <body>
        <header>
            <img src="images/logo3.gif" alt="Welcome..." height="100" width="200"><hr>
            <h1>lookup - CLIENTS - Bookings Info</h1>
        </header>
        <main>
            <h1>Enter date in format(yyyy-mm-dd)</h1>
            <form action="appointments.php" method="POST">
                
                <label>Appointment(s) beggining on:</label>
                <input type="text" name="AppointDate"><br>
                
                <label>Appointment(s) ending on:</label>
                <input type="text" name="AppointDate2"><br>
                
                <label>&nbsp;</label>
                <input type="submit" value="Search Details">
            </form>
            <p><a href="client_data.php">Main Admin</a></p>
            <p><a href="index.php">Back to main page</a></p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </body>
</html>
