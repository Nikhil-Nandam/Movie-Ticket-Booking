<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="../css/showtimes.css">
    <link rel="icon" type="jpg/png" href="../images/favicon.png">
</head>
<body>
    <?php
        function get_movie_name() {
            $file = fopen("newfile.txt", "r");
            $movie = fgets($file);
            return $movie;
        }

        function get_show_times() {
            $show_times = array("7:45AM", "10:30AM", "1:30PM", "4:45PM", "9:45PM");
            return $show_times;
        }
    ?>
    <div class="navbar">
        <div class="container">
            <ul>
                <li style="color:white"><a href="#">07 JUN</a></li>
                <li><a href="#">08 JUN</a></li>
                <li><a href="#">09 JUN</a></li>
                <li><a href="#">10 JUN</a></li>
                <li><a href="#">11 JUN</a></li>
                <li><a href="#">12 JUN</a></li>
            </ul>
        </div>
    </div>
    <div class="RRRheader">
        <h1>
            <?php echo get_movie_name()?>
        </h1>
        <nobr>
        <h3>Rating <i> :93%<span class="likes">♥</span></i></h3>
    </div>
    <div class="rrr">
        <img src="../images/<?php echo get_movie_name()?>.jpg" alt="<?php echo get_movie_name()?>">
    </div>
    <br>
    <p>AMB Cinemas</p>
    <a href="#"></a>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[0] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <p>Forum Mall</p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[0] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <p>VishwnathTheatre</p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[0] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <p>Arjun Theatre</p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[0] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <p>Malikarjuna Bramharambha</p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[0] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <br>
    <br>
    <button class="btn">Book Tickets</button>
</body>
</html>
