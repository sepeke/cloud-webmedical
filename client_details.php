<?php

require_once('database/database.php');

//Get client data
$clientID = filter_input(INPUT_POST, 'clientID');
   
//Get details of the selected client
$queryCheck = 'SELECT * FROM client_data WHERE Client_ID = :clientID';
$statement1 = $db->prepare($queryCheck);
$statement1->bindvalue(':clientID', $clientID);
$statement1->execute();
$client = $statement1->fetchAll();
$statement1->closeCursor();
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
            <h1>Client Details</h1>
            <p>
                <?php if ($clientID == NULL || $clientID == FALSE) {
                      echo 'Client ID must be Entered and Valid!';
                      }else {
                      echo 'Check Client details if available...';
                } ?>
            </p>
            <hr>
            <section>
                <table>
                    <tr>
                        <th>clientID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Address</th>
                        <th>Code</th>
                        <th>Tel Home</th>
                        <th>Tel Work</th>
                        <th>Tel Cell</th>
                        <th>Email</th>
                        <th>Reference</th>
                    </tr>

                    <?php foreach ($client as $clientdata) : ?>
                    <tr>
                        <td><?php echo $clientdata['Client_ID']; ?></td>
                        <td><?php echo $clientdata['C_Name']; ?></td>
                        <td><?php echo $clientdata['C_Surname']; ?></td>
                        <td><?php echo $clientdata['Address']; ?></td>
                        <td><?php echo $clientdata['Code']; ?></td>
                        <td><?php echo $clientdata['C_Tel_H']; ?></td>
                        <td><?php echo $clientdata['C_Tel_W']; ?></td>
                        <td><?php echo $clientdata['C_Tel_Cell']; ?></td>
                        <td><?php echo $clientdata['Email']; ?></td>
                        <td><?php echo $clientdata['C_Reference']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </section>
            <br/>
            <p><a href="client_data.php">Other</a></p> 
            <p><a href="index.php">Logout</a></p>
        </main>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </div>
    </body>
</html>
