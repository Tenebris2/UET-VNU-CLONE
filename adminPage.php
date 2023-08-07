<?php 
include 'adminPage.html';
include ("utilsPHP/database.php");
if (isset($_POST["stdID"]))
    if (isset($_POST["password"]))
        {
            $stdID = $_POST["stdID"];
            $password = $_POST["password"];
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (Student_ID,password) VALUES('{$stdID}','{$hash}')";

            try{
                mysqli_query($conn,$sql);
            }
            catch(mysqli_sql_exception)
            {
                echo"Could not register";   
            }
            mysqli_close($conn);
        }

?>
