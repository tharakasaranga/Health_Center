<?php

include "includes/connection.php";

session_start();
unset($_SESSION['regNo']);

function alert($message) 
{
    echo "<script>alert('$message');</script>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Remarks</title>
    </head>
    <body>
        <h1>Student Remarks</h1>
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
        </nav><br><br>

        <form action="studentRemarks.php" method="POST">
            <label for="department">Student Department : </label>
            <select name="department" id="department">
                <option value="csc">Computer Science</option>
            </select><br><br>
            <label for="search">Student Registration No : </label>
            <input required type="text" name="search" id="search" placeholder="eg:- 20XXCSCXXX"><br><br>
            <button type="submit" >Search</button>
        </form>
        <?php
        if(!isset($_GET['error'])){}
            else
            {
                $error = $_GET['error'];
                if($error == "error")
                {
                    alert("Invalid input");
                }
            }
        ?>
        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {

        $regNo = strtoupper($_POST['search']);
        $department = $_POST['department'];

        $find = "SELECT regNumber, department FROM $department WHERE regNumber = '$regNo';";
        $exitResult = mysqli_query($conn, $find);
        $no_Rows = mysqli_num_rows($exitResult);
        $rows = mysqli_fetch_assoc($exitResult);
        
        // Check for the given registration number is valid one and already signup one for the system

        if($no_Rows > 0 && ($rows['regNumber'] == $regNo && !empty($rows['department'])))
        {
            $findRegNo = "SELECT * FROM $regNo;";
            $result = mysqli_query($conn, $findRegNo);
            $noRows = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
    
            $_SESSION['regNo'] =  $regNo; 
            
            ?>
    
            <form action="includes/studentRemarkformhandler.php" method="POST">
                <label for="date">Date: </label>
                <input required type="date" id="date" name="date"><br><br>
                <label for="remark">Remarks: </label>
                <textarea required id="remark" name="remark"></textarea><br><br>
                <button type="submit" name="add">Add Remark</button> 
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
                { 
                ?>
                <tr>
                    <td><?php echo $row['dates']; ?></td>
                    <td><?php echo $row['remarks']; ?></td>
                    <td><a href="includes/studentRemarkformhandler.php?dates=<?= $row['dates']; ?>&remarks=<?= $row['remarks']?>"><button>Remove</button></a></td>
                </tr>
                <?php 
                }while($row = mysqli_fetch_assoc($result)) ?>
            </table>
            <?php 
            } 
            ?>
        <?php
        }
        else
        {
            header("Location: studentRemarks.php?error=error");
            exit();
        }
        }
        else
        {
            exit();
        }
        ?>


    </body>
</html>