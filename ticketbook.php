<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if (!$con){
    die ("not done" . mysqli_connect_error());

}

//echo ("Success"); 
$amount=$_POST["selectedSeatsCount"];
$count=$_POST["selectedSeatsCount*ticketPrice"];

$sql="INSERT INTO `login` .`movieticket` (`amount`, `number`) VALUES ('$amount', '$count')";

if($con->query($sql)==true){
    $insert==true;
}
else{
    echo ("Error $sql <br> $con->error");
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Movie Seat Booking</title>
  </head>
  <body>
    <div class="movie-container">
      <label>Pick a movie:</label>
      <select id="movie">
        <option value="300">Avengers: Endgame (Rs.300)</option>
        <option value="250">Iron Man (Rs.250)</option>
        <option value="180">The Avengers (Rs.180)</option>
        <option value="240">Avengers : Infinity War (Rs.240)</option>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
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
      <div class="screen"></div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      
    </div>
    

    <p class="text">
      You have selected <span id="count">0</span> seats for a price of Rs.<span id="total">0</span>
    </p>
    <script src="script.js"></script>
    <div class ="bookbutton" id="bookbutton" onclick="bookus()">
        Book Now
    </div>
  </body>
</html>