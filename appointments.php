<?php

require_once('database/database.php');

//Get client data
$AppointDate = filter_input(INPUT_POST, 'AppointDate');
$AppointDate2 = filter_input(INPUT_POST, 'AppointDate2');
if ($AppointDate == NULL || $AppointDate == FALSE || $AppointDate2 == NULL || $AppointDate2 == FALSE) {
    echo 'Appointments selection dates must be Entered and Valid';
   }else {
       echo 'Check Client(s) details if available';
   }
   
//Get details of the selected client
$queryCheck = "SELECT bi.Appoint_Date, bi.Appoint_Time, bi.Client_ID, cd.C_Name, cd.C_Surname
               FROM client_data cd JOIN bookings_info bi 
               USING (Client_ID)
               WHERE Appoint_Date BETWEEN :AppointDate AND :AppointDate2 LIMIT 10";
$statement4 = $db->prepare($queryCheck);
$statement4->bindvalue(':AppointDate', $AppointDate);
$statement4->bindvalue(':AppointDate2', $AppointDate2);
$statement4->execute();
$client = $statement4->fetchAll();
$statement4->closeCursor();
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
        </header>
        <div id="wrapper">
        <main>
            <hr>
            <h1>Clients Bookings Info.</h1>
            <hr>
            <section>
                <table>
                    <tr>
                        <th>Appointment Date</th>
                        <th>Time slot</th>
                        <th>Client ID</th>
                        <th>Client Name</th>
                        <th>Client Surname</th>
                    </tr>

                    <?php foreach ($client as $bookingsinfo) : ?>
                    <tr>
                        <td><?php echo $bookingsinfo['Appoint_Date']; ?></td>
                        <td><?php echo $bookingsinfo['Appoint_Time']; ?></td>
                        <td><?php echo $bookingsinfo['Client_ID']; ?></td>
                        <td><?php echo $bookingsinfo['C_Name']; ?></td>
                        <td><?php echo $bookingsinfo['C_Surname']; ?></td>
                    </tr>
                    <?php endforeach; ?>

                </table>
            </section>
            <p><a href="index.php">Back to main page</a></p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </div>
    </body>
</html>
