<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" name="kyw" placeholder="Nhập từ khoá cần tìm">
                <select name="iddm" id="potencial" class="custom-select sources">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($selectalldm as $dm) : ?>
                    <?php extract($dm) ?>
                    <option value="<?= $id ?>"><?= $id . '-' . $name ?></option>
                    <?php endforeach ?>
                </select>
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
        <div class="items">
            <?php foreach ($dssp as $value) : ?>
            <?php
                extract($value);
                $image = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id . "&iddm=" . $iddm;
                ?>
            <div class="box_items">
                <div class="box_items_img">
                    <a class="item_name" href="<?= $linksp ?>"> <img src="<?= $image ?>" alt=""></a>
                    <div class="add" href="">ADD TO CART</div>
                </div>
                <a class="item_name" href="<?= $linksp ?>"><?= $name ?></a>
                <p class="price"><?= $price ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->