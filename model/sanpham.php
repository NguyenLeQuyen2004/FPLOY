<?php 
    function load_sp_home(){
        $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY id DESC limit 0,9;";
        $listSp = pdo_query($sql);
        return $listSp;
    }
    function load_all_sp(){
        $sql = "SELECT * FROM `sanpham` WHERE 1";
        $listSp = pdo_query($sql);
        return $listSp; 
    }
    function load_one_sp($id){
        $sql = "select * from sanpham where id = " .$id;
        $sp = pdo_query_one($sql);
        return $listSp;
    }
?>