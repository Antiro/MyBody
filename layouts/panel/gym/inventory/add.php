<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$data = ['id_gym' => $_GET['id_gym'], 'id_inventory' => $_GET['id_inventory'], 'quantity' => $_GET['quantity']];

$dataAdmin->newInventoryGym($data);

header('Location: /layouts/panel/gym/inventory/inventory_gym.php?id='.$_GET['id_gym']);