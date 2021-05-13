<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/db/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/files/app/functions.php';

    $error = loadMultiple($extensions,$uploadPath);
