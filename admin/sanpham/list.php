<div class="row2">
    <div class="row2 font_title">
        <h1>QUẢN LÝ HÀNG HÓA</h1>
    </div>
    <div class="search">
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw" placeholder="Nhập từ khoá cần tìm">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php foreach ($selectalldm as $dm) : ?>
                <?php extract($dm) ?>
                <option value="<?= $id ?>"><?= $id . ' - ' . $name ?></option>
                <?php endforeach ?>
            </select>
            <button type="submit">Tìm kiếm</button>
        </form>
    </div>
    <div class="row2 form_content ">
        <?php foreach ($allsp as $sp) : ?>
        <?php extract($sp);
            $suasp = "index.php?act=suasp&id=" . $id;
            $xoasp = "index.php?act=xoasp&id=" . $id;
            ?>
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ SẢN PHẨM</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th>MÔ TẢ SẢN PHẨM</th>
                        <th>LƯỢT XEM SẢN PHẨM</th>
                        <th>LOẠI SẢN PHẨM</th>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox" name="" id=""></td> -->
                        <td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td><?= $price ?></td>
                        <td><img style="width: 200px; object-fit: cover;" src="../upload/<?= $img ?>" alt=""></td>
                        <td><?= $mota ?></td>
                        <td><?= $luotxem ?></td>
                        <td><?= $iddm ?></td>
                        <td><a href="<?= $suasp ?>"><input type="button" value="Sửa"></a>
                            <a href="<?= $xoasp ?>"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        <?php endforeach ?>
        <?= isset($thongbao) ? $thongbao : '' ?>
        <div class="row mb10 ">
            <!-- <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"> -->
            <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>
</div>