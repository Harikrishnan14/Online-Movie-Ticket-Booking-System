<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Window</title>
        <link rel="stylesheet" href="Payment.css">
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
                            <span>Card Number</span>
                            <input type="text" name="CardNumber">
                        </div>
                        <div class="InputBox">
                            <span>CVV</span>
                            <input type="password" name="CVV">
                        </div>
                        <div class="InputBox">
                            <span>Expiry Month</span>
                            <input type="text" name="ExpiryMonth">
                        </div>
                        <div class="InputBox">
                            <span>Expiry Year</span>
                            <input type="text" name="ExpiryYear">
                        </div>
                        <div class="InputBox">
                            <input type="submit" value="Pay Now" name="">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>