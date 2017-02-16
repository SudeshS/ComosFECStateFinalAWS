<?php

$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];



$db = pg_connect("host=ec2-54-235-248-197.compute-1.amazonaws.com port=5432 dbname=d2ecrfaqgg9aod user=eyyhoduuszkxsy password=27a645e9026d524ae7732ad46f824db68f7a83237b43db80a67adeae71b90241");
$query = "INSERT INTO contactus VALUES ('$firstName', '$lastName', '$email', '$message')";
$result = pg_query($db, $query); 


header("Location: http://cosmosfec.ga/contactus.html“);

?>