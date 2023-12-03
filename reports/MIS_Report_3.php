<?php

require_once('../database/database.php');

//Get client data
$mis1 = filter_input(INPUT_POST, 'mis1');
$mis2 = filter_input(INPUT_POST, 'mis2');
if (($mis2 == NULL || $mis2 == FALSE) AND ($mis2 == NULL || $mis2 == FALSE)) {
    echo 'Appointment date must be Entered and Valid';
   }
   
//Get details of the selected client
$queryCheck = "SELECT COUNT(Appoint_Date)/(DATEDIFF(:mis2, :mis1)/7) AS AVERAGE_NUM_of_Clients, 
               COUNT(Appoint_Date) AS Number_of_Appointments, 
               (DATEDIFF(:mis2, :mis1)/7) AS Number_of_Weeks
               FROM bookings_info
               WHERE Appoint_Date BETWEEN :mis1 AND :mis2";
$statement4 = $db->prepare($queryCheck);
$statement4->bindvalue(':mis1', $mis1);
$statement4->bindvalue(':mis2', $mis2);
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
            <h1>MIS Report showing Average Number of Clients that come to the Clinic weekly within selected period</h1>
            <hr>
            <section>
                <table>
                    <tr>
                        <th>AVG Number of Clients</th>
                        <th>Number of appointments</th>
                        <th>Number_of_Weeks</th>
                    </tr>

                    <?php foreach ($client as $misreport1) : ?>
                    <tr>
                        <td><?php echo $misreport1['AVERAGE_NUM_of_Clients']; ?></td>
                        <td><?php echo $misreport1['Number_of_Appointments']; ?></td>
                        <td><?php echo $misreport1['Number_of_Weeks']; ?></td>
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
