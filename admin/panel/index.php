<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/header.admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/files/date.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$gyms = $dataAdmin->getAllGyms();
$Kgym = 0;
$coaches = $dataAdmin->getAllCoaches();
$Kcoaches = 0;

foreach ($gyms as $i) {
    $Kgym += 1;
}
foreach ($coaches as $i) {
    $Kcoaches += 1;
}

include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/nav.admin.php"; ?>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Привет <?= $_SESSION['login'] ?></h1>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <div class="info-box-content">

                            <span class="info-box-text">Кол-во залов :</span>
                            <span class="info-box-number"><?= $Kgym ?></span>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-4">
                        <div class="info-box-content">

                            <span class="info-box-text">Кол-во тренеров :</span>
                            <span class="info-box-number"> <?= $Kcoaches ?></span>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-4">
                        <div class="info-box-content">

                            <span class="info-box-text">Время <?= date("G:i") ?></span>
                            <span class="info-box-text"><?= getDateRus() ?> - <?= getDayRus() ?></span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<? include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/footer.admin.php"; ?>