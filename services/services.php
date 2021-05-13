<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.php"; ?>
    <title>Услуги</title>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/nav.php"; ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Услуги</h1>
    </div>
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <?php foreach ($services as $key => $k): ?>
                <a href="/services/service/?id=<?= $k->id ?>">
                    <div class="card mb-4 shadow-sm" style="min-width: 200px">
                        <div class="card-header">
                            <h5><?= $k->title ?></h5>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title"><?= $k->price ?> руб</h3>
                            <p class="prem"><?= $k->pluses?></p>
                            <a href="/services/service/?id=<?= $k->id ?>"
                               class="btn btn-block">Подробнее</a>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.php"; ?>