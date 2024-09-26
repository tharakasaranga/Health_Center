<?php

include "includes/connection.php";

session_start();

$regNo = $_SESSION["regNo"];

$remarkInfo = "SELECT * FROM $regNo;";
$result = mysqli_query($conn, $remarkInfo);
$noRows = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Remarks</title>
    </head>
    <body>
        <h1>Remarks</h1>
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
        <form action="includes/remarkformhandler.php" method="POST">
            <label for="date">Date: </label>
            <input required type="date" id="date" name="date"><br><br>
            <label for="remark">Remarks: </label>
            <textarea required id="remark" name="remark"></textarea><br><br>
            <button type="submit">Add Remark</button> 
        </form><br>

        <?php

        if($noRows < 1)
        {
            echo "No previous remarks founds";
        }
        else
        { ?>

        <table>
            <tr>
                <th>Date</th>
                <th>Remark</th>
            </tr>
            <?php 
            do
            { ?>
            <tr>
                <td><?php echo $row['dates']; ?></td>
                <td><?php echo $row['remarks']; ?></td>
            </tr>
            <?php 
            }while($row = mysqli_fetch_assoc($result)) ?>
        </table>


        <?php } ?>
        
        
    </body>
</html>