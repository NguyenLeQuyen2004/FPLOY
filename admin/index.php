<?php
include "../model/taikhoan.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                extract($_POST);
                $adddm = insert_danhmuc($tenloai);
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $selectalldm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_danhmuc($_GET['id']);
            }
            $selectalldm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'];
                $tenloai = $_POST['tenloai'];
                // echo $id;
                // echo $tenloai;
                update_danhmuc($id, $tenloai);
                $thongbao = "cap nhat thanh cong";
            }
            $selectalldm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'addsp':
            $listdanhmuc = loadall_danhmuc();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                extract($_POST);
                extract($_FILES);
                $upload = $_POST['chonloaihang'];
                $nameimg = $hinh['name'];
                move_uploaded_file($hinh['tmp_name'], "../upload/" . $nameimg);
                $addsp = insert_sanpham($name, $giasp, $nameimg, $mota, $luotxem, $upload);
                $thongbao = "them thanh cong";
            }
            include "sanpham/add.php";
            break;
        case 'listsp':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $selectalldm = loadall_danhmuc();
            $allsp = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $allsp = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                extract($_POST);
                $dir = "../upload/";
                if (!empty($_FILES['hinh']['name'])) {
                    $nameimg = $_FILES['hinh']['name'];
                    $updateimg = $dir . basename($nameimg);
                    move_uploaded_file($_FILES['hinh']['tmp_name'], $updateimg);
                } else {
                    $updateimg = '';
                }
                $upload = $_POST['chonloaihang'];
                update_sanpham($id, $tenloai, $giasp, $updateimg, $mota, $luotxem, $upload);
                $thongbao = "cap nhat thanh cong";
            }
            $selectalldm = loadall_danhmuc();
            $allsp = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'listbl':
            $listbl = load_listbl();
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_binhluan($_GET['id']);
            }
            $listbl = load_listbl();
            include "binhluan/list.php";
            break;
        case 'listtk':
            $listtk = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_taikhoan($_GET['id']);
            }
            $listtk = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'bieudo':
            $thongke = thongke();
            include "thongke/bieudo.php";
            break;
        case 'thongke':
             $thongke = thongke();
             include "thongke/thongke.php";
             break;
        default:
            include 'home.php';
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
