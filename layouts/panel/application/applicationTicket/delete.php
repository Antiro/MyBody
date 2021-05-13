<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;
$dataAdmin = new Admin($pdo);
$dataAdmin->deleteApplicationTicket($_GET['id']);

header("Location: /layouts/panel/application/applicationTicket/applicationTickets.php");