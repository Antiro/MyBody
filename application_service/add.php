<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin ($pdo);

$dataApplication=['name' => $_GET['name'], 'email' => $_GET['email'], 'id_services' =>$_GET['id_services'], 'phone' => $_GET['phone'],'id_gym'=>$_GET['id_gym']];

$data->newApplicationService($dataApplication);
header('Location: /');