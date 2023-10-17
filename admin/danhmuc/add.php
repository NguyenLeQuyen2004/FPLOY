
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
        <h2>THÊM MỚI LOẠI DANH MỤC</h2>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Mã Loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên Loại <br>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"> <input type="button" value="DANH SÁCH"></a>
            </div>
            <?= ($thongbao) ?? '' ?>
        </form>
    </div>
</div>
</body>
</html>