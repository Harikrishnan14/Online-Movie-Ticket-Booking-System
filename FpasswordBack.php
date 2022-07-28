<?php

$conn = mysqli_connect("localhost", "root", "","ticketbooking");

if(isset($_POST['submit']))
{
    $Email = $_POST['Email'];
    
    $sql = "SELECT * FROM users WHERE Email='$Email'";
    $toemail= "$Email";
    $query = mysqli_query($conn,$sql);

    $emailcount = mysqli_num_rows($query);

    if($emailcount)
    {
        $userdata = mysqli_fetch_array($query);

        $firstname = $userdata['FirstName'];

        $subject = "Password Reset";
        $body = "Hi, $firstname. Click hare to reset your password http://localhost/Project/Rpassword.php";

        $sender_email = "From: emailtester165@gmail.com";
        
        if(mail($toemail, $subject, $body, $sender_email))
        {
            $_SESSION['msg'] = "Check your mail to reset your password $Email";
            header('location:Login.php');
        }
        else
        {
            echo "Email sending failed...";
          
        }
    }
}

?>