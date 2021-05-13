<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin ($pdo);
$service = $data->getOneService($_GET['id']);

include_once $_SERVER['DOCUMENT_ROOT'] . "/services/service/service.php";