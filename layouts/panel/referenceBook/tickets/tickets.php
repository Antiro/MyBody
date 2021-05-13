<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/header.admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$gyms = $dataAdmin->getAllGyms();
$tickets = $dataAdmin->getAllTicket();
$id = 0;

include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/nav.admin.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Абонементы</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="card-body">
            <div id="accordion">
                <div class="card card-success">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            <a class="d-block w-100 text-center" data-toggle="collapse" href="#collapseThree">
                                Добавить новую запись
                            </a>
                        </h4>
                    </div>
                    <form action="/layouts/panel/referenceBook/tickets/add.php" method="get">
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="title">Title
                                            <input type="text" name="title" class="form-control"/></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="pluses">Pluses
                                            <textarea name="pluses" class="form-control"></textarea></label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="price">Price
                                            <input type="number" name="price" class="form-control"/></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description
                                            <textarea name="description" class="form-control"></textarea></label>
                                    </div>
                                </div>
                                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                    <div class="form-group">
                                        <input type='submit' value='Добавить' class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0" style="max-height: 450px;">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Pluses</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Photo</th>
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($tickets as $s): ?>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td class="text-center"><?= $s->id ?></td>
                                    <td class="text-center"><?= $s->title ?></td>
                                    <td class="text-center"><?= $s->price ?></td>
                                    <td class="text-center"><?= $s->pluses ?></td>
                                    <td><?= $s->description ?></td>
                                    <td><?= $s->photo ?></td>
                                    <td class="text-center">
                                        <a href="/layouts/panel/referenceBook/tickets/change/changeView.php?id=<?= $s->id ?>"
                                           class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                        <br><br>
                                        <a href="/layouts/panel/referenceBook/tickets/delete.php?id=<?= $s->id ?>"
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
