<?php
include $_SERVER['DOCUMENT_ROOT'] . '/quick.start.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/quick.admin.php";

if($_SESSION['user']){
    session_destroy();
    session_unset();
    session_start();
    $_SESSION['user']=false;
}

include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/login/login.view.php";