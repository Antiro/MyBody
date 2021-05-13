</head>

<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="/">Главная</a>
    <?php foreach ($nav as $i): ?>
        <a href="<?= $i['href'] ?>"><?= $i['name'] ?></a>
    <?php endforeach; ?>
</div>

<div class="header d-flex justify-content-between flex-md-row align-items-center p-2 px-md-4 mb-3">
    <div class="nav">
        <a href="/" class="navA"><img src="/files/image/muscular-manW.png" class="logo" alt="">MY BODY</a>
    </div>
    <span class="burger" onclick="openNav()">☰</span>
</div>
