<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";
session_start();
use app\models\Admin;


$data = new Admin ($pdo);
$tickets = $data->getAllTicket();
$banerTicket = $data->getOneTicket(rand(2, 5));
$addInfo=$data->getAllAddInfo();

include_once $_SERVER['DOCUMENT_ROOT'] . "/index.view.php";