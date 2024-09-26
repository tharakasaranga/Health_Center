<?php

session_start(); 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enrollment</title>
    </head>
    <body>
        <h1>Enrollment Page</h1>
        <form action="includes/enrollmentformhandler.php" method="POST">
            <label for="regNo">Registration Number</label><br>
            <input required type="text" name="regNo" id="regNo" value="<?= $_SESSION["regNo"] ?>"><br><br>
            <label for="nic">Nation Identity Card</label><br>
            <input required type="text" name="nic" id="nic" placeholder="NIC"><br><br>
            <label for="faculty">Faculty</label><br>
            <input required type="text" name="faculty" id="faculty"><br><br>
            <label for="fullName">Full Name</label><br>
            <input required type="text" name="fullName" id="fullName"><br><br>
            <label for="nameInitial">Name with initials</label><br>
            <input required type="text" name="nameInitial" id="nameInitial"><br><br>
            <label for="rAddress">Residential Address</label><br>
            <input required type="text" name="rAddress" id="rAddress"><br><br>
            <label for="pAddress">Permanent Address</label><br>
            <input required type="text" name="pAddress" id="pAddress"><br><br>
            <label for="dob">DOB</label><br>
            <input required type="date" name="dob" id="dob"><br><br>
            <label for="sex">Sex</label><br>
            <select name="sex" id="sex">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br><br>
            <label for="maritalStatus">Marital Status</label><br>
            <select name="maritalStatus" id="maritalStatus">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select><br><br>
            <label for="mobile">Mobile Number</label><br>
            <input required type="number" name="mobile" id="mobile"><br><br>
            <label for="school">Last School Attended</label><br>
            <input required type="text" name="school" id="school"><br><br>
            <label for="blood">Blood Group</label><br>
            <select name="blood" id="blood">
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
            <input required type="number" name="height" id="height">cm<br><br>
            <label for="weight">Weight</label><br>
            <input required type="number" name="weight" id="weight">kg<br><br>
            <div>
                <h5>Parent/Guardian Information</h5>
                <label for="parent">Parent/Guardian Name</label><br>
                <input required type="text" name="parent" id="parent"><br><br>
                <label for="pMobile">Mobile Number</label><br>
                <input required type="number" name="pMobile" id="pMobile"><br><br>
            </div>
            <?php
            $mydate=getdate(date("U"));
            $year = $mydate['year'];
            $month = $mydate['month'];
            $date = $mydate['mday'];
            $enrolDate = "$month $date, $year";
            ?>  
            <input type="hidden" name="enrolDate" value="<?= $enrolDate ?>">
            <br>
            <button>Submit</button>
        </form>
    </body>
</html>