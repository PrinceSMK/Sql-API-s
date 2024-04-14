
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
    <?php

include('conn.php');

$ids=$_GET['id'];

$showquery = " select * from trip where id={$ids}";
$updatequery = mysqli_query($conn,$showquery);

$arrdata = mysqli_fetch_array($updatequery);


if (isset($_POST['submit'])) {
   
    $idupdate = $_GET['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // $sql = "INSERT INTO `trip`(`name`, `phone`, `email`, `date`) VALUES ('$name','$phone','$email',current_timestamp());";
    $updatingData = "UPDATE `trip` SET `id`='$idupdate',`name`='$name',`phone`='$phone',`email`='$email',`date`=current_timestamp() WHERE id=$idupdate ";
    $res = mysqli_query($conn,$updatingData);

    if (!$res) {
        echo "Error in sending data";
    } else {
        header("location: gettrip.php");

    }

}




?>
        <input type="text" name="name" id="name" placeholder="First Name" value="<?php echo $arrdata['name']?>"><br>
        <input type="text" name="phone" id="name" placeholder="Phone" value="<?php echo $arrdata['phone']; ?>"><br>
        <input type="text" name="email" id="name" placeholder="Email" value="<?php echo $arrdata['email']; ?>"><br><br>
        <input type="submit" value="Update" name="submit">
    </form>

    <a href="getrip.php">Dashboard</a>
</body>
</html>