<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;
$dataAdmin = new Admin($pdo);

$data=['title'=>$_GET['title'],'pluses'=>$_GET['pluses'],'price'=>$_GET['price'],'description'=>$_GET['description']];
$dataAdmin->newService($data);

header("Location: /layouts/panel/referenceBook/services/services.php");