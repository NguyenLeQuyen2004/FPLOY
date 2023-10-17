<?php 
// var_dump($_SESSION);
?>
<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="items">
            <?php foreach ($sqnew as $value) : ?>
                <?php
                extract($value);
                $image = $img_path . $img;
                $idnguoidung = isset($user['id']) ? ("&idnguoidung=" . $user['id']) : '';
                $linksp = "index.php?act=sanphamct&idsp=" . $id . "&iddm=" . $iddm . $idnguoidung;
                ?>
                <div class="box_items">
                    <div class="box_items_img">
                        <a class="item_name" href="<?= $linksp ?>"><img src="<?= $image ?>" alt=""></a>
                        <div class="add" href="">ADD TO CART</div>
                    </div>
                    <a class="item_name" href="<?= $linksp ?>"><?= $name ?></a>

                    <p class="price"><?= number_format($price, 0, '.', ',') ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>
</main>
<!-- BANNER 2 -->