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
            <h1>Day to Day Report to show birthday date on ID input form</h1>
        </header>
        <main>
            <h1>Enter Birth Date MONTH and DAY in format(mmdd)</h1>
            <form action="DtoDreport2.php" method="POST">
                <label>1st Date:</label>
                <input type="text" name="DtoD1"><br>
                         
                <label>&nbsp;</label>
                <input type="submit" value="Display">
            </form>            
            <p><a href="../reports.php">Other Reports</a></p>
            <p><a href="../index.php">Back to main page</a></p>
        </main>
        <footer>
            <?php include '../footer.php'; ?>
        </footer>
    </body>
</html>
