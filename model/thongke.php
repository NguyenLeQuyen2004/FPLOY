<?php
function thongke()
{
    $sql = "select danhmuc.id as iddm, danhmuc.name as tendm,danhmuc.id as soluong, count(sanpham.id) as slsp, min(sanpham.price) as minsp, max(sanpham.price) as maxsp, avg(sanpham.price) as avgsp from sanpham left join danhmuc on danhmuc.id = sanpham.iddm group by danhmuc.id order by danhmuc.id desc";
    $thongke = pdo_query($sql);
    return $thongke;
}
