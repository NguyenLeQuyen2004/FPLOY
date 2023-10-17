<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row2">
    <div class="row2 font_title">
        <h1>DANH MỤC HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <?php foreach ($selectalldm as $dm) : ?>
            <?php extract($dm);
            $suadm = "index.php?act=suadm&id=" . $id;
            $xoadm = "index.php?act=xoadm&id=" . $id;
            ?>
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <td>
                                <a href="<?= $suadm ?>"><input type="button" value="Sửa"></a>
                                <a href="<?= $xoadm ?>"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        <?php endforeach ?>
        <div class="row mb10 ">
            <!-- <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"> -->
            <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>
</div>
</body>
</html>