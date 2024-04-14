<?php
include('conn.php');

$id= $_GET['id'];
$delquery = " delete from trip where id=$id ";

$delresult = mysqli_query($conn, $delquery);


header("location: gettrip.php");


?>