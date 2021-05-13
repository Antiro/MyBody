<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/header.admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$idCh = $_GET['id'];

$addInfo = $dataAdmin->getOneAddInfo($idCh);
?>
<div class="card-success">
    <div class="card-header">
        <h4 class="card-title w-100">
            <a class="d-block text-center">
                Изменить запись
            </a>
        </h4>
    </div>

    <form action="/layouts/panel/referenceBook/addInfo/change/change.php" method="get">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card-body text-center d-flex align-items-center justify-content-center">
                    <div class="card-title title">
                        <div class="form-group">
                            <label for="id" style="display: none"><input name="id" value="<?= $addInfo->id ?>"
                                                                            style="display: none"/></label>
                            <label for="title">Title
                                <textarea name="title"
                                          class="form-control"><?= $addInfo->title ?></textarea></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <div class="card-body text-center d-flex align-items-center justify-content-center">
                        <div class="card-title title">
                            <div class="col-3 text-center d-flex align-items-center justify-content-center">
                                <div class="form-group">
                                    <input type='submit' value='Изменить' class="btn btn-primary">
                                    <br><br>
                                    <a href="/layouts/panel/referenceBook/addInfo/addInfo.php"
                                       class="btn btn-danger w-100">Отмена</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>