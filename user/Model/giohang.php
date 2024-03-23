<?php
class giohang
{
    function addCart($id, $size, $soluong)
    {
        $sanpham = new hanghoa();
        $sp = $sanpham->getHangHoaId($id);
        $tenhh = $sp['tenhh'];
        $dongia = $sp['dongia'];
        //lay hinh
        $hinh = $sanpham->getHangHoaIdSize($id, $size);
        $img = $hinh['hinh'];
        $total = $soluong * $dongia;
        $flag = false;
        //truoc khi dua 1ob vao gio hang thi kiem tra co ton tai trong cai gio hang hay chua
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $id && $item['size'] == $size) {
                $flag = true;
                $soluong += $item['soluong'];
                $this->updateHH($key, $soluong);
            }
        }
        if ($flag == false) {
            $item = array(
                'mahh' => $id,
                'tenhh' => $tenhh,
                'hinh' => $img,
                'size' => $size,
                'soluong' => $soluong,
                'dongia' => $dongia,
                'thanhtien' => $total,
            );
            //dem doi tuong add vao gio hang a[]
            $_SESSION['cart'][] = $item;
        }

    }
    function getSubTotal()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $key => $item) {
            $subtotal += $item['thanhtien'];
        }
        $subtotal = number_format($subtotal, 2);
        return $subtotal;
    }
    //update
    function updateHH($index, $soluong)
    {
        if ($soluong <= 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            $_SESSION['cart'][$index]['soluong'] = $soluong;
            $tiennew = $_SESSION['cart'][$index]['soluong'] * $_SESSION['cart'][$index]['dongia'];
            $_SESSION['cart'][$index]['thanhtien'] = $tiennew;
        }
    }
}
?>