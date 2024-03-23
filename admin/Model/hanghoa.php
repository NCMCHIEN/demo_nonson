<?php
class hanghoa
{
    function getHangHoa()
    {
        $db = new connect();
        $select = "select * from hanghoa";
        $result = $db->getList($select);
        return $result;
    }
    //phương thức insert
    function insertHangHoa($tenhh, $maloai, $slx, $mota, $ngaylap)
    {
        $db = new connect();
        $query = "insert into hanghoa(mahh,tenhh,maloai,soluotxem,mota,ngaylap) 
            values (Null,'$tenhh',$maloai,$slx,'$mota','$ngaylap')";
        $result = $db->exec($query);
        return $result;
    }
    // lấy thông tin 1 sản phẩm
    function getHangHoaID($id)
    {
        $db = new connect();
        $select = "select * from hanghoa where mahh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    // phương thức update
    function updateHangHoa($mahh, $tenhh, $maloai, $slx, $mota, $ngaylap)
    {
        $db = new connect();
        $query = "update hanghoa 
        set tenhh='$tenhh',maloai=$maloai,soluotxem=$slx,mota='$mota',ngaylap='$ngaylap' 
        where mahh=$mahh";
        $result = $db->exec($query);
        return $result;
    }
    //delete hang hoa
    function deleteHangHoa($mahh)
    {
        $db = new connect();
        $query = "DELETE FROM hanghoa WHERE mahh = $mahh;";
        $result = $db->exec($query);
        return $result;
    }
    function getSize()
    {
        $db = new connect();
        $select = "select * from sizenon";
        $result = $db->getList($select);
        return $result;
    }
    // phương thức thống kê
    function getThongKe()
    {
        $db = new connect();
        $select = "SELECT b.tenhh,sum(a.soluongmua)as soluong FROM cthoadon a,hanghoa b WHERE a.mahh=b.mahh GROUP by b.tenhh";
        $result = $db->getList($select);
        return $result;
    }

}
?>