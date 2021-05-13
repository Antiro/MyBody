<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin ($pdo);
$services = $data->getAllServices();

include_once $_SERVER['DOCUMENT_ROOT'] . "/services/services.php";