<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin ($pdo);
$ticket = $data->getOneTicket($_GET['id']);

include_once $_SERVER['DOCUMENT_ROOT'] . "/tickets/ticket/ticket.php";