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
            <h1>lookup - CLIENT'S - invoice(s)</h1>
        </header>
        <main>
            <h1>Please enter client ID</h1>
            <form action="invoicing.php" method="POST">
                
                <label>Client ID:</label>
                <input type="text" name="clientID"><br>
                
                <label>Invoice Number:</label>
                <input type="text" name="invoiceNum"><br>
                                            
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
