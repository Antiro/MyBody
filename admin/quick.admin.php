<?php
session_start();

use app\models\Auth;

include_once $_SERVER['DOCUMENT_ROOT'] . '/models/Auth.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/Validator.php';

$user = isset($_SESSION['auth']) && $_SESSION['auth'] ? json_decode($_SESSION['user']) : false;
$dataAuth = new Auth($pdo);
