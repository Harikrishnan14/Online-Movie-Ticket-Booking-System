<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <title>Add Movies</title>
        <script src="https://kit.fontawesome.com/2acdbe564a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="AddMovies.css">
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
                        <a href="TheaterDash.php" class="Active"><span class="fa-solid fa-house"></span>
                        <span>Home</span></a>
                    </li>
                    <li>
                        <a href="AddMovies.php" class="AddMovies"><span class="fa-solid fa-circle-plus"></span>
                        <span>Add movies</span></a>
                    </li>
                    <li>
                        <a href="AddShows.php" class="AddShows"><span class="fa-solid fa-calendar-plus"></span>
                        <span>Add Shows</span></a>
                    </li>
                    <li>
                        <a href="AddScreen.php" class="AddScreen"><span class="fa-solid fa-plus"></span>
                        <span>Add Screen</span></a>
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
                    Theater Dashboard
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
                                <span>Movie Name</span>
                                <input type="text" name="MovieName">
                            </div>
                            <div class="InputBox">
                                <span>Cast</span>
                                <input type="text" name="Cast">
                            </div>
                            <div class="InputBox">
                                <span>Description</span>
                                <input type="text" name="Description">
                            </div>
                            <div class="InputBox">
                                <span>Release Date</span>
                                <input type="date" name="ReleaseDate">
                            </div>
                            <div class="InputBox">
                                <span>Trailer Link</span>
                                <input type="text" name="TrailerLink">
                            </div>
                            <div class="InputBox">
                                <input type="submit" value="Submit" name="">
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>


