<?php 
include 'adminPage.html';
include ("utilsPHP/database.php");
if (isset($_POST['g-recaptcha-response']))
{
    //captcha
    $secretkey = "6LdscJInAAAAALoXyX2TWgM8zShAbpxz53KfKxCH";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $data = file_get_contents($url);
    $row = json_decode($data,true);
    if ($row['success'] == 'true')
    {
        if (isset($_POST["stdID"]))
        {
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
        }
    }
}

?>
