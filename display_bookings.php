<?php

require_once('database/database.php');

//Get details of the selected client
$querySelect = "SELECT * FROM bookings_info WHERE Appoint_Date = :AppointDate";
$statement4 = $db->prepare($querySelect);
$statement4->bindvalue(':AppointDate', $AppointDate);
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
            <h1>Details of Appointment Booking</h1>
            <hr>
            <section>
                <table>
                    <tr>
                        <th>Appointment Date</th>
                        <th>Time slot</th>
                        <th>Client ID</th>
                    </tr>

                    <?php foreach ($client as $booking) : ?>
                    <tr>
                        <td><?php echo $booking['Appoint_Date']; ?></td>
                        <td><?php echo $booking['Appoint_Time']; ?></td>
                        <td><?php echo $booking['Client_ID']; ?></td>
                    </tr>
                    <?php endforeach; ?>

                </table>
            </section>
            <p><a href="client_data.php">Other</a></p><br/> 
            <p><a href="index.php">Logout</a></p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </div>
    </body>
</html>

