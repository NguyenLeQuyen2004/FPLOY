<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc(name) VALUE ('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id =" . $_GET['id'];
    pdo_execute($sql);
}

function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return  $listdanhmuc;
}

function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id=" . $_GET['id'];
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE danhmuc SET name='$tenloai' where id ='$id'";
    pdo_execute($sql);
}
