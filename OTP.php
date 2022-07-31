<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Window</title>
        <link rel="stylesheet" href="OTP.css">
    </head>
    <body>
        <section>
            <div class="ImageBox">
                <img src="Images/Left.jpg">
            </div>
            <div class="ContentBox">
                <div class="FormBox">
                    <h2>Payment</h2>
                    <form name ="Form1" action ="PaymentBack.php" method ="POST">
                        <div class="InputBox">
                            <span>Enter OTP</span>
                            <input type="text" name="OTP">
                        </div>
                        <div class="InputBox">
                            <input type="submit" value="Confirm" name="">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>