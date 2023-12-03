<?php

require_once('../database/database.php');

 
//Get details of the selected client(s)
$queryCheck = "SELECT COUNT(C_Reference) AS Number_of_References, C_Reference
               FROM client_data
               GROUP BY C_Reference";
$statement4 = $db->prepare($queryCheck);
$statement4->execute();
$client = $statement4->fetchAll();
$statement4->closeCursor();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>altHealth Webmedical</title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css" />
    </head>
    <body>
        <header>
            <img src="../images/logo3.gif" alt="Welcome..." height="100" width="200"><hr>
        </header>
        <div id="wrapper">
        <main>
            <h1>This MIS Report show how most people get to find out about the clinic and its services</h1>
            <hr>            
            <section>
                <table>
                    <tr>
                        <th>Number of People</th>
                        <th>References</th>
                    </tr>

                    <?php foreach ($client as $misreport1) : ?>
                    <tr>
                        <td><?php echo $misreport1['Number_of_References']; ?></td>
                        <td><?php echo $misreport1['C_Reference']; ?></td>                        
                    </tr>
                    <?php endforeach; ?>

                </table>
            </section>            
            <p><a href="../reports.php">Other Reports</a></p>
            <p><a href="../index.php">Back to main page</a></p>
        </main>
        <footer>
            <?php include '../footer.php'; ?>
        </footer>
    </div>
    </body>
</html>
