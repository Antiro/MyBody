<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin($pdo);

$products = $data->filterCoaches($_GET['id']);
if($products) {
    echo $products;
} else {
    echo null;
}
