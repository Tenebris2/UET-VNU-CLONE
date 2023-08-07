<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UET Operating Page</title>
        <link rel = "icon" type="images/png" href="images/logo-small.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="OperatingPageStyles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="menu">
                <div class="logo-container">
                    <div class="dropdown">
                        <button class="dropdown-icon">
                            <ion-icon clakss="menu-outline" name="menu-outline"></ion-icon>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </div>`
                <div class="menu-bar">
                        <button class="HuongDanXD">
                            <ion-icon class="information-circle-outline" name="information-circle-outline"></ion-icon>
                            <br>
                            <span class="HDXDLabel">Hướng dẫn sử dụng</span>
                        </button>
                        <button class="XuLyYC">
                            <ion-icon class = "people-circle-outline"name="people-circle-outline"></ion-icon>
                            <br>    
                            <span class="XLYCLabel">Xử lý yêu cầu</span>
                        </button>
                        <button class="TaoYC" onclick="location.href='RequestPage/RequestPageN0.php'">
                            <ion-icon class="add-circle-outline" name="add-circle-outline"></ion-icon>
                            <br>
                            <span class="TYCLabel">Tạo yêu cầu</span>
                        </button>
                </div>
                
                <div class="user-display">
                    <div class="lab-1">Trang tổng hợp</div>
                    <div class="lab-2-container">
                        <div class="lab-2">
                            <div>
                                Người dùng
                            </div>
                            <div id="user-placeholder">
                                <?php 
                                    session_start();
                                    echo $_SESSION['username'];
                                ?>
                            </div>
                        </div>
                        <div class="logout-button">
                            <button id="logout-button">Đăng xuất</button>
                            <script src="index.js"></script>
                        </div>                 
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

