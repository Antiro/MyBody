<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/header.admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$gyms = $dataAdmin->getAllGyms();
$posts = $dataAdmin->getAllPosts();

include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/nav.admin.php"; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Должности</h1>
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
                    <form action="/layouts/panel/referenceBook/posts/add.php" method="get">
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="title">Title
                                            <input type="text" name="title" class="form-control"/></label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <br>
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
                                <th class="text-center"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($posts as $s): ?>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td class="text-center"><?= $s->id ?></td>
                                    <td class="text-center"><?= $s->title ?></td>
                                    <td class="project-actions text-center">
                                        <a href="/layouts/panel/referenceBook/posts/change/changeView.php?id=<?= $s->id ?>"
                                           class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>

                                        <a href="/layouts/panel/referenceBook/posts/delete.php?id=<?= $s->id ?>"
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
