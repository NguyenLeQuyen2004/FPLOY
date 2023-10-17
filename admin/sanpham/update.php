<?php
if (is_array($sp)) {
    extract($sp);
}

?>
<div class="row2">
    <div class="row2 font_title">
        <h1>SỬA LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
                <input type="text" name="id" value="<?= isset($id) ? $id : '' ?>" placeholder="nhập vào mã loại">
            </div>
            <div class="row2 mb10">
                <label>Tên loại </label> <br>
                <input type="text" name="tenloai" value="<?= isset($name) ? $name : '' ?>" placeholder="nhập vào tên">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="number" name="giasp" value="<?= isset($price) ? $price : '' ?>">
            </div>
            <div class="row mb10">
                Hình Sản Phẩm <br>
                <input type="file" name="hinh">
                <?php if (!empty($img)) : ?>
                    <img style="width: 100px;" src="../upload/<?= $img ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="row mb10">
                Mô tả Sản Phẩm <br>
                <textarea name="mota" cols="30" rows="10"><?= isset($mota) ? $mota : '' ?></textarea>
            </div>
            <div class="row mb10">
                Lượt xem <br>
                <input type="number" min=0 name="luotxem" value="<?= isset($luotxem) ? $luotxem : '' ?>">
            </div>
            <div class="row mb10">
                Loại hàng <br>
                <select name="chonloaihang">
                    <option value="<?= isset($iddm) ? $iddm : '' ?>"><?= isset($iddm) ? $iddm : '' ?></option>
                    <?php foreach ($listdanhmuc as $i) : ?>
                        <option value="<?= $i['id'] ?>"><?= $i['id'] . '-' . $i['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" value="SỬA">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>