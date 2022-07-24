<?php

$conn = mysqli_connect("localhost", "root", "","ticketbooking");

if(isset($_POST['submit']))
{
    if(isset($_GET['PhoneNumber']))
    {
        $PNumber = $_GET['PhoneNumber'];

        $password = $_POST['NewPassword'];
        $cpassword = $_POST['CPassword'];

        if($password === $cpassword)
        {
            $updatequery = "UPDATE users SET Password='$password', CPassword='$cpassword' WHERE PNumber='$PNumber'";
            $iquery = mysqli_query($conn, $updatequery);

            if($iquery)
            {
                $_SESSION['msg'] = "Your password has been updated.";
                header('location:Login.php');
            }
            else
            {
                $_SESSION['passmsg'] = "Your password is not updated.";
                header('location:Rpassword.php');
            }
        }
        else
        {
            $_SESSION['passmsg'] = "Password is not matching.";
        }
    }
    else
    {
        echo "No Phone Number Found!!!";
    }
}


?>


$Pass = $_POST["Password"];
$CPass = $_POST["CPassword"];

$sql = "INSERT INTO users (FirstName, LastName, PhoneNumber, Email, Password, CPassword) VALUES ('$FName', '$LName','$PNumber','$Email', '$Pass', '$CPass')";

$rs = mysqli_query($conn, $sql);

if($rs)
{
 echo "Contact Records Inserted";
 header('location:Login.php');
}

