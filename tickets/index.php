<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/quick.start.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$data = new Admin ($pdo);
$tickets = $data->getAllTicket();

include_once $_SERVER['DOCUMENT_ROOT'] . "/tickets/tickets.php";