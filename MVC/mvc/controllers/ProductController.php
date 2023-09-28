<?php
require_once "models/Product.php";
function listProduct()
{
    $products = getProduct();
    include_once "views/product/list.php";
}

function addProduct()
{
    require_once "views/product/add.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];

        $products = insertProduct($name, $price);
    }
}

function editProduct()
{
    echo "Đây là trang sửa product";
}
function deleteProduct()
{
    echo "Đây là chức năng xóa product";
}
