<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/header.admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$idGym = $_GET['id'];

$gymt = $dataAdmin->getOneGym($idGym);
$gyms = $dataAdmin->getAllGyms();
$photos = $dataAdmin->getAllPhotosGym($idGym);

include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/nav.admin.php"; ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Фото <?= $gymt->address ?></h1>
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

                        <form action="/layouts/panel/gym/photo/add.php" method="get">
                            <label for="id_gym"><input name="id_gym" id="id_gym" value="<?=$idGym?>" style="display: none"></label>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="photo">Photo
                                                <input type="text" id="photo" name="photo" class="form-control"/></label>
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
                                    <th class="text-center">Photo</th>
                                    <th class="text-center">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($photos as $s): ?>
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td class="text-center"><?= $s->id ?></td>
                                        <td class="text-center"><?= $s->photo ?></td>
                                        <td class="project-actions text-center">
                                            <a href="/layouts/panel/gym/photo/change/changeView.php?id=<?= $s->id ?>&gym=<?= $idGym ?>"
                                               class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>

                                            <a href="/layouts/panel/gym/photo/delete.php?id=<?= $s->id ?>&gym=<?= $idGym ?>"
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