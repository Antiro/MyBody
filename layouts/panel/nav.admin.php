<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- блок навигации -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <!-- лево -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <a class="nav-link" href="/admin/panel/">Главная</a>

        <!-- право -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="/admin/">Выйти &#128682;</a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!--шапка навигации-->
        <a href="/" class="brand-link">
            <img src="/files/image/muscular-manW.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">MY BODY</span>
        </a>

        <!--навигация-->
        <div class="sidebar">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                <span class="nav-header">СПРАВОЧНИКИ</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/layouts/panel/referenceBook/tickets/tickets.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Абонименты</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/layouts/panel/referenceBook/services/services.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Услуги</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/layouts/panel/referenceBook/posts/posts.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Должности</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/layouts/panel/referenceBook/inventory/inventory.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Инвентарь</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/layouts/panel/referenceBook/addInfo/addInfo.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Доп инфо</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                <span class="nav-header">ЗАЯВКИ</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="/layouts/panel/application/applicationTicket/applicationTickets.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Абонименты</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/layouts/panel/application/applicationService/applicationServices.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Услуги</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                <span class="nav-header">ЗАЛЫ</span>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php foreach ($gyms as $gym): ?>
                                <li class="nav-item">
                                    <a href="/layouts/panel/gym/admin.gym.php?id=<?= $gym->id ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?= $gym->address ?></p>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>