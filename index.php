
<!DOCTYPE html> 
<html>
    <head>
        <title>UET Operating Support System</title>
        <link href="styles.css" rel="stylesheet">
        <link rel = "icon" type="images/png" href="images/logo-small.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class = "header-color"></div>
        </header>
        <div class = "body">
            <div class = "box">
                <div class="form">
                    <form action="login.php" method="post">
                        <div>
                            <label id = "error">
                            <?php
                                include ("login.php");
                            ?>
                            </label>
                        </div>
                        <style>
                            #error
                            {
                                color: red;
                                margin: 125px;
                            }
                        </style>
                        <br>
                        <div>
                            <label for ="username" id="username-label">Tên đăng nhập: </label>
                            <input type="text" name="username" id="usernameField" required minlength="8" maxlength="8">
                        </div>
                        
                        <br>
                        <div>
                            <label for ="password" id="password-label">Mật khẩu: </label>
                            <input type="password" name="password" id="passwordField">                            
                        </div>
                        <div class="captcha-form">
                                <Button id = "login-button" type="submit" name="login">Đăng nhập</Button>
                                <div class="g-recaptcha" data-sitekey="6LdscJInAAAAAJ1dC9nQGAz3VAMqiOUYwgiGFcsh"></div>
                            <label id ="lab-1">Không chọn nếu sử dụng máy tính công cộng</label>
                            <script async src="https://www.google.com/recaptcha/api.js"></script>   
                        </div>
                </div>
                <script>
                    document.getElementById("login-button").onclick =function()
                    {
                        var response = grecaptcha
                        if (response.length == 0)
                        {
                            alert("Please verify you are not a robot");
                            return false;
                        }
                    }
                </script>
            </div>
        </div>
    </body>
</html>
