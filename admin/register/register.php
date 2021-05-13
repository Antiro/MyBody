<?php
include $_SERVER['DOCUMENT_ROOT'] . '/quick.start.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/quick.admin.php";
use app\models\Validator;


if (isset($_POST['submit'])){
    unset($_SESSION['errors']['register']);
    $login=Validator::preProcessing($_POST['login']);
    $password=Validator::preProcessing($_POST['password']);

    if(Validator::validLength('login',$login,2)&
        Validator::validLength('password',$password,'password')){
        $id=$dataAuth->register($login,$password);

        $_SESSION['user']=json_encode($dataAuth->find($id),JSON_UNESCAPED_UNICODE);
        $_SESSION['auth']=true;
    header("Location: /admin/");
    die();
    }

}
