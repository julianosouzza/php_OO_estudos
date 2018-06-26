<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=test_oo";
$container['user'] = "admin";
$container['pass'] = "17213103";