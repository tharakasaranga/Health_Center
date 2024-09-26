<?php

session_start();
 
include "includes/connection.php";

$regNo = $_SESSION["regNo"];
$department = $_SESSION["department"];

$sql = "SELECT regNumber, nameInitial FROM $department WHERE regNumber = '$regNo';";
$result = mysqli_query($conn, $sql);
$noRows = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

$_SESSION['regNo'] = $row['regNumber'];
$_SESSION['name'] = $row['nameInitial'];

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Services</title>
    </head>
    <body>
        <h1>Services Page</h1>
        <h2><?=$_SESSION['regNo']?></h2>
        <h2><?=$_SESSION['name']?></h2>
        <nav>
            <ul>
                <li><a href="services.php">Services</a></li>
                <li><a href="myDetails.php">My Details</a></li>
                <li>Cancel Bookings</li>
                <li>Viwe Bookings</li>
                <li><a href="remarks.php">Remarks</a></li>
                <li><a href="includes/logout.php">Logout</a></li>
            </ul>
        </nav>
    </body>
</html>