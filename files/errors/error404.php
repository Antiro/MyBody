<?php
header('HTTP/1.0 404 Not Found');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Error 404</title>
    <link href="/files/css/404.css" rel="stylesheet">
    <link href="/files/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card-deck mb-5 text-center">
        <div class="card" style="border: 0">
            <div class="card-body">
                <div class="numberError">
                    <h1 class="error" data-text="404">404</h1>
                </div>
                <br><br><br><br>
                <h2 class="notFound">Страница не найдена</h2>
                <a href="/" class="return">Вернуться на главную</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>