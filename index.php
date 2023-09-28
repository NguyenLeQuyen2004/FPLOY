<?php 
include "view/header.php";
if(isset($_GET['act']) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            include "view/chitietsanpham.php";
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