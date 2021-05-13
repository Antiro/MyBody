<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$data = ['id_post' => $_GET['id_post'], 'name' => $_GET['nameCoaches'], 'photo' => $_GET['photo'], 'id_gym' => $_GET['id_gym'], 'add_info' => $_GET['add_info']];

$dataAdmin->newCoach($data);
header('Location: /layouts/panel/gym/coaches/coaches_gym.php?id='.$_GET['id_gym']);