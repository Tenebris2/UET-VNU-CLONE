<?php
include ('utilsPHP/database.php');
session_start();
    if (isset($_POST['save']))
    {
        if (isset($_POST['check']))
        {
            if (isset($_POST['SoBanTiengViet']))
            {
                if (isset($_POST['SoBanTiengAnh']))
                {
                    if (isset($_POST['LyDo'])) 
                    {
                        $Student_ID = $_SESSION['username'];
                        $LoaiGiayChungNhan = $_POST['check'];
                        $SoBanTiengViet = (int)$_POST['SoBanTiengViet'];
                        $SoBanTiengAnh = (int)$_POST['SoBanTiengAnh'];
                        $LyDo = $_POST['LyDo'];
                        $sql = "INSERT INTO users_request (Student_ID,Request_Type,LoaiGiayChungNhan,SoBanTiengViet,SoBanTiengAnh,LyDo) 
                        VALUES('$Student_ID','Giay Chung Nhan','$LoaiGiayChungNhan',{$SoBanTiengViet},{$SoBanTiengAnh},'$LyDo')";
                        try 
                        {
                            mysqli_query($conn,$sql);
                            echo "Request successfully submitted";
                        }
                        catch(mysqli_sql_exception)
                        {
                            echo mysqli_error($conn);
                        }
                    }
                }
            }
        }
    }
    header('Location: RequestPageN1.php');
    mysqli_close($conn);
?>
