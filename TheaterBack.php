<?php      
    include("Connection.php");  

    $UName = $_POST["Username"];  
    $Pass = $_POST["Password"];  
      
        $UName = stripcslashes($UName);  
        $Pass = stripcslashes($Pass);  
        $UName = mysqli_real_escape_string($conn, $UName);  
        $Pass = mysqli_real_escape_string($conn, $Pass);  
      
        $sql = "SELECT * FROM users WHERE Username = '$UName' AND Password = '$Pass'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
        {  
            echo "<h1><center> Login successful </center></h1>";  
            header("location:TheaterDash.php");
        }  
        else
        {
            echo '<script>alert("Invalid Username or Password.")</script>';    
        }     
?>