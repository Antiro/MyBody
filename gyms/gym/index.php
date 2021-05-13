<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin ($pdo);
$gym = $data->getOneGym($_GET['id']);
$photos=$data->getAllPhotosGym($_GET['id']);

$inventory=$data->getAllInventoryGym($_GET['id']);
$coaches=$data->getAllCoachesGym($_GET['id']);

$g=0;

include_once $_SERVER['DOCUMENT_ROOT'] . "/gyms/gym/gym.php";
