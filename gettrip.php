<?php
include('conn.php');

$query = " select * from trip ";
$result = mysqli_query($conn, $query);

// $showdata = mysqli_fetch_array($result);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>

<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Date & Time</th>
    <th>Updating</th>
    <th>Deleting</th>
    </tr>
    <?php
        while ($showdata = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $showdata['id']; ?></td>
        <td><?php echo $showdata['name']; ?></td>
        <td><?php echo $showdata['phone']; ?></td>
        <td><?php echo $showdata['email']; ?></td>
        <td><?php echo $showdata['date']; ?></td>
        <td><a href="update.php?id=<?php echo $showdata['id']; ?>"><Button>Update</Button></a></td>
        <td><a href="delete.php?id=<?php echo $showdata['id']; ?>"><Button>Delete</Button></a></td>
    </tr>
    <?php
        }
    ?>
    
</table>
    
</body>
</html>