<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <title>User Dashboard</title>
        <script src="https://kit.fontawesome.com/2acdbe564a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="UserDash.css">
    </head>
    <body>
        <input type="checkbox" id="NavToggle">
        <div class="Sidebar">
            <div class="Logo">
                <h2><span class="fa-solid fa-camera-movie"></span><span>OMTB</span></h2>
            </div>
            <div class="SidebarMenu">
                <ul>
                    <li>
                        <a href="AdminDash.php" class="Active"><span class="fa-solid fa-house"></span>
                        <span>Home</span></a>
                    </li>
                    <li>
                        <a href="Bookings.php" class="Bookings"><span class="fa-solid fa-ticket"></span>
                        <span>See Bookings</span></a>
                    </li>
                    <li>
                        <a href="CUsername.php" class="CUsername"><span class="fa-solid fa-user-tag"></span>
                        <span>Change Username</span></a>
                    </li>
                    <li>
                        <a href="CPassword.php" class="CPassword"><span class="fa-solid fa-user-pen"></span>
                        <span>Change Password</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="MainContent">
            <header>
                <h2>
                    <label for="NavToggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <div class="Admin">
                    <img src="Images\Admin2.jpg" width="40px" height="40px" alt="">
                    <h4>User</h4>
                </div>
            </header>
            <main>
                <div class="Cards">
                    <div class="CardSingle">
                        <div>
                            <h1>Text1</h1>
                            <span>Text2</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    <div class="CardSingle">
                        <div>
                            <h1>Text3</h1>
                            <span>Text4</span>
                        </div>
                        <div>
                            <span class="las la-clipboard-list"></span>
                        </div>
                    </div>
                </div>
                
            </main>
        </div>
    </body>
</html>
