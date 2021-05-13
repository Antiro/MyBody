<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$idServices=$_GET['id_services'];

$data = new Admin ($pdo);
$allServices=$data->getAllServices();
$services = $data->getOneService($idServices);
$gyms=$data->getAllGyms();

include_once $_SERVER['DOCUMENT_ROOT'] . "/application_service/applicationService.php";