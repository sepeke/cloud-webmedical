<?php

require_once('database/database.php');

//Get client data
$AppointDate = filter_input(INPUT_POST, 'AppointDate');
$AppointTime = filter_input(INPUT_POST, 'AppointTime');
$ClientID = filter_input(INPUT_POST, 'ClientID');

if ($AppointDate == NULL || $AppointDate == FALSE || $AppointTime == NULL || $AppointTime == FALSE || $ClientID == NULL || $ClientID == FALSE) {
    echo 'All values must be Entered and Valid';
    include 'bookings_form.php';
    exit();
}else {
    echo 'Check Client details if available';       
      
}

if ($AppointDate == Appoint_Date && $AppointTime == Appoint_Time) {
    echo 'Time slot booked, Please book another';
    include 'bookings_form.php';
    exit();
}
//Insert details of client booking
$queryAdd = "INSERT INTO bookings_info
                (Appoint_Date, Appoint_Time, Client_ID)
             VALUES
                (:AppointDate, :AppointTime, :ClientID)";
$statement5 = $db->prepare($queryAdd);
$statement5->bindvalue(':AppointDate', $AppointDate);
$statement5->bindvalue(':AppointTime', $AppointTime);
$statement5->bindvalue(':ClientID', $ClientID);
$statement5->execute();
$statement5->closeCursor();

include ('display_bookings.php');

?>


