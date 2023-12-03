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
            <h1>Compose Email</h1>
        </header>
        <main>
            <h1>Fill Details of CLIENTS from Invoice</h1>
            <form action="email_output.php" method="POST">
                
                <label>Client Full Name:</label>
                <input type="text" name="FullName"><br>
                
                <label>Client Email:</label>
                <input type="text" name="Email"><br>
                
                <label>Please type your Message here:</label>
                <textarea name="comment" rows="15" cols="100"></textarea><br>
                
                
                <label>&nbsp;</label>
                <input type="submit" value="Send">
            </form>
            <p><a href="client_data.php">Main Admin</a></p>
            <p><a href="index.php">Back to main page</a></p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </body>
</html>
