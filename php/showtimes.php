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

        $servername = "localhost";
        $username = "root";
        $sql_password = "N1kh1l@mysql";
        $db = "MTB";
        // Create connection
        $conn = mysqli_connect($servername, $username, $sql_password, $db);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM theatre;";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($row=mysqli_fetch_assoc($result)) {
            array_push($array, $row);
        }
        // print_r($array);
        function get_shows_times($theatreID) {
            global $conn;
            $sql = "SELECT startTime FROM shows INNER JOIN theatre ON shows.theatreID=theatre.theatreID WHERE theatre.theatreID=$theatreID;";
            $result = mysqli_query($conn, $sql);
            $times_array = array();
            while ($row=mysqli_fetch_assoc($result)) {
                array_push($times_array, $row);
            }
            // print_r($times_array);
            return $times_array;
        }
        $times_array = get_shows_times($array[0]['theatreID']);
        // print_r($times_array[0]['startTime']);
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
        <h3>Rating<i>:93%<span class="likes">♥</span></i></h3>
    </div>
    <div class="rrr">
        <img src="../images/<?php echo get_movie_name()?>.jpg" alt="<?php echo get_movie_name()?>">
    </div>
    <br>
    <p><?php echo $array[0]['name']?></p>
    <a href="#"></a>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[0]['theatreID'])[0]['startTime']; ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <p><?php echo $array[1]['name']?></p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[0] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <p><?php echo $array[2]['name']?></p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[0] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <p><?php echo $array[3]['name']?></p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[0] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[1] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[2] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[3] ?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_show_times()[4] ?></a></button>
    <p><?php echo $array[4]['name']?></p>
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
