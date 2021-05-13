<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.php";?>
<title><?=$service->title?></title>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/nav.php"; ?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"><?= $service->title?></h1>
</div>
<div class="container">
    <div class="card-deck mb-3 text-center">

        <div class="card mb-4" style="min-width: 320px">
            <div class="card-body">
                <img src="/files/image/services/<?=$service->photo?>" alt="" style="width: 90%;" draggable="false">
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <p><?= $service->description?></p>
                <br>
                <h3 class="card-title pricing-card-title">Цена: <?=$service->price?> руб</h3>
                <br><br>
                <a class="btn btn-block" href="/application_service/?id_services=<?=$service->id?>">Забронировать</a><br>
            </div>
        </div>
    </div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.php"; ?>
