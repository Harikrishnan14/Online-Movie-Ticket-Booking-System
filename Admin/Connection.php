<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ticketbooking";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        echo "Connection Failed.";
    }
?>