<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;
$dataAdmin = new Admin($pdo);
$gym=$_GET['id_gym'];

header("Location: /layouts/panel/gym/inventory/inventory_gym.php?id=" .$gym);

$data=['id' => $_GET['id'],'id_gym' => $gym,'quantity' => $_GET['quantity'],'id_inventory'=>$_GET['inventory']];
$dataAdmin->updateInventoryGym($data);