<footer class="text-lg-start">
    <div class="container p-4">
        <div class="row">

            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h2>MY BODY</h2>
                <br>
                <p>Спортивный клуб «MY BODY» один из крупнейших спортивных клубов города Челябинска.</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h4 class="text-center">Навигация</h4>
                <div class="col-md-6">
                    <br>
                    <ul class="pages">
                        <?php foreach ($nav as $i): ?>
                        <li><a href="<?= $i['href']?>"><?= $i['name']?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h4 class="text-center">Соц сети</h4>
                <br>
                <ul>
                    <li><a href="https://vk.com" target="_blank">VK</a></li>
                    <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="text-center p-3">
        <p>© 2021 Antero</p>
    </div>
</footer>

</body>
</html>