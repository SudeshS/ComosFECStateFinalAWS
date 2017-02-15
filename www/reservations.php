<?php
   include "../inc/dbinfo.inc";
   
/* Connect to MySQL and select the database. */
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . 
mysqli_connect_error();
  $database = mysqli_select_db($connection, DB_DATABASE);


    $SelectedDate = $_POST['SelectedDate'];

 $sql =  'SELECT ResTimeSlot FROM Reservations_Info_DB WHERE Reservation_Date="$SelectedDate"';

 $result = $connection->query($sql);


 if ($result->num_rows >0) {
     
 }

?>