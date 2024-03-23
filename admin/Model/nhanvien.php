<?php
class nhanvien
{
    function getAdmin($user, $pass)
    {
        $db = new connect();
        $select = "select username,matkhau,idnv from nhanvien where username='$user' and matkhau='$pass'";
        $result = $db->getInstance($select);
        return $result;
    }
    function forGotPass($pass, $id)
    {
        $db = new connect();
        $querry = "UPDATE `nhanvien` SET `matkhau` = '$pass' WHERE `nhanvien`.`idnv` = $id;";
        $result = $db->getList($querry);
        return $result;
    }
}
?>