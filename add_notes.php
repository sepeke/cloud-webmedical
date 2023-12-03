<?php
require('database/database.php');

$clientID = filter_input(INPUT_POST, 'clientID');
$appointDate = filter_input(INPUT_POST, 'appointDate');
$comment = filter_input(INPUT_POST, 'comment');


//Add client details
$queryAdd = "INSERT INTO client_data
                (Client_ID, Appoint_Date, Notes)
             VALUES(:clientID, :appointDate, :comment)";
$statement2 = $db->prepare($queryAdd);
$statement2->bindvalue(':clientID', $clientID);
$statement2->bindvalue(':appointDate', $appointDate);
$statement2->bindvalue(':comment', $comment);
$statement2->execute();
$statement2->closeCursor();
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
            <form action="#" method="POST">
                <label>Client ID:</label>
                <input type="text" name="clientID"><br>
                
                <label>Date (yyyy-mm-dd):</label>
                <input type="text" name=""><br>
                
                <label>Notes:</label>
                <textarea name="comment" rows="10" cols="100"></textarea><br>
                              
                <label>&nbsp;</label>
                <input type="submit" value="Submit">
            </form>
            <p><a href="client_data.php">Main Admin</a></p>
            <p><a href="index.php">Back to main page</a></p>
        </main>
    </body>
</html>
