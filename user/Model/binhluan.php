<?php
class binhluan
{
    //phuong thuc insert vao db
    function insertBinhLuan($idkh, $idhanghoa, $content)
    {
        $db = new connect();
        $querry = "insert into comment(idcomment,idkh,idhanghoa,content,luotthich) values (NULL,$idkh,$idhanghoa,'$content',0)";
        $db->exec($querry);
    }
    //hien thi tat ca binh luan
    function selectBinhLuan($idhanghoa)
    {
        $db = new connect();
        $select = "SELECT a.username, b.content FROM khachhang a,comment b WHERE a.makh=idkh and b.idhanghoa=$idhanghoa";
        $result = $db->__getList($select);
        return $result;
    }
}
?>