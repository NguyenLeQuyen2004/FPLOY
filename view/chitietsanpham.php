<style>
table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #000000;
}

th {
    border: 1px solid #000000;
    padding: 10px 20px;
}

td {
    border: 1px solid #000000;
    padding: 10px 20px;
}
</style>

<?php // var_dump($_SESSION)
?>

<main class="catalog  mb ">
    <div class="boxleft">
        <?php extract($sanpham); ?>
        <div class="  mb">
            <div class="box_title">
                <?php echo $name; ?>
            </div>
            <div class="box_content">
                <?php $img = $img_path . $img; ?>
                <img src=<?= $img ?> width='300'>
                <p style="color: red; font-size: 20px;"> Giá: <?= number_format($price, 0, '.', ',') ?> VND</p><br>
                <p>Mô tả: <?= $mota ?></p>
            </div>
        </div>

        <?php if (isset($_SESSION['user'])) { ?>
        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table>
                    <tr>
                        <th>Nội dung</th>
                        <th>ID người dùng</th>
                        <th>Ngày bình luận</th>
                    </tr>
                    <?php foreach ($binhluan as $value) : ?>
                    <?php extract($value) ?>
                    <tr>
                        <td><?php echo $noidung ?></td>
                        <td><?php echo $iduser ?></td>
                        <td><?php echo date("Y-m-d", strtotime($ngaybinhluan)) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="box_search">
                <form action="" method="POST">
                    <input type="hidden" name="idsp" value="<?= $_GET['idsp'] ?>">
                    <input type="hidden" name="iduser"
                        value="<?= isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : '' ?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="submitnoidung" value="Gửi bình luận">
                </form>
            </div>
        </div>
        <?php } else { ?>
        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table>
                    <tr>
                        <th>Nội dung</th>
                        <th>ID người dùng</th>
                        <th>Ngày bình luận</th>
                    </tr>
                    <?php foreach ($binhluan as $value) : ?>
                    <?php extract($value) ?>
                    <tr>
                        <td><?php echo $noidung ?></td>
                        <td><?php echo $iduser ?></td>
                        <td><?php echo date("Y-m-d", strtotime($ngaybinhluan)) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="box_search" style="display: none;">
                <form action="" method="POST">
                    <input type="hidden" name="idsp" value="<?= $_GET['idsp'] ?>">
                    <input type="hidden" name="iduser"
                        value="<?= isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : '' ?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="submitnoidung" value="Gửi bình luận">
                </form>
            </div>
        </div>
        <?php } ?>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <ul
                    style="list-style: none; display: flex;justify-content: center;align-items: flex-start; flex-direction: column;">
                    <?php foreach ($spcl as $value) : ?>
                    <?php extract($value);
                        $img = $img_path . $img; ?>
                    <li style="
                            display: inline-flex;
                            justify-content: center;
                            align-items: center;">
                        <a style="text-decoration: none; color: #000000;"
                            href="index.php?act=sanphamct&idsp=<?= $id ?>&iddm=<?= $iddm ?>">
                            <img style=" width: 100px;" src="<?= $img ?>" alt="">
                        </a>
                        <a style="text-decoration: none; color: #000000;"
                            href="index.php?act=sanphamct&idsp=<?= $id ?>&iddm=<?= $iddm ?>">
                            <?= $name ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>