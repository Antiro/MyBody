<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/panel/check.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/panel/header.admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Admin.php";

use app\models\Admin;

$dataAdmin = new Admin($pdo);
$idCh = $_GET['id'];
$gym = $_GET['gym'];
$allInventory = $dataAdmin->getAllInventory();
$inventory = $dataAdmin->getOneInventoryGym($idCh);
?>
<div class="card-success">
    <div class="card-header">
        <h4 class="card-title w-100">
            <a class="d-block text-center">
                Изменить запись
            </a>
        </h4>
    </div>

    <form action="/layouts/panel/gym/inventory/change/change.php" method="get">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div>
                    <div class="card-body text-center d-flex align-items-center justify-content-center">
                        <div class="card-title title">
                            <div class="form-group">
                                <label for="title" style="display: none"><input name="id" value="<?= $inventory->id ?>"
                                                                                style="display: none"/></label>
                                <label for="id_gym" style="display: none"><input name="id_gym" value="<?= $gym ?>"
                                                                                 style="display: none"/></label>
                                <label for="id_post">Inventory<br>
                                    <select name="inventory">
                                        <?php foreach ($allInventory as $k): ?>
                                            <option value="<?= $k->id ?>"
                                                    <?php if ($inventory->id_inventory== $k->id): ?>selected<?php endif; ?>>
                                                <?= $k->title ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </label>
                            </div>
                            <div class="form-group"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <div class="card-body text-center d-flex align-items-center justify-content-center">
                        <div class="card-title title">

                            <div class="form-group">
                                <label for="quantity">Quantity
                                    <input type="text" name="quantity" class="form-control" value="<?=$inventory->quantity?>"/></label>
                            </div>
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
                                    <a href="/layouts/panel/gym/inventory/inventory_gym.php?id=<?= $inventory->id_gym ?>"
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