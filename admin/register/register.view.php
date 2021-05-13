<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.log-reg.php"; ?>
<title>Login</title>
</head>

<body>
<div class="bg-img">
    <form action="/admin/register/register.php" method="post">
        <div class="container">
            <h1>Войти</h1>
            <label for="login">Логин
                <input type="text" placeholder="Логин" name="login"></label>

            <label for="password">Пароль
                <input type="password" placeholder="Пароль" name="password"></label>

            <button type="submit" name="submit" class="btn">Войти</button>
            <br><br>
            <a href="/">Главная</a>
        </div>
    </form>
</div>
</body>
</html>
