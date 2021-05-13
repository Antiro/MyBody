<?php
use app\db\Connect;

include $_SERVER['DOCUMENT_ROOT'] . "/db/Config.php";
include $_SERVER['DOCUMENT_ROOT'] . "/db/Connect.php";

$dataFile = include $_SERVER['DOCUMENT_ROOT'] . "/files/data.php";
$nav = $dataFile['nav'];

$pdo = Connect::make(CONN);
