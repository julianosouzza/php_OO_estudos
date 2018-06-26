<?php

require_once 'ICon.php';
require_once 'Conn.php';
require_once 'Product.php';

$db = new Conn('mysql:host=localhost;dbname=test_oo', 'admin', '17213013');

$product = new Product($db);
$list = $product->list();


var_dump($list);