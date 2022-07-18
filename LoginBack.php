<?php      
    include("Connection.php");  

    $PNumber = $_POST["PhoneNumber"];  
    $Pass = $_POST["Password"];  
      
        $PNumber = stripcslashes($PNumber);  
        $Pass = stripcslashes($Pass);  
        $PNumber = mysqli_real_escape_string($conn, $PNumber);  
        $Pass = mysqli_real_escape_string($conn, $Pass);  
      
        $sql = "SELECT * FROM users WHERE PhoneNumber = '$PNumber' AND Password = '$Pass'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
        {  
            echo "<h1><center> Login successful </center></h1>";  
            header("location:Home.php");
        }  
        else
        {  
            echo '<script>alert("Invalid Username or Password.")</script>'; 
        }     
?>