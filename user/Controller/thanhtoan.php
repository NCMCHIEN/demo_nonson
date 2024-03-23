<?php
if(isset($_SESSION['makh']))
{
    $makh=$_SESSION['makh'];
    //controller yeu cau model insert vao bang hoa don truoc de sinh ra masohd roi moi duoc insert vao
    $hd=new hoadon();
    $sohd=$hd->insertHoaDon($makh);
    $_SESSION['masohd']=$sohd;
    $total=0;
    foreach($_SESSION['cart'] as $key => $item) 
    {
        //controller yeu cau model insert vao chi tiet hoa don
        $hd->insertCTHoaDon($sohd,$item['mahh'],$item['soluong'],$item['size'],$item['thanhtien']);
        $hd->updateSoLuongTon($item['mahh'],$item['soluong']);
        $total+=$item['thanhtien'];
        //ham cap nhat soluong ton theo ma hang
        //updatesoluongtonhh
    }
    //sau khi insert vao bang cthoadon thi update tong thanh tien tro lai hoa don
    $hd->updateHoaDonTongTien($sohd,$makh,$total);
}
include_once "./View/order.php"
?>