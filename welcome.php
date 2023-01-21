<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
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
<h2><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>
<h3 id="city1">Your City</h3>
    <select id="city15">
        <option value="">---Select Your City---</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Faridkot">Faridkot</option>
        <option value="Delhi">Delhi</option>
    </select><br>
    <button id="submit123" onclick="readme1()">OK</button>
</div>
    <script src="hackathon.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
