<?php
    include("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="Signup.css">
    </head>
    <body>
        <section>
            <div class="ImageBox">
                <img src="Images/Left.jpg">
            </div>
            <div class="ContentBox">
                <div class="FormBox">
                    <h2>Signup</h2>
                    <form name ="Form2" action ="SignupBack.php" method ="POST">
                        <div class="InputBox">
                            <span>First Name</span>
                            <input type="text" name="FirstName">
                        </div>
                        <div class="InputBox">
                            <span>Last Name</span>
                            <input type="text" name="LastName">
                        </div>
                        <div class="InputBox">
                            <span>Phone Number</span>
                            <input type="text" name="PhoneNumber">
                        </div>
                        <div class="InputBox">
                            <span>Email</span>
                            <input type="text" name="Email">
                        </div>
                        <div class="InputBox">
                            <span>Password</span>
                            <input type="Password" name="Password">
                        </div>
                        <div class="InputBox">
                            <input type="submit" value="Sign Up" name="">
                        </div>
                        <div class="InputBox">
                            <p>Already an user? <a href="Login.php">Login</a></p>
                        </div>
                    </form>
                    <h3>Or continue with social media</h3>
                    <ul class="Social">
                        <li><img src="Images\Icons\google.png"></li>
                        <li><img src="Images\Icons\facebook.png"></li>
                        <li><img src="Images\Icons\instagram.png"></li>
                        <li><img src="Images\Icons\twitter.png"></li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>