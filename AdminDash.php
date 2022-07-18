<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <title>Admin Dashboard</title>
        <script src="https://kit.fontawesome.com/2acdbe564a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="AdminDash.css">
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
                    Dashboard
                </h2>
                <div class="Admin">
                    <img src="Images\Admin2.jpg" width="40px" height="40px" alt="">
                    <h4>Admin</h4>
                </div>
            </header>
            <main>
                <div class="Cards">
                    <div class="CardSingle">
                        <div>
                            <h1>54</h1>
                            <span>Customers</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    <div class="CardSingle">
                        <div>
                            <h1>₹5K</h1>
                            <span>Total Earnings</span>
                        </div>
                        <div>
                            <span class="las la-clipboard-list"></span>
                        </div>
                    </div>
                </div>
                <div class="Customers">
                    <div class="Cards">
                        <div class="CardHeader">
                            <h3>New Customers</h3>

                            <button> See all <span class="las la-arrow-right">
                            </span></button>
                        </div>

                        <div class="CardBody">
                            <div class="Customer">
                                <div class="info">
                                    <img src="Images\Customer.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>User1</h4>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                                <div class="info">
                                    <img src="Images\Customer.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>User2</h4>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                                <div class="info">
                                    <img src="Images\Customer.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>User3</h4>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </main>
        </div>
    </body>
</html>


