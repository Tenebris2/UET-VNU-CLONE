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
        
        <link rel="stylesheet" href="RequestPageStyles.css">
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
                            <a href="OperatingPage.php">Trang tổng hợp</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </div>
                <div class="menu-bar">
                    
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
                            <button id="logout-button" onclick="location.href='index.php'">Đăng xuất</button>
                        </div>                 
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="list">
            <nav>
                <ul class="ul-list">
                    <li><button onclick="location.href='RequestPageN1.php'">1.Giấy chứng nhận</button></li>
                    <li><button>2.Cấp bảng điểm</button></li>
                    <li><button>3.Đề nghị hoãn thi</button></li>
                    <li><button>4.Xem lại bài thi</button></li>
                    <li><button>5.Hoãn nộp học phí</button></li>
                    <li><button>6.Mượn hồ sơ</button></li>
                    <li><button>7.XN trợ cấp xã hội</button></li>
                    <li><button>8.XN vay vốn ngân hàng</button></li>
                    <li><button>9.Cấp lại thẻ sinh viên</button></li>
                    <li><button>10.CN tốt nghiệp tạm thời</button></li>
                    <li><button>11.Nghỉ học có thời hạn</button></li>
                    <li><button>12.Tiếp tục học</button></li>
                    <li><button>13.Xin thôi học</button></li>
                    <li><button>14.Xác nhận đi nước ngoài</button></li>
                    <li><button>15.Chứng nhận còn nợ môn</button></li>
                    <li><button>16.XN nhận miễn giảm HP</button></li>
                    <li><button>17.Đề nghị làm vé xe buýt</button></li>
                    <li><button onclick="location.href = 'RequestPageN18.php'">18.Cập nhật hồ sơ</button></li>
                    <li><button>19.Đề nghị thuê nhà ở</button></li>
                    <li><button>20.XN điểm rèn luyện</button></li>
                    <li><button>21.Đánh giá phần mềm</button></li>
                </ol>
            </nav>
        </div>
        <div class="big-label-container">
            <script>
                function chooseFiles(fileInput)
                {
                    
                }
            </script>
            <div class="big-label">
                <div class="small-label-1">
                    <label for="avatar">Choose a profile picture:</label>
                    <input type="file" accept="image/png , image/jpeg" />
                    <img src="" alt="" id="image" width="200" height="200">
                </div>
            </div>
        </div>

    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>