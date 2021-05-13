<?php
include $_SERVER['DOCUMENT_ROOT'] . '/quick.start.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/quick.admin.php";
use app\models\Validator;


if (isset($_POST['submit'])) {
    $login = Validator::preProcessing($_POST['login']);
    $password = Validator::preProcessing($_POST['password']);

    $user = $dataAuth->auth($login, $password);

    if ($user) {
        $_SESSION['user'] = json_encode($user, JSON_UNESCAPED_UNICODE);
        $_SESSION['login']=$login;
        $_SESSION['errors']['auth'] = "";
        header('Location: /admin/panel');

    } else {
        $_SESSION['errors']['auth'] = "Неправильный логин или пароль";
        $_SESSION['user'] = false;
        header('Location: /admin');
    }
}