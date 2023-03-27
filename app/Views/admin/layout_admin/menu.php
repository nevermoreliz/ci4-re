<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="Dashboards.Patient.html">
            <!-- Logo can be added directly -->
            <img src="<?= base_url(); ?>dashboard/img/logo/logo-ri-sidebar.png" alt="logo" />


            <!-- Or added via css to provide different ones for different color themes -->
            <!-- <div class="img"></div> -->
        </a>
    </div>
    <!-- Logo End -->

    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="<?= base_url(); ?>dashboard/img/profile/user1.png" />
            <?php $nombre = ucfirst(strtolower(session('nombre'))); ?>
            <?php $paterno = ucfirst(strtolower(session('paterno'))); ?>
            <?php $materno = ucfirst(strtolower(session('materno'))); ?>
            <?php $full =  $nombre . ' ' . $paterno . ' ' . $materno; ?>
            <?php $full =  (!is_null($paterno) || !empty($paterno)) ? $nombre . ' ' . $paterno : $nombre . ' ' . $materno; ?>
            <div class="name"><?= ucfirst($full); ?></div>

        </a>

        <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">CUENTA</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">P&eacute;rfil</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Preferencias</a>
                        </li>
                    </ul>
                </div> -->
            </div>

            <div class="row mb-1 ms-0 me-0">

                <div class="col-12 p-1 mb-1 pt-0">
                    <div class="separator-light"></div>
                </div>

                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Docs</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="<?= base_url(route_to('logout')); ?>">
                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- User Menu End -->

    <!-- Icons Menu Start -->
    <ul class="list-unstyled list-inline text-center menu-icons">
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-acorn-icon="search" data-acorn-size="18"></i>
            </a>
        </li>
        <!-- bloqueo de menu -->
        <!-- <li class="list-inline-item">
            <a href="#" id="pinButton" class="pin-button">
                <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
            </a>
        </li> -->
        <!-- end bloqueo de menu -->
        <li class="list-inline-item">
            <a href="#" id="colorButton">
                <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
            </a>
        </li>
        <!-- notificaciones -->
        <!-- <li class="list-inline-item">
            <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                <div class="position-relative d-inline-flex">
                    <i data-acorn-icon="bell" data-acorn-size="18"></i>
                    <span class="position-absolute notification-dot rounded-xl"></span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                <div class="scroll">
                    <ul class="list-unstyled border-last-none">
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="<?= base_url(); ?>dashboard/img/profile/profile-1.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">Joisse Kaycee just sent a new comment!</a>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="<?= base_url(); ?>dashboard/img/profile/profile-2.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">New order received! It is total $147,20.</a>
                            </div>
                        </li>
                        <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="<?= base_url(); ?>dashboard/img/profile/profile-3.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">3 items just added to wish list by a user!</a>
                            </div>
                        </li>
                        <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                            <img src="<?= base_url(); ?>dashboard/img/profile/profile-6.webp" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                            <div class="align-self-center">
                                <a href="#">Kirby Peters just sent a new message!</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </li> -->
        <!-- end_notificaciones -->
    </ul>
    <!-- Icons Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">

            <li>
                <a href="<?= base_url(route_to('dashboard')); ?>" class="menu--link">
                    <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                    <span class="label">Dashboard</span>
                </a>
            </li>

            <!-- <li>
                <a href="#dashboards" data-href="Dashboards.Patient.html">
                    <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                    <span class="label">Convenios</span>
                </a>
                <ul id="dashboards">
                    <li>
                        <a href="Dashboards.Patient.html">
                            <span class="label">Nacionales</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboards.Doctor.html">
                            <span class="label">Internacionales</span>
                        </a>
                    </li>
                </ul>
            </li> -->

            <li>
                <a href="#convenios" data-href="Dashboards.Patient.html">
                    <i data-acorn-icon="school" class="icon" data-acorn-size="18"></i>
                    <span class="label">Convenios</span>
                </a>
                <ul id="convenios">
                    <li>
                        <a href="Dashboards.Patient.html" class="menu--link">
                            <span class="label">Nacionales</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboards.Doctor.html" class="menu--link">
                            <span class="label">Internacionales</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="<?= base_url(route_to('publications_index')) ;?>" class="menu--link">
                    <i data-acorn-icon="news" class="icon" data-acorn-size="18"></i>
                    <span class="label">Publicaci&oacute;nes</span>
                </a>
            </li>
            <li>
                <a href="Results.html" class="menu--link">
                    <i data-acorn-icon="diagram-3" class="icon" data-acorn-size="18"></i>
                    <span class="label">Enlaces</span>
                </a>
            </li>
            <li>
                <a href="Prescriptions.html" class="menu--link">
                    <i data-acorn-icon="board-3" class="icon" data-acorn-size="18"></i>
                    <span class="label">Galeria</span>
                </a>
            </li>
            <li>
                <a href="Doctors.html" class="menu--link">
                    <i data-acorn-icon="user" class="icon" data-acorn-size="18"></i>
                    <span class="label">Usuarios</span>
                </a>
            </li>

            <li>
                <a href="Settings.html" class="menu--link">
                    <i data-acorn-icon="gear" class="icon" data-acorn-size="18"></i>

                    <span class="label">Configuraci&oacute;n</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-acorn-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->

</div>