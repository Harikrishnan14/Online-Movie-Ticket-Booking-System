<?php
    include("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recover Account</title>
        <link rel="stylesheet" href="Signup.css">
    </head>
    <body>
        <section>
            <div class="ImageBox">
                <img src="Images/Left.jpg">
            </div>
            <div class="ContentBox">
                <div class="FormBox">
                    <h2>Recover</h2>
                    <form name ="Form2" action ="FpasswordBack.php" method ="POST">
                        <div class="InputBox">
                            <span>Email</span>
                            <input type="text" name="Email">
                        </div>
                        <div class="InputBox">
                            <input type="submit" value="Send Mail" name="submit">
                        </div>
                        <div class="InputBox">
                            <p>Already an user? <a href="Login.php">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>