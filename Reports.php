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
            <nav>
                <a href="insert_details_form.php">Register/Enter Client Details</a><a>  |  </a>
                <a href="update_details_form.php">Update Client Details</a><a>  |  </a>
                <a href="add_notes.php">Add Patient Notes</a><a>  |  </a>
                <a href="retrieve_notes.php">View Patient Notes</a>
            </nav>
            
        </header>
        <main>
            <h1>Select Report to Display</h1>
            <br>
            <h2>Day-to-Day Reports</h2>
            <p><a href="reports/Day-to-Day-1.php">DAY TO DAY Report 1</a> - View appointments</p>
            <p><a href="reports/Day-to-Day-2.php">DAY TO DAY Report 2</a> - Birthdays date on ID</p>
            <br>
            <h2>MIS Reports</h2>
            <p><a href="reports/MIS1_input.php">MIS Report 1</a> – MIS report for busiest time of the year</p>
            <p><a href="reports/MIS_Report_2.php">MIS Report 2</a> –Client awareness </p>
            <p><a href="reports/MIS3_input.php">MIS Report 3</a> – Client weekly stats</p>
           
            <hr>
            <br>            
            <p><a href="INDEX.php">LOGOUT</a></p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </body>
</html>
