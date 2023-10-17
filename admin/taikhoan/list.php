<div class="row2">
    <div class="row2 font_title">
        <h1>QUẢN LÝ KHÁCH HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <?php foreach ($listtk as $tk) : ?>
            <?php extract($tk);
            $xoatk = "index.php?act=xoatk&id=" . $id;
            ?>
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>TÊN</th>
                            <th>MẬT KHẨU</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?= $id ?></td>
                            <td><?= $user ?></td>
                            <td><?= $pass ?></td>
                            <td><?= $email ?></td>
                            <td><?= $address ?></td>
                            <td><?= $tel ?></td>
                            <td>
                                <a href="<?= $xoatk ?>"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        <?php endforeach ?>
        <div class="row mb10 ">
            <!-- <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"> -->
        </div>
    </div>
</div>
</div>