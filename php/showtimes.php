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
        // Connect to MySQL Database
        $servername = "localhost";
        $username = "root";
        $sql_password = "N1kh1l@mysql";
        $db = "MTB";
        $conn = mysqli_connect($servername, $username, $sql_password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get movieID residing in newfile.txt
        function get_movie_id() {
            $file = fopen("newfile.txt", "r");
            $movieID = fgets($file);
            return $movieID;
        }

        $movieID = get_movie_id();

        function get_movie_name($movieID) {
            global $conn;
            $sql = "SELECT title FROM movie WHERE movieID=$movieID";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            return $row['title'];
        }

        // Get theatre_names
        $sql = "SELECT * FROM theatre;";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($array, $row);
        }

        // A function to get list of show times based on theatreID
        function get_shows_times($theatreID) {
            global $conn;
            $sql = "SELECT TIME_FORMAT(startTime, \"%h:%i %p\") AS startTime FROM shows INNER JOIN theatre ON shows.theatreID=theatre.theatreID WHERE theatre.theatreID=$theatreID;";
            $result = mysqli_query($conn, $sql);
            $times_array = array();
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($times_array, $row);
            }
            return $times_array;
        }
        $times_array = get_shows_times($array[0]['theatreID']);

        // Get movie rating
        $movie = get_movie_name($movieID);
        $sql = "SELECT rating FROM movie WHERE movieID=$movieID;";
        $result = mysqli_query($conn, $sql);
        $rating = mysqli_fetch_assoc($result)['rating'];
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
            <?php echo get_movie_name($movieID)?>
        </h1>
        <nobr>
        <h3>Rating: <i><?php echo $rating;?>%<span class="likes">♥</span></i></h3>
    </div>
    <div class="rrr">
        <img src="../images/<?php echo get_movie_name($movieID)?>.jpg" alt="<?php echo $movie;?>">
    </div>
    <br>
    <p><?php echo $array[0]['name']?></p>
    <!-- <a href="#"></a> -->
    <form action="times_and_theatre.php" method="post"></form>
        <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[0]['theatreID'])[0]['startTime'];?></a></button>
        <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[0]['theatreID'])[1]['startTime'];?></a></button>
        <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[0]['theatreID'])[2]['startTime']?></a></button>
        <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[0]['theatreID'])[3]['startTime']?></a></button>
        <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[0]['theatreID'])[4]['startTime']?></a></button>
    </form>

    <p><?php echo $array[1]['name']?></p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[1]['theatreID'])[0]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[1]['theatreID'])[1]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[1]['theatreID'])[2]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[1]['theatreID'])[3]['startTime'];?></a></button>

    <p><?php echo $array[2]['name']?></p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[2]['theatreID'])[0]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[2]['theatreID'])[1]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[2]['theatreID'])[2]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[2]['theatreID'])[3]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[2]['theatreID'])[4]['startTime'];?></a></button>

    <p><?php echo $array[3]['name']?></p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[3]['theatreID'])[0]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[3]['theatreID'])[1]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[3]['theatreID'])[2]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[3]['theatreID'])[3]['startTime'];?></a></button>
    
    <p><?php echo $array[4]['name']?></p>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[4]['theatreID'])[0]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[4]['theatreID'])[1]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[4]['theatreID'])[2]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[4]['theatreID'])[3]['startTime'];?></a></button>
    <button class="btn" type="button" name="button"><a href="seat_layout.php"><?php echo get_shows_times($array[4]['theatreID'])[4]['startTime'];?></a></button>
    <br>
    <br>
    <button class="btn">Book Tickets</button>
</body>
</html>
