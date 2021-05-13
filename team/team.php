<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.php"; ?>
    <title>Команда</title>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/nav.php"; ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h5 class="display-4">Команда</h5>
        <br>
        <h4>
            <label for="gym">
                <select name="gym" id="gym" class="sel">
                    <option value="">Выберите адрес зала</option>
                    <?php foreach ($gyms as $k): ?>
                        <option value="<?= $k->id ?>">
                            <?= $k->address ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </label>
        </h4>
    </div>

    <div class="container">
        <div class="cardTeam card-deck mb-3 text-center">
            <img src="/files/image/muscular-manW.png" id="img-filter" alt="">
        </div>
    </div>


    <script src="scriptCoaches.js"></script>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.php"; ?>