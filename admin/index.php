<?php 
    include "header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'listdm' :
                include "danhmuc/list.php";
                break;
            case 'adddm':
                include "danhmuc/add.php";
                break;
            case 'updatedm':
                include "danhmuc/update.php";
                break;
            default:
                include "home.php";
                break;
                
        }
           
    }
    // include "home.php";
    include "footer.php";

?>