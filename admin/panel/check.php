<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/quick.start.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/quick.admin.php";

if ($_SESSION['user'] == false) {
    header('Location: /admin');
}