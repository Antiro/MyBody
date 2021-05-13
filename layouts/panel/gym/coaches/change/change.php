<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;
$dataAdmin = new Admin($pdo);
$gym=$_GET['id_gym'];

header("Location: /layouts/panel/gym/coaches/coaches_gym.php?id=" .$gym);

$data=['id' => $_GET['id'],'id_post' =>  $_GET['id_post'],'name' =>$_GET['name'],'photo' =>$_GET['photo'],'id_gym' => $gym,'add_info' => $_GET['add_info']];
$dataAdmin->updateCoach($data);