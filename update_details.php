<?php

require('database/database.php');

$clientID = filter_input(INPUT_POST, 'clientID');
$clientName = filter_input(INPUT_POST, 'clientName');
$clientSurname = filter_input(INPUT_POST, 'clientSurname');
$clientAddress = filter_input(INPUT_POST, 'clientAddress');
$clientCode = filter_input(INPUT_POST, 'clientCode');
$clientTelH = filter_input(INPUT_POST, 'clientTelH');
$clientTelW = filter_input(INPUT_POST, 'clientTelW');
$clientCell = filter_input(INPUT_POST, 'clientCell');
$clientEmail = filter_input(INPUT_POST, 'clientEmail');
$clientReference = filter_input(INPUT_POST, 'clientReference');

//Update client details
$queryUpdate = "UPDATE client_data 
                SET Client_ID = :clientID, C_Name = :clientName, 
                C_Surname = :clientSurname, Address = :clientAddress, 
                Code = :clientCode, C_Tel_H = :clientTelH, 
                C_Tel_W = :clientTelW, C_Tel_Cell = :clientCell, 
                Email = :clientEmail, C_Reference = :clientReference
                WHERE Client_ID = :clientID";
$statement3 = $db->prepare($queryUpdate);
$statement3->bindvalue(':clientID', $clientID);
$statement3->bindvalue(':clientName', $clientName);
$statement3->bindvalue(':clientSurname', $clientSurname);
$statement3->bindvalue(':clientAddress', $clientAddress);
$statement3->bindvalue(':clientCode', $clientCode);
$statement3->bindvalue(':clientTelH', $clientTelH);
$statement3->bindvalue(':clientTelW', $clientTelW);
$statement3->bindvalue(':clientCell', $clientCell);
$statement3->bindvalue(':clientEmail', $clientEmail);
$statement3->bindvalue(':clientReference', $clientReference);
$statement3->execute();
$statement3->closeCursor();

include ('client_details.php');
?>

