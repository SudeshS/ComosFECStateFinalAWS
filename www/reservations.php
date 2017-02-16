<?php
  $db = pg_connect("host=ec2-54-235-248-197.compute-1.amazonaws.com port=5432 dbname=d2ecrfaqgg9aod user=eyyhoduuszkxsy password=27a645e9026d524ae7732ad46f824db68f7a83237b43db80a67adeae71b90241");


    $SelectedDate = $_POST['SelectedDate'];

 $query=  "SELECT reservedtimeslot FROM reservations WHERE date ="$SelectedDate"";

 $result = pg_query($db, $query); 


 if ($result->num_rows >0) {
  $timeslots= array();
   while ($r=pg_fetch_assoc($result)) {
     $timeslots[] = $r ;
   } 
   echo json_encode($timeslots);
 }

 else {
    echo null;
 }

?>