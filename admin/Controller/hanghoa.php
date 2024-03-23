<?php
$act = "hanghoa";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'hanghoa':
        include_once "./View/hanghoa.php";
        break;

    case 'insert_hanghoa':
        include_once "./View/edithanghoa.php";
        break;
    case 'insert_action':
        // nhận thông tin
        if (isset ($_SERVER['REQUEST_METHOD']) == "POST") {
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $maloai = $_POST['maloai'];
            $slx = $_POST['slx'];
            $mota = $_POST['mota'];
            $ngaylap = $_POST['ngaylap'];
            // đem dữ liệu này lưu vào database
            $hh = new hanghoa();
            $check = $hh->insertHangHoa($tenhh, $maloai, $slx, $mota, $ngaylap);
            if ($check !== false) {
                echo '<script>alert("Thêm dữ liệu thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=hanghoa"/>';
            } else {
                echo '<script>alert("Thêm dữ liệu ko thành công");</script>';
                include_once "./View/edithanghoa.php";
            }
        }
        break;
    case 'update_hanghoa':
        include_once "./View/edithanghoa.php";
        break;
    case 'update_action':
        if (isset ($_SERVER['REQUEST_METHOD']) == "POST") {
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $maloai = $_POST['maloai'];
            $slx = $_POST['slx'];
            $mota = $_POST['mota'];
            $ngaylap = $_POST['ngaylap'];
            // đem dữ liệu này lưu vào database
            $hh = new hanghoa();
            // $check=$hh->insertHangHoa($tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota);
            $check = $hh->updateHangHoa($mahh, $tenhh, $maloai, $slx, $mota, $ngaylap);
            if ($check !== false) {
                echo '<script>alert("Update dữ liệu thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=hanghoa"/>';
            } else {
                echo '<script>alert("Update dữ liệu ko thành công");</script>';
                include_once "./View/edithanghoa.php";
            }
        }
        break;
    case 'delete_hanghoa':
        if (isset ($_GET['id'])) {
            $id = $_GET['id'];
            $hh = new hanghoa();
            $check = $hh->deleteHangHoa($id);
            if ($check !== false) {
                echo '<script>alert("Xoa dữ liệu thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=hanghoa"/>';
            } else {
                echo '<script>alert("Xoa dữ liệu ko thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=hanghoa"/>';
            }
        }
        break;
}

?>