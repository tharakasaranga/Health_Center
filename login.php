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
        <title>Login</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <form action="includes/loginformhandler.php" method="POST">
            <label for="regNo">Registration Number</label><br>
            <input required type="text" name="regNo" id="regNo" placeholder="eg:- 2020CSCXXX"><br><br>
            <label for="email">Department</label><br>
            <select name="department" id="department">
                <option value="csc">Computer Science</option>
            </select><br><br>
            <label for="pwd">Password</label><br>
            <input required type="password" name="pwd" id="pwd" placeholder="password"><br><br>
            <button type="submit">Login</button>
        </form><br>
        <a href="signup.php"><button>SignUp</button></a>
    <?php
        if(!isset($_GET['login']))
        {
            exit();
        }
        else
        {
            $error = $_GET['login'];
            if($error == "invalidregnumber")
            {
                alert("Invalid Registration Number");
                exit();
            }
            else if($error == "incorrectpwd")
            {
                alert("Incorrect Password");
                exit();
            }
        }
    ?>
        
    </body>
</html>