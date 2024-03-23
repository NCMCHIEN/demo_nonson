<?php
$act = "dangnhap";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;
    case 'dangnhap_action':
        $user = '';
        $pass = '';
        if (isset ($_POST['txtusername']) && isset ($_POST['txtpassword'])) {
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            $saltF = "G234#!";
            $saltL = "Ta78@#";
            $passnew = md5($saltF . $pass . $saltL);
            //controller yeu cau model truy van xem co user hay khong
            $kh = new user();
            $logkh = $kh->logKhachHang($user, $passnew);//tra ve array
            if ($logkh) {
                //neu dang nhap thanh cong thi tao session de luu tru thong tin
                $_SESSION['makh'] = $logkh['makh'];
                echo '<script> alert("Dang nhap thanh cong");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
            } else {
                echo '<script> alert("Dang nhap khong thanh cong");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
            }
        }
        break;
    case 'dangxuat':
        unset($_SESSION['makh']);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
        break;
}
?>