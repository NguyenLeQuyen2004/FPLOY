<?php 
include "model/pdo.php";
include "model/sanpham.php";
include "view/header.php";
$list_sp = load_sp_home();

if(isset($_GET['act']) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                $id = $_GET['idsp'];
                $detail_sp = load_one_sp($id);
                include "view/chitietsanpham.php";
            }
            
            break;
        case 'dangky':
            include "view/login/dangky.php";
            break;
        case 'quenmk':
            include "view/login/quenmatkhau.php";
            break;
        default:
            include "view/home.php";
            break;
        
    }
}else{
    include "view/home.php";
}
include "view/footer.php";
?>