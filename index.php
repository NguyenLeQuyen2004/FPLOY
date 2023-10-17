<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "view/header.php";
include "global.php";
$dstop10 = loadall_sanpham_top10();
$sqnew = loadall_sanpham_home();
$selectalldm = loadall_danhmuc();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            // bài của mình ở boxright có $get
            // ở sanpham có $post
            // =>> dùng $request
            $kyw = isset($_REQUEST['kyw']) ? $_REQUEST['kyw'] : "";
            $iddm = isset($_REQUEST['iddm']) ? $_REQUEST['iddm'] : 0;
            $dssp = loadall_sanpham($kyw, $iddm);
            include "view/sanpham.php";
            break;
        case "sanphamct":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                insert_binhluan($_GET['idsp'], $_POST['noidung']);
            }
            if (isset($_GET['idsp']) && isset($_GET['iddm'])) {
                $sanpham = loadone_sanpham($_GET['idsp']);
                $spcl = load_sanpham_cungloai($_GET['idsp'], $_GET['iddm']);
                $binhluan = loadall_binhluan($_GET['idsp']);
            }
            include "view/chitietsanpham.php";
            break;
        case "dangky":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                extract($_POST);
                $checkuser = checkuser($user, $pass);
                $checkemail = checkemail($email);

                if (!$checkuser && !$checkemail) {
                    insert_taikhoan($user, $pass, $email);
                    $thongbao = "Dang ky thanh cong";
                } else {
                    $thongbao = "Tai khoan da ton tai";
                }
            }
            include "view/login/dangky.php";
            break;
        case "dangnhap":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                extract($_POST);
                $user = checkuser($user, $pass);
                if (is_array($user)) {
                    $_SESSION['user'] = $user;
                    if ($_SESSION['user']['role'] == 1) {
                        header('location: admin/index.php');
                        include "admin/home.php";
                        exit();
                    } else {
                        header('location: index.php');
                        include "view/home.php";
                    }
                }
            }
            break;
        case "dangxuat":
            dangxuat();
            header('location: index.php');
        case "quenmk":
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                extract($_POST);
                $sendMailMess = sendMail($email);
            }
            include "view/login/quenmk.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
