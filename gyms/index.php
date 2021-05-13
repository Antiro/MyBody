<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin ($pdo);
$gyms=$data->getAllGyms();
$img=$data;

include_once $_SERVER['DOCUMENT_ROOT'] . "/gyms/gyms.php";