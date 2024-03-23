<?php
class hoadon
{
    //phuong thuc insert vao bang hoa don
    function insertHoaDon($makh)
    {
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $db = new connect();
        $querry = "insert into hoadon(masohd,makh,ngaydat,tongtien) values(Null,$makh,'$ngay',0)";
        $db->exec($querry);
        //insert xong thic can lay ra ma hoa don vua insert
        $select = "select masohd from hoadon order by masohd desc limit 1";
        $mahd = $db->__getInstance($select);
        return $mahd[0];// tra ve mang $mdhd=array(5); tra ve so 5
    }
    //phuong thuc insert vao bang chi tiet hoa don
    function insertCTHoaDon($masohd, $mahh, $soluongmua, $size, $thanhtien)
    {
        $db = new connect();
        $querry = "insert into cthoadon(masohd,mahh,soluongmua,size,thanhtien,tinhtrang)
        values($masohd,$mahh,$soluongmua,'$size',$thanhtien,0)";
        $db->exec($querry);
    }
    //phuong thuc updatetong tien vao lai bang hoadon
    function updateHoaDonTongTien($masohd, $makh, $tongtien)
    {
        $db = new connect();
        $querry = "update hoadon set tongtien=$tongtien WHERE masohd=$masohd and makh=$makh";
        $db->exec($querry);
    }
    //hien thi thongtin kh dua vao masohd
    function selectThongTinKHHD($masohd)
    {
        $db = new connect();
        $select = "select b.masohd, b.ngaydat, a.sodienthoai 
        from khachhang a INNER JOIN hoadon b on a.makh=b.makh WHERE masohd=$masohd";
        $result = $db->__getInstance($select);
        return $result;
    }
    //hien thi thong tin hh theo masohd
    function selectThongTinHHID($masohd)
    {
        $db = new connect();
        $select = "select DISTINCT a.tenhh, c.size, b.dongia, b.hinh, c.soluongmua 
        from hanghoa a, cthanghoa b, cthoadon c WHERE a.mahh=b.idhanghoa and a.mahh=c.mahh and c.masohd=$masohd";
        $result = $db->__getList($select);
        return $result;
    }
    function updateSoLuongTon($mahh, $soluongmua)
    {
        $db = new connect();
        $querry = "update cthanghoa set soluongton=soluongton-$soluongmua where idhanghoa=$mahh;";
        $db->exec($querry);
    }
}
?>