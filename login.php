<?php
    include ("utilsPHP/database.php");

    session_start();

    if (isset($_POST['username']))
    {
        if (isset($_POST['password']))
            {
                $user = $_POST["username"];
                $password = $_POST["password"];
                if ($user == "22028071" && $password = "12345678") header('Location: adminPage.php');
                else
                {
                $sql = "SELECT * FROM users WHERE Student_ID = {$user}";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result)) {
                    $hash = $row['password'];
                    }
                    if (password_verify($password,$hash))
                    {
                        $_SESSION['username'] = $user;
                        header('Location: OperatingPage.php');
                    }
                    else 
                    {
                        echo "Tài khoản hoặc mật khẩu không đúng!";
                    }
                }
                mysqli_close($conn);
            }
        }
    }
?>