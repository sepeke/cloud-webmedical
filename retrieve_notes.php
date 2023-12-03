<?php

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
        </header>
        <main>
            <br>                       
            <hr>
            <h3>Appointment Notes</h3>
            <h1>Enter Client ID to get notes.</h1>
            <form action="show_notes.php" method="POST">
                <label>Client ID:</label>
                <input type="text" name="clientID"><br>
                
                <label>&nbsp;</label>
                <input type="submit" value="Search Details">
                
            </form>            
            <p class="alignment">
                <img align="middle" src="images/stetho.jpg" alt="centered image" height="500" width="250">
            </p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </body>
</html>
