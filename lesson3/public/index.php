<?php

use app\models\{Basket, Product, User};
use app\engine\Db;

include $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";
include $_SERVER['DOCUMENT_ROOT'] . "/../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);



$product = new Product("Пицца","Описание", 125);
$product->insert();
$product->delete();

$user = new User("Петя",123);
$user->insert();
$user->pass = 456;
$user->update();
//$user->delete();

