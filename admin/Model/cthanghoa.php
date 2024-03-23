<?php
class cthanghoa
{
    function insertCTHangHoa($masize, $dongia, $slt, $hinh, $mahh, $giamgia)
    {
        $db = new connect();
        $query = "insert into cthanghoa(idsize,dongia,soluongton,hinh,mahanghoa,giamgia) values ($masize,$dongia,$slt,'$hinh',$mahh,$giamgia)";
        $result = $db->exec($query);
        return $result;
    }
}
?>