<!-- Title and Top Buttons Start -->

<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <span class="align-middle text-muted d-inline-block lh-1 pb-2 pt-2 text-small">Dashboard</span>
            <?php $nombre = ucfirst(strtolower(session('nombre'))); ?>
            <?php $paterno = ucfirst(strtolower(session('paterno'))); ?>
            <?php $materno = ucfirst(strtolower(session('materno'))); ?>
            <?php $full =  $nombre . ' ' . $paterno . ' ' . $materno; ?>
            <?php $full =  (!is_null($paterno) || !empty($paterno)) ? $nombre . ' ' . $paterno : $nombre . ' ' . $materno; ?>
            <?php
            date_default_timezone_set('America/La_Paz');
            $today = getdate();
            $hora = $today["hours"];
            if ($hora < 6) {
                $saludo =  "Hoy has madrugado mucho...";
            } elseif ($hora < 12) {
                $saludo =  "Buenos días";
            } elseif ($hora <= 18) {
                $saludo =  "Buenas Tardes";
            } else {
                $saludo =  "Buenas Noches";
            }
            ?>
            <h1 class="mb-0 pb-0 display-4" id="title"><?= $saludo; ?>, <?= $full; ?>!</h1>
        </div>
        <!-- Title End -->
    </div>
</div>

<!-- Title and Top Buttons End -->

