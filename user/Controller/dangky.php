<?php 
$act='dangky';
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch ($act) {
    case 'dangky':
        include_once "./View/registration.php";
        break;
    case 'dangky_action':
        //nhan thong tin
        $sodt='';
        $user='';
        $email='';
        $pass='';
        if(isset($_POST['submit']))
        {
            $sodt=$_POST['txtsodt'];
            $user=$_POST['txtusername'];
            $email=$_POST['txtemail'];
            $pass=$_POST['txtpass'];
            //ma hoa pass
            $saltF="G234#!";
            $saltL="Ta78@#";
            $passnew=md5($saltF.$pass.$saltL);
            //controller yeu cau dem thong tin nay luu vao database? Model
            //truoc khi chen can kiem tra username va email co ton tai trong database
            $kh=new user();
            $check=$kh->checkKhachHang($user,$email)->rowCount();
            if($check>=1)
            {
                echo '<script> alert("Username và email đã tồn tại");</script>';
                //include_once "./View/registration.php"
                echo '<meta http-euiv="refresh" content="0;url=../index.php?action=dangky"/>';
            }
            else
            {
                //insert vao database
                $iskh=$kh->insertKhachHang($user,$passnew,$email,$sodt);
                if($iskh!==false)
                {
                    echo '<script> alert("Dang ky thanh cong");</script>';
                    include_once "./View/home.php";
                }
                else
                {
                    echo '<script> alert("Dang ky ko thanh cong");</script>';
                    include_once "./View/registration.php";
                    // echo '<meta http-euiv="refresh" content="0;url=../index.php?action=dangky"/>';
                }
            }
        }
        break;
}
?>