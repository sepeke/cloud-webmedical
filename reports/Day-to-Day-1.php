<?php
require('../database/database.php')
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css" />
    </head>
    <body>
        <header>
            <img src="../images/logo3.gif" alt="Welcome..." height="100" width="200"><hr>
            <h1>Day to Day Report DATE input form, to view appointments for a day</h1>
        </header>
        <main>
            <h1>Enter date in format (yyyy-mm-dd)</h1>
            <form action="DtoDreport1.php" method="POST">
                <label>Date:</label>
                <input type="text" name="DtoD1"><br>
                
                <label>&nbsp;</label>
                <input type="submit" value="Display">
            </form>
            <p><a href="../index.php">Back to main page</a></p>
            <p><a href="../reports.php">Other Reports</a></p>
        </main>
        <footer>
            <?php include '../footer.php'; ?>
        </footer>
    </body>
</html>
