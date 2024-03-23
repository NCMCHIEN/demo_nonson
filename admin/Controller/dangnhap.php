<?php
$act = "dangnhap";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/dangnhap.php";
        break;

    case 'dangnhap_action':
        // nhận về, kiểm tra
        // c1: if(isset($_POST['txtusername'])&& isset($_POST['txtpassword']))
        // c2: if(isset($_POST['login']))
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            // đem thông tin này kiểm tra có hay không
            $nv = new nhanvien();
            $check = $nv->getAdmin($user, $pass);
            if ($check !== false) {
                $_SESSION['admin'] = $check['username'];
                $_SESSION['idnv'] = $check['idnv'];
                echo '<script>alert("Đăng nhập thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=doimatkhau">';
            } else {
                echo '<script>alert("Đăng nhập ko thành công");</script>';
                include_once "./View/dangnhap.php";
            }
        }
        break;
    case 'logout':
        session_unset();
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
        break;
    case "doimatkhau":

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $pass = $_POST['txtpassword'];
            $nv = new nhanvien();
            echo $_SESSION['idnv'];
            // Phải khai báo biến $admin trước khi sử dụng nó
            $check = $nv->forGotPass($_SESSION['idnv'], $pass);
            if ($check !== false) {
                echo "<script>alert('Đổi mật khẩu thành công');</script>";
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=hanghoa">';

            } else {
                echo "<script>alert('Đổi mật khẩu không thành công');</script>";
                include_once "./View/doimatkhau.php";

            }
        }
        include_once "./View/doimatkhau.php";

        break;
}

?>