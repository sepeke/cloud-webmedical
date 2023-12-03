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
            <h1>MIS Report input form for busiest time of the year</h1>
        </header>
        <main>
            <h1>Enter dates in format(yyyy-mm-dd)</h1>
            <form action="MIS_Report_1.php" method="POST">
               <label>Start Year Date:</label>
                <input type="text" name="mis1"><br>
                
                <label>End Year Date:</label>
                <input type="text" name="mis2"><br>
                
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
