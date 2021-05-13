<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.php"; ?>
    <title>Команда</title>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/nav.php"; ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Залы</h1>
    </div>
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <?php foreach ($gyms as $i): ?>
                    <div class="card mb-4 shadow-sm" style="min-width: 320px; padding: 1%">
                        <div class="row g-0">
                            <div class="card-header">
                                <img class="pic" src="/files/image/<?= $data->getOnePhotoGym($i->id)->photo ?>" draggable="false" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?= $i->address ?></h5>
                                    <br>
                                    <p class="card-text">Телефон : <?= $i->phone ?></p>
                                    <a href="/gyms/gym/index.php?id=<?= $i->id ?>"
                                       class="btn btn-block">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.php"; ?>