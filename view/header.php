<?php
$selectalldm = loadall_danhmuc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/style.css?ver=<?= rand() ?>">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="boxcenter">
        <!-- BIGIN HEADER -->
        <header>
            <div class="row mb header">
                <h1>SIÊU THỊ TRỰC TUYẾN</h1>
            </div>
            <div class="row mb menu">
                <ul>
                    <li class="dropdown">
                        <a class="dropdownbtn" href="index.php">Trang chủ</a>
                        <div class="dropdown_content">
                            <?php foreach ($selectalldm as $dm) : ?>
                            <?php extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $id; ?>
                            <a href="<?= $linkdm ?>"><?= $name ?> </a>
                            <?php endforeach ?>
                        </div>
                    <li class="dropdown">
                        <a class="dropdownbtn" href="">Danh mục</a>
                        <div class="dropdown_content">
                            <?php foreach ($selectalldm as $dm) : ?>
                            <?php extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $id; ?>
                            <a href="<?= $linkdm ?>"><?= $name ?> </a>
                            <?php endforeach ?>
                        </div>
                    <li class="dropdown">
                        <a class="dropdownbtn" href="">Sản Phẩm</a>
                        <div class="dropdown_content">
                            <?php foreach ($selectalldm as $dm) : ?>
                            <?php extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $id; ?>
                            <a href="<?= $linkdm ?>"><?= $name ?> </a>
                            <?php endforeach ?>
                        </div>
                    <li class="dropdown">
                        <a class="dropdownbtn" href="">Bình luận</a>
                        <div class="dropdown_content">
                            <?php foreach ($selectalldm as $dm) : ?>
                            <?php extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $id; ?>
                            <a href="<?= $linkdm ?>"><?= $name ?> </a>
                            <?php endforeach ?>
                        </div>
                    </li>

                </ul>
            </div>
        </header>