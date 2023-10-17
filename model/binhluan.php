<?php
function loadall_binhluan($idsp)
{
    $sql = "select * from binhluan where idpro = $idsp";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function insert_binhluan($idsp, $text)
{
    $iduser = $_SESSION['user']['id'];
    $date = date('Y-m-d');
    $sql = "insert into binhluan (noidung, iduser, idpro, ngaybinhluan) values ('$text','$iduser', '$idsp', '$date')";
    $result = pdo_execute($sql);
    return $result;
}

function load_listbl()
{
    $sql = "select * from binhluan order by idpro desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

function delete_binhluan($id)
{
    $sql = "delete from binhluan where id =" . $_GET['id'];
    pdo_execute($sql);
}

function countbl()
{
    $sql = "select count (*) from binhluan";
    $countbl = pdo_query($sql);
    return $countbl;
}
