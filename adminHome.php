<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>
        <h1>Admin Home Page</h1>
        <h2><?=$_SESSION['adminUsername']?></h2>
        <nav>
            <ul>
                <li><a href="adminHome.php">Admin Home</a></li>
                <li><a href="viewStudent.php">View Student</a></li>
                <li>View Appointments</li>
                <li>Schedule Dates</li>
                <li><a href="studentRemarks.php">Student Remarks</a></li>
                <li><a href="includes/logout.php">Logout</a></li>
            </ul>
        </nav>
    </body>
</html>