<?php

require_once('../database/database.php');

//Get client data
$DtoD1 = filter_input(INPUT_POST, 'DtoD1');
  
//Get details of the selected client
$queryCheck = "SELECT C_Name, C_Surname, SUBSTRING(Client_ID, 1, 6) AS Birthday, Client_ID, Email
               FROM client_data
               WHERE Client_ID LIKE CONCAT('__', :DtoD1, '%')";
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
            <h2>Report shows upcoming birthdays of patients by first 6 digits of ID</h2>
            <hr>
            <p><?php if ($DtoD1 == NULL || $DtoD1 == FALSE) {
            echo 'DATE must be Entered and Valid';
            } ?></p>
            <h1>Day to Day Report 2</h1>
            <hr>
            <section>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Birthday</th>
                        <th>Client ID</th>
                        <th>Email</th>
                    </tr>

                    <?php foreach ($client as $daytoday2) : ?>
                    <tr>
                        <td><?php echo $daytoday2['C_Name']; ?></td>
                        <td><?php echo $daytoday2['C_Surname']; ?></td>
                        <td><?php echo $daytoday2['Birthday']; ?></td>
                        <td><?php echo $daytoday2['Client_ID']; ?></td>
                        <td><?php echo $daytoday2['Email']; ?></td>
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
