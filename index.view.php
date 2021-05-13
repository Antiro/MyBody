<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.php"; ?>
<title>My body</title>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/nav.php"; ?>

<div class="container" id="videoBaner">
    <video autoplay muted loop="loop" id="myVideo" draggable="false">
        <source src="./files/video/videoBaner.mp4" type="video/mp4">
        Ваш браузер не поддерживает HTML5 видео.
        Your browser does not support HTML5 video.
    </video>
    <div class="content">
        <h1><?= $banerTicket->title ?> фитнеса</h1>
        <p><?= $banerTicket->price ?> рублей</p>
        <a class="btn" href="tickets/ticket/?id=<?= $banerTicket->id ?>">Забронировать</a>
        <a class="btn allTickets" href="tickets/">Все абонементы</a>
    </div>
</div>

<div class="container">
    <div class="row block-navCard">
        <?php foreach ($nav as $i): ?>
            <div class="col-sm-6 navCard">
                <a href="<?= $i['href'] ?>">
                    <img src="files/image/<?= $i['img'] ?>" alt="" draggable="false">
                    <span><?= $i['name'] ?></span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="text-center parallax"></div>
<div class="container">
    <div class="card-deck mb-3">
        <div class="text-center">
            <h4>Спортивный клуб «MY BODY» один из крупнейших спортивных клубов города Челябинска.</h4>
            <br>
            <h4>Наши достоинства:</h4>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($addInfo as $i): ?>
            <div class="col">
                <div class="card">
                    <div class="card-body text-center d-flex align-items-center justify-content-center">
                        <h5 class="card-title title">
                            <?= $i->title?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<img id="Gc-1" src="files/image/green-Circle-R.png" draggable="false" alt="">
<img id="Gc-2" src="files/image/green-Circle-L.png" draggable="false" alt="">
<img id="Gc-3" src="files/image/green-Circle-R.png" draggable="false" alt="">

<script src="/files/js/videoBaner.js"></script>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.php"; ?>


