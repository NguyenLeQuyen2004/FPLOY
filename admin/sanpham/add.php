<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* .row{
            border: 1px solid green;

        } */
        h2{
            text-align: center;

        }
    </style>
</head>
<body>
<div class="row">
    <div class="row frmtitle">
        <h2>THÊM MỚI SẢN PHẨM</h2>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="name">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="number" name="giasp">
            </div>
            <div class="row mb10">
                Hình Sản Phẩm <br>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả Sản Phẩm <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                Lượt xem <br>
                <input type="number" min=0 name="luotxem">
            </div>
            <div class="row mb10">
                Loại hàng <br>
                <select name="chonloaihang" id="">
                    <option hidden selected disabled>Chọn</option>
                    <?php foreach ($listdanhmuc as $i) : ?>
                        <option value="<?= $i['id'] ?>"><?= $i['id'] . '-' . $i['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THEM MOI">
                <input type="reset" value="NHAP LAI">
                <a href="index.php?act=listsp"> <input type="button" value="DANH SACH"></a>
            </div>
            <?= isset($thongbao) ? $thongbao : '' ?>
        </form>
    </div>
</div>
</body>
</html>
