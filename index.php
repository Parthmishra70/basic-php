

<?php
          include '_conn.php' ; 

          session_start();

            if (isset($_SESSION["username"])) {
                $username = $_SESSION["username"];
                $password = $_SESSION["password"];
            
                // Check if the username already exists
                $sql = "SELECT * FROM user WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
            
            } 
                    
                    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <div class="siding">
        <nav>
            <ul>
                <li class="logo"><img src="image/logo.svg" alt=""></li>
                <li class="home"><img src="image/home.svg" alt=""> Home</li>
                <li><img src="image/search.svg" alt=""> Search</li>
            </ul>
            <div class="cont">
                <span class="main">Your Library</span>
                <div class="container">
                    <div class="card">
                        <span>Create your first playlist</span>
                        <p>Create your first playlist</p>
                        <button>Create playlist</button>

                    </div>
                    <div class="card">
                        <span>Create your first playlist</span>
                        <p>Create your first playlist</p>
                        <button>Create playlist</button>

                    </div>



                </div>


                <div class="grids_main">
                    <a>Legal</a>
                    <a>Safety & Privacy Center</a>
                    <a>Privacy Policy</a>
                    <a>About Ads</a>
                    <a>Accessiblilty</a>
                    <a>Cookies</a>
                </div>
            </div>

            <div class="main_language">
                <button class="language">English</button>

            </div>

        </nav>


        <!-- right side -->
        <div class="Rcontainer">


            <div class="bar">
                <div class="arrows"><img src="image/arrow1.svg" alt="">
                    <img src="image/arrow2.svg" alt="">
                </div>

                <?php
                
                if ($num == 1) {

echo " <div class='buttons'>
                    <button> <a>$username</a></button>
                </div>";

                } else {
                    echo " <div class='buttons'>
                    <button> <a href='signup.php'>Sign up</a></button>
                    <button><a href='login.php'> Login</a></button>
                </div>";

                }
                
                ?>
               
            </div>



            <div class="right">
                <div class="option">
                    <li class="liartist">Popular Artists</li>
                    <li><a href="">show more</a></li>
                </div>


                <div class="artist">

                    <div class="artistcard">
                        <img src="profile-pic (2).png" alt="">
                        <div class="nameartist">
                            <span>Parth</span>
                            <p>Web Dev</p>
                        </div>
                    </div>

                    <div class="artistcard">
                        <img src="profile-pic (2).png" alt="">
                        <div class="nameartist">
                            <span>Parth</span>
                            <p>Web Dev</p>
                        </div>
                    </div>

                    <div class="artistcard">
                        <img src="profile-pic (2).png" alt="">
                        <div class="nameartist">
                            <span>Parth</span>
                            <p>Web Dev</p>
                        </div>
                    </div>

                    <div class="artistcard">
                        <img src="profile-pic (2).png" alt="">
                        <div class="nameartist">
                            <span>Parth</span>
                            <p>Web Dev</p>
                        </div>
                    </div>

                    <div class="artistcard">
                        <img src="profile-pic (2).png" alt="">
                        <div class="nameartist">
                            <span>Parth</span>
                            <p>Web Dev</p>
                        </div>
                    </div>

                 



                </div>
                <!-- 2 section -->
                <div class="albums">
                    <div class="option">
                        <li class="liartist">Popular Albums</li>
                        <li><a href="">show all</a></li>
                    </div>


                    <div class="artist">

                        <div class="artistcard">
                            <img src="profile-pic (2).png" class="albums" alt="">
                            <div class="nameartist">
                                <span>Parth</span>
                                <p>Web Dev</p>
                            </div>
                        </div>




                    </div>
                </div>

                
            </div>

        </div>

     

</body>

</html>


