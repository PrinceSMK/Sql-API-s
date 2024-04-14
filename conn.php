<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "tripping";

    $conn = mysqli_connect($server,$username,$password,$db);

    if (!$conn) {
        die("Error :".mysqli_connect_error());
    } else {
        ?>
        <script>
            alert("Connected successfully")
        </script>
        <?php
    };

















?>