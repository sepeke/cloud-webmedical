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
            <h1>Enter Details of Client</h1>
            <form action="insert_details.php" method="POST">
                <label>Client ID:</label>
                <input type="text" name="clientID"><br>
                
                <label>Client Name:</label>
                <input type="text" name="clientName"><br>
                
                <label>Client Surname:</label>
                <input type="text" name="clientSurname"><br>
                
                <label>Client Address:</label>
                <input type="text" name="clientAddress"><br>
                
                <label>Client Code:</label>
                <input type="text" name="clientCode"><br>
                
                <label>Client Tel. Home:</label>
                <input type="text" name="clientTelH"><br>
                
                <label>Client Tel. Work:</label>
                <input type="text" name="clientTelW"><br>
                
                <label>Client Tel. Cell:</label>
                <input type="text" name="clientCell"><br>
                
                <label>Client Email:</label>
                <input type="text" name="clientEmail"><br>
                
                <label>Client Reference:</label>
                <input type="text" name="clientReference"><br>
                
                <label>&nbsp;</label>
                <input type="submit" value="Submit">
            </form>
            <p><a href="client_data.php">Main Admin</a></p>
            <p><a href="index.php">Back to main page</a></p>
        </main>
    </body>
</html>
