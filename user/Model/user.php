<?php 
    class user{
        //pthuc kiem tra trung username va email
        function checkKhachHang($user,$email)
        {
            $db=new connect();
            $select="SELECT a.username,a.email FROM khachhang a WHERE a.username='$user' or a.email='$email'";
            $result=$db->__getList($select);
            return $result;
        }
        //phuong thuc insert vao database
        function insertKhachHang($username,$matkhau,$email,$sodienthoai)
        {
            $db=new connect();
            $query="INSERT INTO `khachhang` (`makh`, `username`, `matkhau`, `email`, `sodienthoai`) 
            VALUES (NULL, '$username', '$matkhau', '$email', '$sodienthoai');";
            //exec
            echo $query;
            $result=$db->exec($query);
            return $result;
        }
        //phuong thuc log
        function logKhachHang($user,$pass)
        {
            $db=new connect();
            $select="select a.makh,a.username from khachhang a WHERE a.username='$user' and a.matkhau='$pass'";
            $result=$db->__getInstance($select);
            return $result;
        }
        
        function checkEmail($email){
            $db=new connect();
            $select="select * from khachhang a
            WHERE a.email='$email'";
            $result=$db->__getList($select);
            return $result;
        }
    }
?>