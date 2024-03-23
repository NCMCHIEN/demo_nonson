<?php
//xem ng dung co gio hang hay chua
if (!isset ($_SESSION['cart'])) {
    //tao gio hang
    $_SESSION['cart'] = array();
}
$act = "giohang";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];

}
switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'giohang_action':
        //    truyen qua id, size, soluong
        $id = 0;
        $size = '';
        $soluong = 0;
        if (isset ($_POST['mahh'])) {
            //echo "hello";
            $id = $_POST['mahh'];
            $size = $_POST['size'];
            $soluong = $_POST['soluong'];
            //controller yeu cau add thong tin nay vao gio hang
            $gh = new giohang();
            $gh->addCart($id, $size, $soluong);
        }
        include_once "./View/cart.php";
        break;
    case 'giohang_xoa':
        if (isset ($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
        }
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        break;
    case 'update_gh':
        //nhan gia tri
        if (isset ($_POST['newqty'])) {
            $newqty = $_POST['newqty'];
            foreach ($newqty as $key => $value) {
                if ($_SESSION['cart'][$key]['soluong'] != $value) {
                    $gh = new giohang();
                    $gh->updateHH($key, $value);
                }
            }
        }
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        break;
}

?>