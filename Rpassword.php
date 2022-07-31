<?php
    include("Connection.php");
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reset Password</title>
        <link rel="stylesheet" href="Signup.css">
    </head>
    <body>
        <section>
            <div class="ImageBox">
                <img src="Images/Left.jpg">
            </div>
            <div class="ContentBox">
                <div class="FormBox">
                    <h2>Reset Password</h2>
                    <p> <?php if(isset($_SESSION['passmsg']))
                                {
                                    echo $_SESSION['passmsg'];
                                }
                                else
                                {
                                    echo $_SESSION['passmsg'] = "";
                                }
                        ?>
                    </p>
                    <form name ="Form2" action ="RpasswordBack.php" method ="POST">
                        <div class="InputBox">
                            <span>New Password</span>
                            <input type="Password" name="NewPassword">
                        </div>
                        <div class="InputBox">
                            <span>Confirm Password</span>
                            <input type="Password" name="CPassword">
                        </div>
                        <div class="InputBox">
                            <input type="submit" value="Update Password" name="submit">
                        </div>
                        <div class="InputBox">
                            <p>Already an user? <a href="Index.php">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>