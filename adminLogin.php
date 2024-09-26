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
        <form action="includes/adminLoginformhandler.php" method="POST">
            <label for="user">Username</label><br>
            <input type="text" name="user" id="user"><br><br>
            <label for="pwd">Password</label><br>
            <input type="password" name="pwd" id="pwd" placeholder="password"><br><br>
            <button type="submit">Login</button>
        </form><br>

        <?php

            if(!isset($_GET['login']))
            {
                exit();
            }
            else
            {
                $error = $_GET['login'];
                if($error == "fillAll")
                {
                    alert("Fill All Blanks");
                    exit();
                }
                else if($error == "invalidUsername")
                {
                    alert("Invalid Username");
                    exit();
                }
                else if($error == "incorrectpwd")
                {
                    alert("Incorrect Password");
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