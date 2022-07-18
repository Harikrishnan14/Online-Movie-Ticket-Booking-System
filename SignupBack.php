<?php

$conn = mysqli_connect("localhost", "root", "","ticketbooking");

$FName = $_POST["FirstName"];
$LName = $_POST["LastName"];
$PNumber = $_POST["PhoneNumber"];
$Email = $_POST["Email"];
$Pass = $_POST["Password"];

$sql = "INSERT INTO users (FirstName, LastName, PhoneNumber, Email, Password) VALUES ('$FName', '$LName','$PNumber','$Email', '$Pass')";

$rs = mysqli_query($conn, $sql);

if($rs)
{
 echo "Contact Records Inserted";
}

?>