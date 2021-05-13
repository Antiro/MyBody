<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;
$dataAdmin = new Admin($pdo);
$dataAdmin->deletePhotoGym($_GET['id']);
$id=$_GET['gym'];

header('Location: /layouts/panel/gym/photo/photo_gym.php?id='.$id);