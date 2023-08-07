
<!DOCTYPE html> 
<html>
    <head>
        <title>UET Operating Support System</title>
        <link href="styles.css" rel="stylesheet">
        <link rel = "icon" type="images/png" href="images/logo-small.png">
    </head>
    <body>
        <header>
            <div class = "header-color"></div>
        </header>
        <div class = "body">
            <div class = "box">
                <div class="form">
                    <form action="index.php" method="post">
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
                        <div>
                        <Button id = "login-button" type="submit" name="login">Đăng nhập</Button>
                        </div>
                        <br>
                        <div id ="rem-login">  
                            <input type="checkbox">
                            <label>Ghi nhớ đăng nhập</label>
                        </div>
                        <br>
                        <label id ="lab-1">Không chọn nếu sử dụng máy tính công cộng</label>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
