<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;
$dataAdmin = new Admin($pdo);

$data=['id' => $_GET['id'],'title' =>  $_GET['title']];
$dataAdmin->updateAddInfo($data);

header("Location: /layouts/panel/referenceBook/addInfo/addInfo.php");
