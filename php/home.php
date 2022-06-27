<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title> 
    <link rel="icon" type="jpg/png" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/979154e3ae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
    <!-- <?php
       // $movies = array("Doctor Strange", "Fantastic Beast", "Spiderman", "RRR");
    ?> -->
    <div class="navbar">
        <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>
    </div>
    <div class="show-title">
        <h1>Faneeha Shows</h1>        
    </div>
    <div class="images" id="images">
        <i class="fa-solid fa-circle-chevron-left"></i>
        <div class="image">
            <img src="../images/Doctor_Strange.jpg" alt="image">
            <div class="about-image">
                <h4>Doctor Strange</h4>
                <i class="fa fa-heart"><span class="likes">85%</span></i>
            </div>
            <form action="test.php" method="post">
                <button class="button" name="button1" value="Doctor Strange">Book Tickets</button>
            </form>
        </div>
        <div class="image">
            <img src="../images/Fantastic_Beasts.jpg" alt="image">
            <div class="about-image">
                <h4>Fantastic Beast</h4>
                <i class="fa fa-heart"><span class="likes">80%</span></i>
            </div>
            <form action="test.php" method="post">
                <button class="button" name="button2" value="Fantastic Beasts">Book Tickets</button>
            </form>
        </div>
        <div class="image">
            <img src="../images/Spiderman.jpg" alt="image">
            <div class="about-image">
                <h4>Spiderman</h4>
                <i class="fa fa-heart"><span class="likes">95%</span></i>
            </div>
            <form action="test.php" method="post">
                <button class="button" name="button3" value="Spiderman">Book Tickets</button>
            </form>
           
        </div>
        <div class="image">
            <img src="../images/RRR.jpg" alt="image">
            <div class="about-image">
                <h4>RRR</h4>
                <i class="fa fa-heart"><span class="likes">90%</span></i>
            </div>
            <form action="test.php" method="post">
                <button class="button" name="button4" value="RRR">Book Tickets</button>
            </form>
            
        </div>
        <i class="fa-solid fa-circle-chevron-right"></i>  
    </div>
    <script>
        // var buttons = document.getElementsByClassName("button");
        // buttons[0].addEventListener('click', redirect0);
        // buttons[1].addEventListener('click', redirect1);
        // buttons[2].addEventListener('click', redirect2);
        // buttons[3].addEventListener('click', redirect3);

        // for (var i = 0; i < buttons.length; i++) {
        //     buttons[i].addEventListener('click', redirect0);
        // }

        function redirect0() {
            // <?php 
            //     $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
            //     $movie_name = $movies[0];
            //     fwrite($myfile, $movie_name);
            //     fclose($myfile);    
            // ?>
            document.location.href = "../php/showtimes.php";
        }

        // function redirect1() {
        //     <?php 
        //         $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        //         // $movie_name = $movies[1];
        //         $movie_name = "HELLO";
        //         fwrite($myfile, $movie_name);
        //         fclose($myfile);    
        //     ?>
        //     document.location.href = "../php/showtimes.php";
        // }

        // function redirect2() {
        //     <?php 
        //         $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        //         $movie_name = $movies[2];
        //         echo $movie_name;
        //         fwrite($myfile, $movie_name);
        //         fclose($myfile);    
        //     ?>
        // }

        // function redirect3() {
        //     <?php 
        //         $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        //         $movie_name = $movies[3];
        //         fwrite($myfile, $movie_name);
        //         fclose($myfile);    
        //     ?>
        //     document.location.href = "../php/showtimes.php";
        // }
    </script>
</body>
</html>