<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/header.admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$gyms = $dataAdmin->getAllGyms();
$ApTickets = $dataAdmin->getAllApplicationTickets();

include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/nav.admin.php"; ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Заявки на абонементы</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0" style="max-height: 450px;">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Gym</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">E-mail</th>
                                    <th class="text-center">Service</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($ApTickets as $s): ?>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td class="text-center"><?= $s->id ?></td>
                                        <td class="text-center"><?= $dataAdmin->getOneGym($s->id_gym)->address?></td>
                                        <td class="text-center"><?= $s->name ?></td>
                                        <td class="text-center"><?= $s->email ?></td>
                                        <td class="text-center"><?=$dataAdmin->getOneTicket($s->id_ticket)->title?></td>
                                        <td class="text-center"><?= $s->phone ?></td>
                                        <td class="project-actions text-center">
                                            <a href="/layouts/panel/application/applicationTicket/delete.php?id=<?= $s->id ?>"
                                               class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




<? include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/footer.admin.php"; ?>