<?php
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if (!$con){
        die ("not done" . mysqli_connect_error());
    
    }
    error_reporting(E_ERROR | E_PARSE);
    //echo ("Success"); 
    $name=$_POST["name"];
    $email=$_POST["email"];
    $number=$_POST["number"];
    $suggestion=$_POST["suggestion"];
    
    $sql="INSERT INTO `theapex` .`theapex` (`name`, `email`, `number`, `suggestion`) VALUES ('$name', '$email', '$number', '$suggestion');";

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
        <a href="#">About Us</a>&nbsp&nbsp&nbsp
        <a href="indexsuggestion.php">Suggestions</a>&nbsp&nbsp&nbsp
        <a href="#">Login</a>
    </nav><br><br>
    <main>
        <br>
        <form action="indexsuggestion.php" method="post">
            <h1>Suggestion Box</h1>
            <p>Name <input type="text" name="name" id="name"></p>
            <p>Email Address <input type="email" name="email" id="email"></p>
            <p>Contact Number <input type="number" name="number" id="number"></p>
            <textarea name="suggestion" id="suggestion" cols="70" rows="10">Enter Your Suggestion Here</textarea><br><br>
            <button id="sugg">Submit</button>
        </form>
    </main>

</body>
</html>