<div class="row">
    <div class="col-xl-4 mb-5">
        <!-- Acerca de Start -->
        <h2 class="small-title">Acerca de</h2>
        <div class="card h-100-card">
            <div class="card-body">
                <div class="d-flex align-items-center flex-column mb-4">
                    <div class="d-flex align-items-center flex-column">
                        <div class="sw-13 position-relative mb-3">
                            <img src="<?= base_url(); ?>dashboard/img/profile/user1.png" class="img-fluid rounded-xl" alt="thumb" />
                        </div>
                        <?php $nombre = ucfirst(strtolower(session('nombre'))); ?>
                        <?php $paterno = ucfirst(strtolower(session('paterno'))); ?>
                        <?php $materno = ucfirst(strtolower(session('materno'))); ?>
                        <?php $full =  $nombre . ' ' . $paterno . ' ' . $materno; ?>
                        <?php $full =  (!is_null($paterno) || !empty($paterno)) ? $nombre . ' ' . $paterno : $nombre . ' ' . $materno; ?>
                        <div class="h5 mb-0"><?= $full; ?></div>
                        <div class="text-muted"><?= session('cargo'); ?></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2">

                    <div class="text-center">
                        <p class="text-small text-muted mb-1">ESTADO</p>
                        <p class="text-primary">Activo</p>
                    </div>
                    <div class="text-center">
                        <p class="text-small text-muted mb-1">EN LINEA</p>
                        <!-- <p class="text-success">Conectado</p> -->

                        <p class="text-success"><i data-acorn-icon="check" data-acorn-size="18"></i> Conectado</p>

                    </div>
                </div>


                <div class="mb-5">
                    <p class="text-small text-muted mb-2">CONTACT</p>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 me-1">
                                <i data-acorn-icon="phone" class="text-primary" data-acorn-size="17"></i>
                            </div>
                        </div>
                        <div class="col text-alternate">+6443884455</div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 me-1">
                                <i data-acorn-icon="email" class="text-primary" data-acorn-size="17"></i>
                            </div>
                        </div>
                        <div class="col text-alternate">aliciaowens@gmail.com</div>
                    </div>
                    <div class="row g-0 mb-2">
                        <div class="col-auto">
                            <div class="sw-3 me-1">
                                <i data-acorn-icon="pin" class="text-primary" data-acorn-size="17"></i>
                            </div>
                        </div>
                        <div class="col text-alternate">Wellington New Zealand</div>
                    </div>
                </div>



                <div class="mb-5">
                    <p class="text-small text-muted mb-2">ROL</p>
                    <div class="row g-0">
                        <div class="col-auto">
                            <div class="sw-3 me-1">
                                <i data-acorn-icon="warning-hexagon" class="text-primary" data-acorn-size="17"></i>
                            </div>
                        </div>
                        <div class="col text-alternate align-middle">Tecnico</div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Acerca de End -->
    </div>
    <div class="col-xl-8">
        <!-- Estadisticas Start -->
        <h2 class="small-title">Estad&iacute;sticas</h2>
        <div class="row gx-2">
            <div class="col-12 p-0">
                <div class="glide glide-small" id="statsCarousel">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <div class="card mb-5 hover-border-primary">
                                    <span class="position-absolute e-3 t-4 z-index-1">
                                        <i data-acorn-icon="check" class="text-primary" data-acorn-size="14"></i>
                                    </span>
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                            <i data-acorn-icon="blood" class="text-primary"></i>
                                        </div>
                                        <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                            Blood
                                            <br />
                                            Pressure
                                        </div>
                                        <div class="display-6 text-primary">115/74</div>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 hover-border-primary">
                                    <span class="position-absolute e-3 t-4 z-index-1">
                                        <i data-acorn-icon="check" class="text-primary" data-acorn-size="14"></i>
                                    </span>
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                            <i data-acorn-icon="heart" class="text-primary"></i>
                                        </div>
                                        <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                            Heart
                                            <br />
                                            Rate
                                        </div>
                                        <div class="display-6 text-primary">93</div>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 hover-border-primary">
                                    <span class="position-absolute e-3 t-4 z-index-1">
                                        <i data-acorn-icon="chevron-bottom" class="text-primary" data-acorn-size="14"></i>
                                    </span>
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                            <i data-acorn-icon="laboratory" class="text-primary"></i>
                                        </div>
                                        <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                            Glucose
                                            <br />
                                            Level
                                        </div>
                                        <div class="display-6 text-primary">82</div>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 hover-border-primary">
                                    <span class="position-absolute e-3 t-4 z-index-1">
                                        <i data-acorn-icon="chevron-top" class="text-primary" data-acorn-size="14"></i>
                                    </span>
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                            <i data-acorn-icon="weight" class="text-primary"></i>
                                        </div>
                                        <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                            Body Mass
                                            <br />
                                            Index
                                        </div>
                                        <div class="display-6 text-primary">19.4</div>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 hover-border-primary">
                                    <span class="position-absolute e-3 t-4 z-index-1">
                                        <i data-acorn-icon="check" class="text-primary" data-acorn-size="14"></i>
                                    </span>
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                            <i data-acorn-icon="thermometer" class="text-primary"></i>
                                        </div>
                                        <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                            Body
                                            <br />
                                            Temperature
                                        </div>
                                        <div class="display-6 text-primary">37.2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 hover-border-primary">
                                    <span class="position-absolute e-3 t-4 z-index-1">
                                        <i data-acorn-icon="check" class="text-primary" data-acorn-size="14"></i>
                                    </span>
                                    <div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
                                        <div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
                                            <i data-acorn-icon="blood-bag" class="text-primary"></i>
                                        </div>
                                        <div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
                                            Blood
                                            <br />
                                            Count
                                        </div>
                                        <div class="display-6 text-primary">4.2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Estadisticas End -->

        <div class="row">
            <!-- Results Start -->
            <div class="col-xl-12 mb-5">
                <h2 class="small-title">Results</h2>
                <div class="card mb-2 sh-11 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-11 col-md-7 d-flex align-items-center mb-1 mb-md-0 order-1 order-md-1">
                                <a href="Results.Detail.html" class="body-link text-truncate">
                                    <i data-acorn-icon="file-text" class="sw-2 me-2 text-alternate" data-acorn-size="17"></i>
                                    <span class="align-middle">blood-analysis.pdf</span>
                                </a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-center text-muted order-3 order-md-2">12.11.2021</div>
                            <div class="col-1 col-md-2 d-flex align-items-center text-muted text-medium justify-content-end order-2 order-md-3">
                                <button class="btn btn-icon btn-icon-only btn-link btn-sm p-1" type="button">
                                    <i data-acorn-icon="arrow-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-11 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-11 col-md-7 d-flex align-items-center mb-1 mb-md-0 order-1 order-md-1">
                                <a href="Results.Detail.html" class="body-link text-truncate">
                                    <i data-acorn-icon="image" class="sw-2 me-2 text-alternate" data-acorn-size="17"></i>
                                    <span class="align-middle">hearth-imaging.pdf</span>
                                </a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-center text-muted order-3 order-md-2">05.11.2021</div>
                            <div class="col-1 col-md-2 d-flex align-items-center text-muted text-medium justify-content-end order-2 order-md-3">
                                <button class="btn btn-icon btn-icon-only btn-link btn-sm p-1" type="button">
                                    <i data-acorn-icon="arrow-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2 sh-11 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-11 col-md-7 d-flex align-items-center mb-1 mb-md-0 order-1 order-md-1">
                                <a href="Results.Detail.html" class="body-link text-truncate">
                                    <i data-acorn-icon="file-text" class="sw-2 me-2 text-alternate" data-acorn-size="17"></i>
                                    <span class="align-middle">blood-analysis.pdf</span>
                                </a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-center text-muted order-3 order-md-2">02.11.2021</div>
                            <div class="col-1 col-md-2 d-flex align-items-center text-muted text-medium justify-content-end order-2 order-md-3">
                                <button class="btn btn-icon btn-icon-only btn-link btn-sm p-1" type="button">
                                    <i data-acorn-icon="arrow-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card sh-11 sh-md-8">
                    <div class="card-body pt-0 pb-0 h-100">
                        <div class="row g-0 h-100 align-content-center">
                            <div class="col-11 col-md-7 d-flex align-items-center mb-1 mb-md-0 order-1 order-md-1">
                                <a href="Results.Detail.html" class="body-link text-truncate">
                                    <i data-acorn-icon="file-text" class="sw-2 me-2 text-alternate" data-acorn-size="17"></i>
                                    <span class="align-middle">allergy-test.pdf</span>
                                </a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-center text-muted order-3 order-md-2">02.11.2021</div>
                            <div class="col-1 col-md-2 d-flex align-items-center text-muted text-medium justify-content-end order-2 order-md-3">
                                <button class="btn btn-icon btn-icon-only btn-link btn-sm p-1" type="button">
                                    <i data-acorn-icon="arrow-bottom"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>