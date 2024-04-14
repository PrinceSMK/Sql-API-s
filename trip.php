<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip</title>
</head>
<body>
    <h1>This is a Trip Form</h1>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="First Name"><br>
        <input type="text" name="phone" id="name" placeholder="Phone"><br>
        <input type="text" name="email" id="name" placeholder="Email"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <a href="getrip.php">Dashboard</a>
</body>
</html>


<?php
include('conn.php');

if (isset($_POST['submit'])) {
   
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `trip`(`name`, `phone`, `email`, `date`) VALUES ('$name','$phone','$email',current_timestamp());";
    
    $res = mysqli_query($conn,$sql);

    if (!$res) {
        echo "Error in sending data";
    } else {
        header("location: gettrip.php");

    }
    







}



?>

