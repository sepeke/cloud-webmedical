<?php

require_once('../database/database.php');

//Get client data
$DtoD1 = filter_input(INPUT_POST, 'DtoD1');
if ($DtoD1 == NULL || $DtoD1 == FALSE) {
    echo 'Date must be Entered and Valid';
   }
   
//Get details of the selected client
$queryCheck = "SELECT cd.C_Name, cd.C_Surname, cd.Client_ID, bi.Appoint_Date, bi.Appoint_Time
               FROM client_data cd JOIN bookings_info bi 
               USING (Client_ID)
               WHERE bi.Appoint_Date = :DtoD1
               ORDER BY bi.Appoint_Date";
$statement4 = $db->prepare($queryCheck);
$statement4->bindvalue(':DtoD1', $DtoD1);
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
            <h1>Report displays appointments for specific day</h1>
            <hr>
            <h1>Day to Day Report 1</h1>
            <hr>
            <p><?php if ($DtoD1 == NULL || $DtoD1 == FALSE) {
            echo 'Date must be Entered and Valid';
            } ?></p>
            <section>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Client ID</th>
                        <th>Appointment(s)Date</th>
                        <th>Time Slot</th>
                        
                    </tr>

                    <?php foreach ($client as $daytoday1) : ?>
                    <tr>
                        <td><?php echo $daytoday1['C_Name']; ?></td>
                        <td><?php echo $daytoday1['C_Surname']; ?></td>
                        <td><?php echo $daytoday1['Client_ID']; ?></td>
                        <td><?php echo $daytoday1['Appoint_Date']; ?></td>
                        <td><?php echo $daytoday1['Appoint_Time']; ?></td>
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
