<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.php"; ?>
    <title>Заявка на абонемент</title>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/nav.php"; ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Заявка на абонемент</h1>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <form action="/application_ticket/add.php" method="get">
                    <div>
                        <label for="id_ticket" class="w-50">Абонементы<br>
                            <select name="id_ticket" class="form-control">
                                <?php foreach ($allTickets as $k): ?>
                                    <option value="<?= $k->id ?>"
                                            <?php if ($ticket->id == $k->id): ?>selected<?php endif; ?>>
                                        <?= $k->title ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </label>

                        <label for="id_gym" class="w-50">Адрес спортзала<br>
                            <select name="id_gym" class="form-control">
                                <?php foreach ($gyms as $g): ?>
                                    <option value="<?= $g->id ?>">
                                        <?= $g->address ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                    </div>
                    <br>
                    <div>
                        <label for="name" class="w-25" style="min-width: 300px">Имя<input type="text" name="name" class="form-control"/></label>
                        <label for="email" class="w-25" style="min-width: 300px">E-mail<input type="email" name="email" class="form-control"/></label>
                        <label for="phone" class="w-25" style="min-width: 300px">Телефон<input type="text" name="phone" class="form-control"/></label>
                    </div>
                    <br><br>
                    <div>
                        <input type='submit' value='Отправить' class="btn w-50">
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.php"; ?>