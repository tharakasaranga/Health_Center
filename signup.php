<?php
//////////////////////////////////////////////
function alert($message) 
{
    echo "<script>alert('$message');</script>";
}
//////////////////////////////////////////////

?>


<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
    </head>
    <body>
        <h1>SignUp Page</h1>
        <form action="includes/signupformhandler.php" method="POST">
            <label for="regNo">Registration Number</label><br>
            <input type="text" name="regNo" id="regNo" placeholder="eg:- 2020CSCXXX"><br><br>
            <label for="email">Department</label><br>
            <select name="department" id="department">
                <option value="csc">Computer Science</option>
            </select><br><br>
            <label for="batch">Batch</label><br>
            <select name="batch" id="batch">
                <option value="2018/2019">2018/2019</option>
                <option value="2019/2020">2019/2020</option>
                <option value="2020/2021">2020/2021</option>
                <option value="2021/2022">2021/2022</option>
            </select><br><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" placeholder="email"><br><br>
            <label for="pwd">Password</label><br>
            <input type="password" name="pwd" id="pwd" placeholder="password"><br><br>
            <button type="submit">SignUp</button>
        </form>

        <?php 
        
            if(!isset($_GET['signup']))
            {
                exit();
            }
            else
            {
                $error = $_GET['signup'];
                if($error == "emptyInput")
                {
                    alert("Fill all blanks.");
                    exit();
                }
                else if($error == "invalidRegNo")
                {
                    alert("Invalid Registration Number");
                    exit();
                }
                else
                {
                    exit();
                }
            }

        ?>

    </body>
</html>