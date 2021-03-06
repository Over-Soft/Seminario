
<header class="header">
    <nav class="navbar">
        <!-- Search Box-->
        <div class="search-box">
            <button class="dismiss">
                <i class="icon-close">
                </i>
            </button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="¿Que quieres buscar?" class="form-control"/>
            </form>
        </div>
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header">
                    <!-- Navbar Brand -->
                    <a href="index.html" class="navbar-brand">
                        <div class="brand-text brand-big hidden-lg-down">
                            <span>
                                Panel de
                            </span>
                            <strong>
                                Administrador
                            </strong>
                        </div>
                        <div class="brand-text brand-small">
                            <strong>
                                PA
                            </strong>
                        </div>
                    </a>
                    <!-- Toggle Button-->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span>
                        </span>
                        <span>
                        </span>
                        <span>
                        </span>
                    </a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Search-->
                    <li class="nav-item d-flex align-items-center">
                        <a id="search" href="#">
                            <i class="icon-search">
                            </i>
                        </a>
                    </li>
                    <!-- Notifications-->
                    <li class="nav-item dropdown">
                        <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                            <i class="fa fa-bell-o">
                            </i>
                            <span class="badge bg-red" data-toggle="tooltip" data-placement="bottom" title="Recordatorios Pendientes de Estudios">
                                12
                            </span>
                        </a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-envelope bg-green">
                                            </i>
                                            You have 6 new messages
                                        </div>
                                        <div class="notification-time">
                                            <small>
                                                4 minutes ago
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-twitter bg-blue">
                                            </i>
                                            You have 2 followers
                                        </div>
                                        <div class="notification-time">
                                            <small>
                                                4 minutes ago
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-upload bg-orange">
                                            </i>
                                            Server Rebooted
                                        </div>
                                        <div class="notification-time">
                                            <small>
                                                4 minutes ago
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-twitter bg-blue">
                                            </i>
                                            You have 2 followers
                                        </div>
                                        <div class="notification-time">
                                            <small>
                                                10 minutes ago
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                    <strong>
                                        view all notifications
                                    </strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Messages-->
                    <li class="nav-item dropdown">
                        <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                            <i class="fa fa-universal-access" aria-hidden="true"></i>
                            <span id="mensajeTotal" class="badge bg-orange" data-toggle="tooltip" data-placement="bottom" title="Usuarios Conectados.">
                                <!-- se mostara total de mensaje -->
    <?php $a = ChatController::getChatMenssageControllerTu();?>
    <?php foreach ($a as $total): ?>
    <?php endforeach?>
    <?php echo $total; ?>
                            </span>
                        </a>
                        <!-- <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="admin/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"/>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">
                                            Jason Doe
                                        </h3>
                                        <span>
                                            Sent You Message
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="admin/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"/>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">
                                            Frank Williams
                                        </h3>
                                        <span>
                                            Sent You Message
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"/>
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">
                                            Ashley Wood
                                        </h3>
                                        <span>
                                            Sent You Message
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                    <strong>
                                        Read all messages
                                    </strong>
                                </a>
                            </li>
                        </ul> -->
                    <!-- </li> -->
                    <!-- Logout    -->
                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Salir de la Aplicación">
                        <a href="#" class="nav-link logout" data-toggle="modal" data-target="#sesion" >
                            Cerrar Sesión
                            <i class="fa fa-sign-out">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
