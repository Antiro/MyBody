<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$data = ['photo' => $_GET['photo'], 'id_gym' => $_GET['id_gym']];

$dataAdmin->newPhotoGym($data);
header('Location: /layouts/panel/gym/photo/photo_gym.php?id='.$_GET['id_gym']);