<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
    header("location: ticketbook.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon 2023</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <header><img id ="headimg"src="theapex.png" alt="This was a logo" srcset=""></header><br>
    <nav>
        <a href="index.html">Home</a>&nbsp&nbsp&nbsp
        <a href="aboutus.html">About Us</a>&nbsp&nbsp&nbsp
        <a href="indexsuggestion.php">Suggestions</a>&nbsp&nbsp&nbsp
        <a href="logout.php">Log Out</a>
    </nav><br><br>
    <link rel="stylesheet" href="project.css">
<h2><?php echo "Dear ". $_SESSION['username']?>! You booked the tickets successfully</h3>
<hr>
<div id="hy">
    <table>
    <tr>
    <th >No. Of Tickets &nbsp</th>
    <th>Amount Paid &nbsp</th>
    <th>Ticket ID. &nbsp</th>
    <th>Selected Seats</th>
    </tr>
    <tr>
        <th>
            <script >
                var selectedSeat = JSON.parse(localStorage.getItem('selectedSeats'));
                document.write(selectedSeat.length);

            </script></th>
        <th>
        <script >
            var selectedSeat = JSON.parse(localStorage.getItem('selectedSeats'));
            document.write("₹",selectedSeat.length*200);

        </script>
        </th>
        <th>
            <script>
                document.write(Math.floor(100000 + Math.random() * 900000));
    
            </script>
        </th>
        <th>
            <script>
                var selectedSeat = JSON.parse(localStorage.getItem('selectedSeats'));
                document.write(selectedSeat);
            </script>
        </th>
    </tr>
    </table>
</div>


    <script src="hackathon.js"></script>
    <script src="script.js"></script>
    <script src="finalbook.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
