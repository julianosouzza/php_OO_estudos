<?php
$db = new \PDO("mysql:host=localhost;dbname=test_oo","admin","17213103");

$query = "select * from products";

$stmt = $db->prepare($query);
$stmt->execute();

$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);


var_dump($list);