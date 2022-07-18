<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
        <link rel="stylesheet" href="LoginAdmin.css">
    </head>
    <body>
        <section>
            <div class="ImageBox">
                <img src="Images/Left.jpg">
            </div>
            <div class="ContentBox">
                <div class="FormBox">
                    <h2>Admin Login</h2>
                    <form name ="Form1" action ="AdminBack.php" method ="POST">
                        <div class="InputBox">
                            <span>Username</span>
                            <input type="text" name="Username">
                        </div>
                        <div class="InputBox">
                            <span>Password</span>
                            <input type="Password" name="Password">
                        </div>
                        <div class="InputBox">
                            <input type="submit" value="Sign in" name="">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>