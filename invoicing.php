<?php

require_once('database/database.php');

//Get client data
$clientID = filter_input(INPUT_POST, 'clientID');
$invoiceNum = filter_input(INPUT_POST, 'invoiceNum');
if ($clientID == NULL || $clientID == FALSE) {
    echo 'Client ID must be Entered and Valid';
   }

$queryChk = "SELECT Client_ID, C_Name, C_Surname FROM client_data WHERE Client_ID = :clientID";
$statement2 = $db->prepare($queryChk);
$statement2->bindvalue(':clientID', $clientID);
$statement2->execute();
$client1 = $statement2->fetchAll();
$statement2->closeCursor();

//Get details of the selected client
$queryChck = "SELECT Invoice_Num, Invoice_Date, Consult_fee 
              FROM invoice 
              WHERE Invoice_Num = :invoiceNum";
$statement4 = $db->prepare($queryChck);
$statement4->bindvalue(':invoiceNum', $invoiceNum);
$statement4->execute();
$client4 = $statement4->fetchAll();
$statement4->closeCursor();

//Get details of the selected client
$queryCheck = "SELECT cd.Suppl_ID, cd.Suppl_Price, cd.Quantity, (cd.Suppl_Price * cd.Quantity) AS Cost
               FROM invoice ba JOIN invoice_items cd  
               USING (Invoice_Num) 
               WHERE Client_ID = :clientID && Invoice_Num = :invoiceNum";
$statement1 = $db->prepare($queryCheck);
$statement1->bindvalue(':clientID', $clientID);
$statement1->bindvalue(':invoiceNum', $invoiceNum);
$statement1->execute();
$client2 = $statement1->fetchAll();
$statement1->closeCursor();


//get total cost
$querySum = "SELECT Total
             FROM invoice
             WHERE Invoice_Num = :invoiceNum";
$statement3 = $db->prepare($querySum);
$statement3->bindvalue(':invoiceNum', $invoiceNum);
$statement3->execute();
$client3 = $statement3->fetchAll();
$statement3->closeCursor();
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
            <h1>Client Invoice Info</h1>
            <hr>
            <section>
                <table>
                <?php foreach ($client1 as $info) : ?>
                <p align="right"><b>Client Name: </b><?php echo $info['C_Name']; ?><?php echo $info['C_Surname']; ?></p>
                <?php endforeach; ?>
                
                <?php foreach ($client4 as $inv_info) : ?>
                <p align="right"><b>Invoice Num: </b><?php echo $inv_info['Invoice_Num']; ?></p>
                <p align="right"><b>Invoice Date: </b><?php echo $inv_info['Invoice_Date']; ?></p><br/>
                <p><b>Consultation fee: </b><?php echo $inv_info['Consult_fee']; ?></p>
                <?php endforeach; ?>
                
                </table>
                <table>
                    <tr>
                        <th>Suppliments</th>
                        <th>Suppliments Price</th>
                        <th>Quantity</th>
                        <th>Cost</th>                        
                    </tr>

                    <?php foreach ($client2 as $invoice_info) : ?>
                    <tr>                        
                        <td><?php echo $invoice_info['Suppl_ID']; ?></td>
                        <td><?php echo $invoice_info['Suppl_Price']; ?></td>
                        <td><?php echo $invoice_info['Quantity']; ?></td>
                        <td><?php echo $invoice_info['Cost']; ?></td>                        
                    </tr>
                    <?php endforeach; ?>

                </table>
                <?php foreach ($client3 as $cost) : ?>
                <p align="right"><b>Grand TOTAL: </b>R<?php echo $cost['Total']; ?></p>
                <?php endforeach; ?>
            </section
            <br>
            <br>
            <br>            
        </main>
            <p>
            <a href="insert_details_form.php">Register/Enter Details</a><a> | </a>
            <a href="update_details_form.php">Update Details</a><a> | </a>
            <a href="client_data.php">Main Admin</a><a> | </a>
            <a href="dashboard.php">Back to main page</a>
            </p>
        <footer>
            <?php include './footer.php'; ?>
        </footer>
    </div>
    </body>
</html>
