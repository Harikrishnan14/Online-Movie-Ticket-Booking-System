<?php

$conn = mysqli_connect("localhost", "root", "","ticketbooking");

$TName = $_POST["TheaterName"];
$TAddress = $_POST["TheaterAddress"];
$Place = $_POST["Place"];
$State = $_POST["State"];
$Pin = $_POST["Pincode"];
$UName = $_POST["Username"];
$Pass = $_POST["Password"];

$sql = "INSERT INTO theater (TheaterName, TheaterAddress, Place, State, Pincode, Username, Password) VALUES ('$TName', '$TAddress','$Place','$State','$Pin','$UName','$Pass')";

$rs = mysqli_query($conn, $sql);

if($rs)
{
 echo "Contact Records Inserted";
}

?>