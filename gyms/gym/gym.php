<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.php"; ?>
<title><?= $gym->address ?></title>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/nav.php"; ?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"><?= $gym->title ?></h1>
</div>
<div class="container">
    <div class="card-deck mb-3 text-center">

        <div class="card mb-4 card-slider" style="min-width: 300px">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <?php foreach ($photos as $i): ?>
                        <div class="carousel-item <?php if ($g == 0) {
                            echo("active");
                            $g += 1;
                        } ?>">
                            <img class="d-block w-100" src="/files/image/<?= $i->photo ?>" alt="" draggable="false">
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Назад</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Вперед</span>
                </a>
            </div>
            <br>
            <div class="card text-center">
                <h4>Инвентарь зала</h4>
                <br>
                <?php foreach ($inventory as $i): ?>
                    <p><?= $data->getOneInventory($i->id_inventory)->title ?> - <?= $i->quantity ?> шт.</p>
                <?php endforeach; ?>

            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h3><?= $gym->address ?></h3>
                <p><?= $gym->add_info ?></p>
                <p>Телефон : <?= $gym->phone ?></p>
            </div>
            <hr>
            <div class="card-body">
                <h3>Тренеры</h3>
                <br>
                <?php foreach ($coaches as $i): ?>
                    <p><?= $i->name ?> - <?= $data->getOnePost($i->id_post)->title; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script src="/files/js/jquery.min.js"></script>
<script src="/files/js/bootstrap.bundle.min.js"></script>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.php"; ?>
