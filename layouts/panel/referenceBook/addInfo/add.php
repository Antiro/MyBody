<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;
$dataAdmin = new Admin($pdo);
$dataAdmin->newAddInfo($_GET['title']);

header("Location: /layouts/panel/referenceBook/addInfo/addInfo.php");