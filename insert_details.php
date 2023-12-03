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

//Add client details
$queryAdd = "INSERT INTO client_data
                (Client_ID, C_Name, C_Surname, Address, Code, C_Tel_H, C_Tel_W,
                C_Tel_Cell, Email, C_Reference)
             VALUES(:clientID, :clientName, :clientSurname, :clientAddress, 
             :clientCode, :clientTelH, :clientTelW, :clientCell, :clientEmail, 
             :clientReference)";
$statement2 = $db->prepare($queryAdd);
$statement2->bindvalue(':clientID', $clientID);
$statement2->bindvalue(':clientName', $clientName);
$statement2->bindvalue(':clientSurname', $clientSurname);
$statement2->bindvalue(':clientAddress', $clientAddress);
$statement2->bindvalue(':clientCode', $clientCode);
$statement2->bindvalue(':clientTelH', $clientTelH);
$statement2->bindvalue(':clientTelW', $clientTelW);
$statement2->bindvalue(':clientCell', $clientCell);
$statement2->bindvalue(':clientEmail', $clientEmail);
$statement2->bindvalue(':clientReference', $clientReference);
$statement2->execute();
$statement2->closeCursor();

include ('client_details.php');

?>

