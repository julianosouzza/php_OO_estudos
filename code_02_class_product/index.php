<?php

require_once 'Product.php';

$db = new \PDO("mysql:host=localhost;dbname=test_oo","admin","17213103");

$product = new Product($db);
$list = $product->list();


var_dump($list);