<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="Login.css">
    </head>
    <body>
        <section>
            <div class="ImageBox">
                <img src="Images/Left.jpg">
            </div>
            <div class="ContentBox">
                <div class="FormBox">
                    <h2>Login</h2>
                    <form name ="Form1" action ="LoginBack.php" method ="POST">
                        <div class="InputBox">
                            <span>Phone Number</span>
                            <input type="text" name="PhoneNumber" value="<?php if(isset($_COOKIE['PNumbercookie'])) { echo $_COOKIE['PNumbercookie']; } ?>">
                        </div>
                        <div class="InputBox">
                            <span>Password</span>
                            <input type="Password" name="Password" value="<?php if(isset($_COOKIE['Passcookie'])) { echo $_COOKIE['Passcookie']; } ?>">
                        </div>
                        <div class="Remember">
                            <label><input type="checkbox" name="RememberMe"> Remember me</label>
                        </div>
                        <div class="InputBox">
                            <input type="submit" value="Sign in" name="">
                        </div>
                        <div class="InputBox">
                            <p>Forgotten Password? <a href="Fpassword.php">Click Here</a></p>
                        </div>
                        <div class="InputBox">
                            <p>Don't have an account? <a href="Signup.php">Sign Up</a></p>
                        </div>
                    </form>
                    <h3>Login with social media</h3>
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