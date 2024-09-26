<?php

include "includes/connection.php";

session_start();

$regNo = $_SESSION["regNo"];
$department = $_SESSION["department"];

$findRegNo = "SELECT * FROM $department WHERE regNumber = '$regNo';";
$result = mysqli_query($conn, $findRegNo);
$noRows = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if($noRows < 1)
{
    header("Location: services.php");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>My Details</title>
    </head>
    <body>
        <h1>My Details Page</h1>
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

        <form action="includes/studentDetailsUpdate.php" method="POST">
            <input required type="hidden" name="regNo" id="regNo" value="<?= $regNo ?>">
            <label for="email">Department</label><br>
            <select name="department" id="department" value="<?= $row['department'] ?>">
                <option value="csc">Computer Science</option>
            </select><br><br>
            <label for="batch">Batch</label><br>
            <select name="batch" id="batch" value="<?= $row['batch'] ?>">
                <option value="2018/2019">2018/2019</option>
                <option value="2019/2020">2019/2020</option>
                <option value="2020/2021">2020/2021</option>
                <option value="2021/2022">2021/2022</option>
            </select><br><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" value="<?= $row['email'] ?>"><br><br>
            <label for="pwd">Password</label><br>
            <input type="password" name="pwd" id="pwd" value="<?= $row['pwd'] ?>"><br><br>
            <label for="nic">Nation Identity Card</label><br>
            <input required type="text" name="nic" id="nic" value="<?= $row['nic'] ?>"><br><br>
            <label for="faculty">Faculty</label><br>
            <input required type="text" name="faculty" id="faculty" value="<?= $row['faculty'] ?>"><br><br>
            <label for="fullName">Full Name</label>
            <input required type="text" name="fullName" id="fullName" value="<?= $row['fullName'] ?>"><br><br>
            <label for="nameInitial">Name with initials</label><br>
            <input required type="text" name="nameInitial" id="nameInitial" value="<?= $row['nameInitial'] ?>"><br><br>
            <label for="rAddress">Residential Address</label><br>
            <input required type="text" name="rAddress" id="rAddress" value="<?= $row['residentAddress'] ?>"><br><br>
            <label for="pAddress">Permanent Address</label><br>
            <input required type="text" name="pAddress" id="pAddress" value="<?= $row['permanentAddress'] ?>"><br><br>
            <label for="dob">DOB</label><br>
            <input required type="date" name="dob" id="dob" value="<?= $row['dob'] ?>"><br><br>
            <label for="sex">Sex</label><br>
            <select name="sex" id="sex" value="<?= $row['sex'] ?>">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>
            <label for="maritalStatus">Marital Status</label><br>
            <select name="maritalStatus" id="maritalStatus" value="<?= $row['maritialStatus'] ?>">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select><br><br>
            <label for="mobile">Mobile Number</label><br>
            <input required type="number" name="mobile" id="mobile" value="<?= $row['mobileNumber'] ?>"><br><br>
            <label for="school">Last School Attended</label><br>
            <input required type="text" name="school" id="school" value="<?= $row['school'] ?>"><br><br>
            <label for="blood">Blood Group</label><br>
            <select name="blood" id="blood" value="<?= $row['blood'] ?>">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select><br><br>
            <label for="height">Height</label><br>
            <input required type="number" name="height" id="height" value="<?= $row['height'] ?>">cm<br><br>
            <label for="weight">Weight</label><br>
            <input required type="number" name="weight" id="weight" value="<?= $row['weight'] ?>">kg<br><br>
            <div>
                <h5>Parent/Guardian Information</h5>
                <label for="parent">Parent/Guardian Name</label><br>
                <input required type="text" name="parent" id="parent" value="<?= $row['parentName'] ?>"><br><br>
                <label for="pMobile">Mobile Number</label><br>
                <input required type="number" name="pMobile" id="pMobile" value="<?= $row['parentMobile'] ?>"><br><br>
            </div>  
            <br>
            <input type="hidden" name="enrolDate" value="<?= $row['enrollDate'] ?>">
            <button>Update</button>
            </form>
    </body>
</html>