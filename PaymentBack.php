<?php      
    include("Connection.php");  

    $CNumber = $_POST["CardNumber"];  
    $CVV = $_POST["CVV"];
    $EMonth = $_POST["ExpiryMonth"];  
    $EYear = $_POST["ExpiryYear"]; 
      
        $CNumber = stripcslashes($CNumber);  
        $CVV = stripcslashes($CVV);
        $EMonth = stripcslashes($EMonth);  
        $EYear = stripcslashes($EYear);  
        $CNumber = mysqli_real_escape_string($conn, $CNumber);  
        $CVV = mysqli_real_escape_string($conn, $CVV);
        $EMonth = mysqli_real_escape_string($conn, $EMonth);  
        $EYear = mysqli_real_escape_string($conn, $EYear);
      
        $sql = "SELECT * FROM card_details WHERE CardNumber = '$CNumber' AND CVV = '$CVV' AND ExpiryMonth = '$EMonth' AND ExpiryYear = '$EYear'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
        {
            header("location:Home.php");
        }  
        else
        {  
            echo '<script>alert("Invalid Card Details.")</script>'; 
        }     
?>