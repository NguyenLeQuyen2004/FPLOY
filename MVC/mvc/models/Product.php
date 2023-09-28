<?php
require_once "models/db.php";

function getProduct()
{
    $sql = "select * from products";
    return getData($sql);
}

function insertProduct($name, $price)
{
    $conn = getConnect();
    $sql = "insert into products (name, price) values (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $price]);
    return $stmt->rowCount();
}
