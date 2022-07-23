<?php
    include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatiable" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="Home.css">
        <link rel="stylesheet" href="lightslider.css">
        <script src="js\JQuery3.3.1.js"></script>
        <script src="js\lightslider.js"></script>
        <script src="https://kit.fontawesome.com/2acdbe564a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <a href="" class="logo">
                <img src="Images\Logo2.jpg">
            </a>
            <input type="checkbox" class="MenuButton" id="MenuButton">
            <label class="MenuIcon" for="MenuButton">
                <span class="NavIcon"></span>
            </label>
            <ul class="menu">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
            <div class="search">
                <input type="text" placeholder="Search for movies">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </nav>
        <section id="main">
            <h1 class="showcaseHeading">Recommended For You</h1>

            <ul id="autoWidth" class="cs-hidden">
                <li class="item-a">
                    <div class="showcaseBox">
                        <img src="Images\Thor.jpg">
                    </div>
                </li>
                <li class="item-b">
                    <div class="showcaseBox">
                        <img src="Images\DoctorStrange.jpg">
                    </div>
                </li>
                <li class="item-c">
                    <div class="showcaseBox">
                        <img src="Images\StarWars.jpg">
                    </div>
                </li>
                <li class="item-d">
                    <div class="showcaseBox">
                        <img src="Images\Endgame.jpg">
                    </div>
                </li>
            </ul>
            
        </section>
        <section id="latest">
            <h2 class="LatestHeading">Latest Movies</h2>
            <ul id="autoWidth2" class="cs-hidden">
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\Vikram.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\Kaduva.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="LatestBox">
                        <div class="LatestBImg">
                            <img src="Images\StarWars.jpg">
                        </div>
                        <div class="LatestBText">
                            <strong>//MovieName//</strong>
                            <p>//Movie Type//</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <div class="MoviesHeading">
            <h2>Movies</h2>
        </div>
        <section id="MoviesList">
            <div class="MoviesBox">
                <div class="MoviesImg">
                    <div class="quality">3D</div>
                    <img src="Images\Endgame.jpg">
                </div>
                <a href="">Avengers: Endgame ( 2019 )</a>
            </div>
            <div class="MoviesBox">
                <div class="MoviesImg">
                    <div class="quality">3D</div>
                    <img src="Images\Endgame.jpg">
                </div>
                <a href="">Avengers: Endgame ( 2019 )</a>
            </div>
            <div class="MoviesBox">
                <div class="MoviesImg">
                    <div class="quality">3D</div>
                    <img src="Images\Endgame.jpg">
                </div>
                <a href="">Avengers: Endgame ( 2019 )</a>
            </div>
            <div class="MoviesBox">
                <div class="MoviesImg">
                    <div class="quality">3D</div>
                    <img src="Images\Endgame.jpg">
                </div>
                <a href="">Avengers: Endgame ( 2019 )</a>
            </div>
            <div class="MoviesBox">
                <div class="MoviesImg">
                    <div class="quality">3D</div>
                    <img src="Images\Endgame.jpg">
                </div>
                <a href="">Avengers: Endgame ( 2019 )</a>
            </div>
            <div class="MoviesBox">
                <div class="MoviesImg">
                    <div class="quality">3D</div>
                    <img src="Images\Endgame.jpg">
                </div>
                <a href="">Avengers: Endgame ( 2019 )</a>
            </div>
            <div class="MoviesBox">
                <div class="MoviesImg">
                    <div class="quality">3D</div>
                    <img src="Images\Endgame.jpg">
                </div>
                <a href="">Avengers: Endgame ( 2019 )</a>
            </div>
            <div class="MoviesBox">
                <div class="MoviesImg">
                    <div class="quality">3D</div>
                    <img src="Images\Endgame.jpg">
                </div>
                <a href="">Avengers: Endgame ( 2019 )</a>
            </div>
        </section>
        <div class="buttons">
            <a href="">Previous</a>
            <a href="">Next</a>
        </div>
        <footer>
            <p>//Message1//</p>
            <p>//Message2//</p>
        </footer>
        
        <script>
                  $(document).ready(function() {
                $('#autoWidth,#autoWidth2').lightSlider({
                autoWidth:true,
                loop:true,
                onSliderLoad: function() {
                    $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
                    } 
                });  
                });
        </script>
    </body>
</html>