<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <title>Add Theater</title>
        <script src="https://kit.fontawesome.com/2acdbe564a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="AddTheater.css">
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
                        <a href="AddTheater.php" class="AddTheater"><span class="fa-solid fa-circle-plus"></span>
                        <span>Add Theater</span></a>
                    </li>
                    <li>
                        <a href="RemoveTheater.php" class="RemoveTheater"><span class="fa-solid fa-trash"></span>
                        <span>Remove Theater</span></a>
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
                    Add Theater
                </h2>
                <div class="Admin">
                    <img src="Images\Admin2.jpg" width="40px" height="40px" alt="">
                    <h4>Admin</h4>
                </div>
            </header>
            <main>
                <div class="ContentBox">
                    <div class="FormBox">
                        <form name ="Form1" action ="" method ="POST">
                            <div class="InputBox">
                                <span>Theater Name</span>
                                <input type="text" name="ThaterName">
                            </div>
                            <div class="InputBox">
                                <span>Theater Address</span>
                                <input type="text" name="Address">
                            </div>
                            <div class="InputBox">
                                <span>Place</span>
                                <input type="text" name="Place">
                            </div>
                            <div class="InputBox">
                                <span>State</span>
                                <input type="text" name="State">
                            </div>
                            <div class="InputBox">
                                <span>Pincode</span>
                                <input type="text" name="Pincode">
                            </div>
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
            </main>
        </div>
    </body>
</html>


