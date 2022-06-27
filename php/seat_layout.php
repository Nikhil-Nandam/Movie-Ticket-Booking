<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Ticket Booking</title>
        <link rel="stylesheet" href="../css/seat_layout.css">
        <link rel="icon" type="jpg/png" href="../images/favicon.png">
    </head>
    <body>
        <?php
            function get_booked_seats_list() {
                $booked_seats = array("A1", "A2", "A3");
                return $booked_seats;
            }

            function get_occupied($seat_number) {
                $booked_seats = get_booked_seats_list();
                if (in_array($seat_number, $booked_seats)) {
                    return "seat occupied";
                } else {
                    return "seat";
                }
            }
        ?>
        <!-- <?php echo get_occupied(true)?> -->
        <ul class="showcase">
            <li>
                <div id="avail" class="seat"></div>
                <small>Available</small>
            </li>
            <li>
                <div class="seat selected"></div>
                <small>Selected</small>
            </li>
            <li>
                <div class="seat occupied"></div>
                <small>Occupied</small>
            </li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="row_">A</div>
                <!-- <div class="seat">1</div> -->
                <div class="<?php echo get_occupied("A1")?>">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat occupied">6</div>
                <div class="seat occupied">7</div>
                <div class="seat occupied">8</div>
                <div class="seat">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat occupied">12</div>
            </div>
            <div class="row">
                <div class="row_">B</div>
                <div class="seat">1</div>
                <div class="seat occupied">2</div>
                <div class="seat occupied">3</div>
                <div class="seat occupied">4</div>
                <div class="seat occupied">5</div>
                <div class="seat occupied">6</div>
                <div class="seat occupied">7</div>
                <div class="seat occupied">8</div>
                <div class="seat occupied">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
            </div>
            <div class="row">
                <div class="row_">C</div>
                <div class="seat occupied">1</div>
                <div class="seat occupied">2</div>
                <div class="seat occupied">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat">6</div>
                <div class="seat">7</div>
                <div class="seat occupied">8</div>
                <div class="seat occupied">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
            </div>
            <div class="row">
                <div class="row_">D</div>
                <div class="seat">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat">6</div>
                <div class="seat">7</div>
                <div class="seat">8</div>
                <div class="seat">9</div>
                <div class="seat occupied">10</div>
                <div class="seat occupied">11</div>
                <div class="seat occupied">12</div>
            </div>
            <div class="row">
                <div class="row_">E</div>
                <div class="seat">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat occupied">4</div>
                <div class="seat occupied">5</div>
                <div class="seat occupied">6</div>
                <div class="seat occupied">7</div>
                <div class="seat occupied">8</div>
                <div class="seat occupied">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
            </div>
            <div class="row row-6">
                <div class="row_">F</div>
                <div class="seat">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat">6</div>
                <div class="seat">7</div>
                <div class="seat">8</div>
                <div class="seat">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
            </div>
            <div class="row">
                <div class="row_">G</div>
                <div class="seat">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat">6</div>
                <div class="seat">7</div>
                <div class="seat">8</div>
                <div class="seat">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
            </div>
            <div class="row">
                <div class="row_">H</div>
                <div class="seat">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat">6</div>
                <div class="seat">7</div>
                <div class="seat">8</div>
                <div class="seat">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
            </div>
            <div class="row">
                <div  class="row_">I</div>
                <div class="seat">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat">6</div>
                <div class="seat">7</div>
                <div class="seat">8</div>
                <div class="seat">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
            </div>
            <div class="row">
                <div class="row_">J</div>
                <div class="seat">1</div>
                <div class="seat">2</div>
                <div class="seat">3</div>
                <div class="seat">4</div>
                <div class="seat">5</div>
                <div class="seat">6</div>
                <div class="seat">7</div>
                <div class="seat">8</div>
                <div class="seat">9</div>
                <div class="seat">10</div>
                <div class="seat">11</div>
                <div class="seat">12</div>
            </div>
            <div class="screen"></div>
        </div>
        <p class="text">
            You have selected <span id="count">0</span> seats for a price of &#8377; <span id="total">0</span>
        </p>
        <script src="../js/seat_layout.js"></script>
    </body>
</html>
