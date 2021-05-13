<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/header.admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$idGym = $_GET['id'];

$gyms = $dataAdmin->getAllGyms();
$gymOne = $dataAdmin->getOneGym($idGym);
$inventory = $dataAdmin->getAllInventoryGym($idGym);
$coaches = $dataAdmin->getAllCoachesGym($idGym);
$photos=$dataAdmin->getAllPhotosGym($idGym);

include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/nav.admin.php"; ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Зал на <?= $gymOne->address ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i> Тренеры
                            </h3>
                        </div>
                        <div class="card-body">

                            <ul>
                                <?php foreach ($coaches as $i): ?>
                                    <li><?= $i->name ?> - <?= $dataAdmin->getOnePost($i->id_post)->title ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="text-center">
                                <a type="button" class="btn btn-primary" href="/layouts/panel/gym/coaches/coaches_gym.php?id=<?= $idGym ?>"><i
                                            class="fas fa-pencil-alt"></i> Изменить</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i> Фото
                            </h3>
                        </div>
                        <div class="card-body">

                            <ul>
                                <?php foreach ($photos as $i): ?>
                                    <li><?= $i->photo?></li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="text-center">
                                <a type="button" class="btn btn-primary" href="/layouts/panel/gym/photo/photo_gym.php?id=<?= $idGym ?>"><i
                                            class="fas fa-pencil-alt"></i> Изменить</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i> Инвенарь
                            </h3>
                        </div>
                        <div class="card-body">
                            <ul>
                                <?php foreach ($inventory as $i): ?>
                                    <li><?= $dataAdmin->getOneInventory($i->id_inventory)->title ?>
                                        - <?= $i->quantity ?> шт.
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="text-center">
                                <a type="button" class="btn btn-primary" href="/layouts/panel/gym/inventory/inventory_gym.php?id=<?= $idGym ?>"><i
                                            class="fas fa-pencil-alt"></i> Изменить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<? include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/footer.admin.php"; ?>