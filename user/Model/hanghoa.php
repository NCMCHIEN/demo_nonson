<?php
class hanghoa
{
    //phuong thuc hien thi san pham
    function getHangHoaNew()
    {
        //b1: ket noi duwoc voi du lieu
        $db = new connect();
        //b2: can lay cai gi thi truy van cai do
        $select = 'select DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.mahanghoa from hanghoa a,cthanghoa b
            WHERE a.mahh=b.mahanghoa ORDER by a.mahh DESC LIMIT 4';
        $result = $db->__getList($select);
        return $result;//lay duoc du lieu ve
    }
    function getHangHoaSale()
    {
        $db = new connect();
        $select = 'select DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.mahanghoa,b.giamgia from hanghoa a,cthanghoa b
            WHERE a.mahh=b.mahanghoa and b.giamgia!=0 ORDER by a.mahh DESC LIMIT 4';
        $result = $db->__getList($select);
        return $result;
    }
    function getHangHoaAll()
    {
        $db = new connect();
        $select = 'select DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia from hanghoa a,cthanghoa b
            WHERE a.mahh=b.mahanghoa ORDER BY a.mahh desc';
        $result = $db->__getList($select);
        return $result;
    }
    function getHangHoaAllSale()
    {
        $db = new connect();
        $select = 'select DISTINCT a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia from hanghoa a,cthanghoa b
            WHERE a.mahh=b.mahanghoa and b.giamgia!=0 ORDER BY a.mahh desc';
        $result = $db->__getList($select);
        return $result;
    }
    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.mahh,a.tenhh,a.mota,b.dongia,b.hinh,c.size,b.soluongton from hanghoa a,cthanghoa b, sizenon c
            WHERE a.mahh=b.mahanghoa and a.mahh= $id";
        // echo $select;
        $result = $db->__getInstance($select);
        return $result;
    }
    function getHangHoaIdSize($id, $size)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.hinh FROM cthanghoa a, sizenon b WHERE a.idsize=b.idsize and a.idhanghoa=$id and b.size='$size'";
        $result = $db->__getInstance($select);
        return $result;
    }
    function getHangHoaSize($id)
    {
        $db = new connect();
        $select = "select DISTINCT b.idsize, b.size FROM cthanghoa a, sizenon b WHERE a.idsize=b.idsize and a.mahanghoa= $id ";
        $result = $db->__getList($select);
        return $result;
    }
    function getHangHoaHinh($id)
    {
        $db = new connect();
        $select = "select a.hinh from cthanghoa a WHERE a.mahanghoa = $id ";
        $result = $db->__getList($select);
        return $result;
    }
    function getDanhMuc()
    {
        $db = new connect();
        $select = "SELECT tenloai FROM loai ";
        $result = $db->__getList($select);
        return $result;
    }
    function selectTimKiem($tensp)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.mahh, a.tenhh, b.dongia, b.hinh, c.maloai
            FROM hanghoa a, cthanghoa b, loai c 
            WHERE a.mahh = b.mahanghoa and a.maloai = c.maloai and a.tenhh like '%$tensp%' ORDER BY a.mahh DESC ";
        $result = $db->__getList($select);
        return $result;
    }
    function selectSanPham($maloai)
    {
        $db = new connect();
        $select = "SELECT * from hanghoa WHERE maloai = $maloai";
        $result = $db->__getList($select);
        return $result;
    }
}
?>