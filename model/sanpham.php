<?php
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($keyw != "") {
        $sql .= " and name like '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}

function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where id <> $id and iddm = $iddm";
    $result = pdo_query($sql);
    return $result;
}

function insert_sanpham($name, $price, $img, $mota, $luotxem, $iddm)
{
    $sql = "INSERT INTO sanpham VALUE ('','$name','$price','$img','$mota','$luotxem','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "delete from sanpham where id =" . $_GET['id'];
    pdo_execute($sql);
}

function update_sanpham($id, $tenloai, $price, $img, $mota, $luotxem, $iddm)
{
    if (!empty($img)) {
        $sql = "UPDATE sanpham SET name='$tenloai', price='$price', img='$img', mota='$mota', luotxem='$luotxem', iddm='$iddm' where id ='$id'";
    } else {
        $sql = "UPDATE sanpham SET name='$tenloai', price='$price', mota='$mota', luotxem='$luotxem', iddm='$iddm' where id ='$id'";
    }
    pdo_execute($sql);
}
