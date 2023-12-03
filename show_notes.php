<?php

require_once('database/database.php');

//Get client data
$clientID = filter_input(INPUT_POST, 'clientID');

if ($clientID == NULL || $clientID == FALSE) {
    echo 'Patient ID must be Entered and Valid';
   }else {
       echo 'Check Client details if available';
   }
   
//Get details of the selected client
$queryCheck = "SELECT Client_ID, Appoint_Date, Notes
               FROM hcp_notes             
               WHERE Client_ID = :clientID";
$statement4 = $db->prepare($queryCheck);
$statement4->bindvalue(':clientID', $clientID);
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
                        <th>Client ID</th>
                        <th>Appointment Date</th>                        
                        <th>Notes</th>
                    </tr>

                    <?php foreach ($client as $bookingsinfo) : ?>
                    <tr>
                        <td><?php echo $bookingsinfo['Client_ID']; ?></td>
                        <td><?php echo $bookingsinfo['Appoint_Date']; ?></td>
                        <td><?php echo $bookingsinfo['Notes']; ?></td>
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
