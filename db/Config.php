<?php
const CONN = [
    "host" => "localhost",
    "dbname" => "andale1241_mb",
    "login" => "andale1241_mb",
    "password" => "FDS1*sGj",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ],
];

$maxFileSize = 5*1024*1024;
$validFileTypes = ['image/jpg','image/jpeg','image/png'];
$uploadPath = $_SERVER['DOCUMENT_ROOT'].'/upload/';
$extensions = ["jpg", "png", "jpeg", "gif"];