<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$idTicket=$_GET['id_ticket'];

$data = new Admin ($pdo);
$allTickets=$data->getAllTicket();
$ticket = $data->getOneTicket($idTicket);
$gyms=$data->getAllGyms();

include_once $_SERVER['DOCUMENT_ROOT'] . "/application_ticket/applicationTicket.php";