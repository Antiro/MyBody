<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin ($pdo);
$gyms = $data->getAllGyms();
$coaches = $data->getAllCoaches();

include_once $_SERVER['DOCUMENT_ROOT'] . "/team/team.php";