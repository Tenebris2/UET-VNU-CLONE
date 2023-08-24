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
        
        <link rel="stylesheet" href="RequestPageSpecificStyles.css">
        <link rel="stylesheet" href="RequestPageStyles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <form action="requestHandler.php" method="post">
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
                <div class="menu-bar" id="menu-bar-1">
                        <button class="save-button" name="save" type="submit">
                            <ion-icon name="save-outline" class="save-outline"></ion-icon>
                            <span>Lưu</span>
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
                    <li><button onclick="location.href=''">1.Giấy chứng nhận</button></li>
                    <li><button>2.Cấp bảng điểm</button></li>
                    <li><button>3.Đề nghị hoãn thi</button></li>
                    <li><button>4.Xem lại bài thi</button></li>
                    <li><button>5.Hoãn nộp học phí</button></li>
                    <li><button>6.Mượn hồ sơ</button></li>
                    <li><button name="asd">7.XN trợ cấp xã hội</button></li>
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
                    <li><button>18.Cập nhật hồ sơ</button></li>
                    <li><button>19.Đề nghị thuê nhà ở</button></li>
                    <li><button>20.XN điểm rèn luyện</button></li>
                    <li><button>21.Đánh giá phần mềm</button></li>
                </ol>
            </nav>
        </div>
        <div class="big-label-container-1">
            <div class="label-1">
                <h2>Giấy chứng nhận</h2>
            </div>
            <div class="label-2">
                <p>Sinh viên kích chọn loại giấy thích hợp theo yêu cầu, số bản bằng tiếng Việt hoặc tiếng Anh;
                Giấy giới thiệu thực tập cần ghi rõ tên công ty, thời gian thực tập. đến Phòng 104-E3 nhận kết quả sau 01 ngày làm việc.</p>
            </div>
            <div class="certList">
                <p>Loại giấy chứng nhận:</p> 
                    <div class="certListRadioBoxes">
                        <ul>
                            <li>
                                <input type="radio" name="check" value="Chứng nhận Sinh viên /HV/NCS">
                                <label for="check">Chứng nhận Sinh viên /HV/NCS</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Sinh viên nhiệm vụ chiến lược">
                                <label for="check">Sinh viên nhiệm vụ chiến lược</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Học bổng (Điền chi tiết tên học bổng, năm nhận vào ô Lý do bên dưới)">
                                <label for="check">Học bổng (Điền chi tiết tên học bổng, năm nhận vào ô Lý do bên dưới)</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Mất thẻ sinh viên (Dùng để tham gia các hoạt động và học tập trong trường)">
                                <label for="check">Mất thẻ sinh viên (Dùng để tham gia các hoạt động và học tập trong trường)</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Kê khai thuế thu nhập">
                                <label for="check">Kê khai thuế thu nhập</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Hoãn nghĩa vụ quân sự">
                                <label for="check">Hoãn nghĩa vụ quân sự</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Đăng ký ở KTX">
                                <label for="check">Đăng ký ở KTX</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Xin Visa">
                                <label for="check">Xin Visa</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Chưa hoàn thành khóa học (Dùng để tham gia các hoạt động và học tập tại trường)">
                                <label for="check">Chưa hoàn thành khóa học (Dùng để tham gia các hoạt động và học tập tại trường)</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Giấy giới thiệu thực tập (Giấy giới thiệu thực tập)">
                                <label for="check">Giấy giới thiệu thực tập (Giấy giới thiệu thực tập)</label>
                            </li>
                            <li>
                                <input type="radio" name="check" value="Loại khác (Điền chi tiết yêu cầu giấy chứng nhận vào ô Lý do bên dưới">
                                <label for="check">Loại khác (Điền chi tiết yêu cầu giấy chứng nhận vào ô Lý do bên dưới)</label>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class="spinner-1">
                <p>Số bản tiếng Việt:</p> 
                <div class="textbox-1">
                    <input type="number" min = 0 name="SoBanTiengViet">
                </div>
            </div>

            <div class="spinner-2">
                <p>Số bản tiếng Anh:</p> 
                <div class="textbox-2">
                    <input type="number" min = 0 name="SoBanTiengAnh">
                </div>
            </div>

            <div class="reason">
                <p>Lý do</p> 
                <textarea class="reason-textbox" name="LyDo"></textarea>
            </div>
        </div>

    </div>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>