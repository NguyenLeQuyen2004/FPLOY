<style>
table {
    text-align: center;
}
</style>

<div class="row2">
    <div class="row2 font_title">
        <h1>BÌNH LUẬN</h1>
    </div>
    <div class="row2 form_content ">
        <?php foreach ($listbl as $bl) : ?>
        <?php extract($bl);
            $xoabl = "index.php?act=xoabl&id=" . $id;
            ?>
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG</th>
                        <th>ID USER</th>
                        <th>IDSP</th>
                        <th>NGÀY BL</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $id ?></td>
                        <td><?= $noidung ?></td>
                        <td><?= $iduser ?></td>
                        <td><?= $idpro ?></td>
                        <td><?= $ngaybinhluan ?></td>
                        <td>
                            <a href="<?= $xoabl ?>"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        <?php endforeach ?>
        <div class="row mb10 ">
            <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        </div>
    </div>
</div>
</div>