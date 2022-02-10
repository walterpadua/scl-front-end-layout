<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="generator" content="Hugo 0.87.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Nifty is a responsive admin dashboard template based on Bootstrap 5 framework. There are a lot of useful components.">
    <title>Dashboard 1 | Nifty - Admin Template</title>

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="./assets/css/color-schemes/primary-nav/teal/bootstrap.min.css">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet" href="./assets/css/color-schemes/primary-nav/teal/nifty.min.css">

    <!-- Nifty Demo Icons [ OPTIONAL ] -->
    <link rel="stylesheet" href="./assets/css/demo-purpose/demo-icons.min.css">

    <!-- Demo purpose CSS [ DEMO ] -->
    <link rel="stylesheet" href="./assets/css/demo-purpose/demo-settings.min.css">

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~---

    [ REQUIRED ]
    You must include this category in your project.


    [ OPTIONAL ]
    This is an optional plugin. You may choose to include it in your project.


    [ DEMO ]
    Used for demonstration purposes only. This category should NOT be included in your project.


    [ SAMPLE ]
    Here's a sample script that explains how to initialize plugins and/or components: This category should NOT be included in your project.


    Detailed information and more samples can be found in the documentation.

    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->
    <style id="_dm-customLoadScreen">
        ._dm-load-scheme-css>._dm-loading-screen {
            align-items: center;
            background-color: #fff;
            color: #2b2c2d;
            display: flex;
            flex-direction: column;
            inset: 0;
            justify-content: center;
            position: fixed
        }

        ._dm-load-scheme-css>._dm-loading-screen:before {
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-name: _dm-spin;
            animation-timing-function: linear;
            color: #28292b;
            content: "⚆";
            display: block;
            font-family: Arial;
            font-size: 5rem;
            height: 2ex;
            line-height: 1;
            opacity: .1;
            width: 2ex;
            transform-origin: center center
        }

        ._dm-load-scheme-css>._dm-loading-screen:after {
            content: "Please wait while loading . . .";
            font-family: Poppins, "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.5;
            margin-top: 2rem
        }

        ._dm-load-scheme-css>:not(._dm-loading-screen) {
            opacity: 0;
            pointer-events: none;
            visibility: none
        }

        @keyframes _dm-spin {
            from {
                transform: rotate(0)
            }

            to {
                transform: rotate(360deg)
            }
        }
    </style>
</head>

<head>

    <!--<meta name="generator" content="Hugo 0.87.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Nifty is a responsive admin dashboard template based on Bootstrap 5 framework. There are a lot of useful components.">
    <title>Credluz | Bem Vindo</title>
    <link rel="icon" type="image/x-icon" href="./static/images/centercob/cropped-icone-180x180.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/nifty.min.css">
    <link rel="stylesheet" href="./assets/premium/icon-sets/icons/line-icons/premium-line-icons.min.css">
    <link rel="stylesheet" href="./assets/css/demo-purpose/demo-icons.min.css">
    <link rel="stylesheet" href="./assets/css/demo-purpose/demo-settings.min.css">
    -->
    <link rel="stylesheet" href="./static/css/scl-frontend.min.css">
</head>

<body class="jumping">
    <div id="root" class="root mn--max hd--expanded">
        <section id="content" class="content">
            <?php
            $actualLink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            switch (true) {
                case (strpos($actualLink, 'grafico-diario') > 0):
                    require_once('grafico-diario.php');
                    break;
                case (strpos($actualLink, 'feed-notificacao') > 0):
                    require_once('feed-notificacao.php');
                    break;
                default:
                    require_once('feed-notificacao.php');
                    break;
            }
            ?>
            <footer class="content__boxed mt-auto text-center">
                <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                    <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2022 <a href="#" class="ms-1 btn-link fw-bold">Credluz</a></div>
                    <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto" style="row-gap: 0 !important;">
                        <a class="nav-link px-0" href="#">Politica de privacidade</a>
                        <a class="nav-link px-0" href="#">Termos e Condições</a>
                        <a class="nav-link px-0" href="#">Entre em contato</a>
                    </nav>
                </div>
            </footer>
        </section>
        <header class="header">
            <div class="header__inner">
                <div class="header__brand">
                    <div class="brand-wrap">
                        <a href="./index.html" class="brand-img stretched-link">
                            <img src="./static/images/centercob/cropped-icone-180x180.png" alt="Nifty Logo" class="Nifty logo" width="40" height="40">
                        </a>
                        <div class="brand-title">
                            <span class="font-size-25 text-cred">Cred</span>
                            <span class="font-size-25 text-luz">luz</span>
                        </div>
                    </div>
                </div>
                <div class="header__content">
                    <div class="header__content-start">
                        <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                            <i class="demo-psi-view-list"></i>
                        </button>
                        <div class="header-searchbox">
                            <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                                <i class="demo-psi-magnifi-glass"></i>
                            </label>
                            <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                                <input id="header-search-input" class="searchbox__input form-control bg-transparent" type="text" placeholder="Sua busca aqui . . ." aria-label="Search">
                                <div class="searchbox__backdrop">
                                    <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                                        <i class="demo-pli-magnifi-glass"></i>
                                    </button>
                                    <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                                        <i class="demo-pli-magnifi-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="header__content-end">
                        <div class="dropdown">
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Megamenu dropdown" aria-expanded="false">
                                <i class="demo-psi-layout-grid"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end p-3 mega-dropdown">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="pli-building font-size-25"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">Empresa</h5>
                                            </div>
                                            <div class="col-12">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Centercob</option>
                                                    <option>Credluz</option>
                                                    <option>Monedd</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="list-group list-group-borderless mb-3">
                                            <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="pli-clothing-store  font-size-25"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">Loja</h5>
                                            </div>
                                            <div class="col-12">
                                                <select id="inputState" class="form-select">
                                                    <option selected>Matriz Maringá</option>
                                                    <option>Loja Mandaguari</option>
                                                    <option>Loja Sarandi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Notification dropdown" aria-expanded="false">
                                <span class="d-block position-relative">
                                    <i class="demo-psi-bell"></i>
                                    <span class="badge badge-super rounded bg-danger p-1">

                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end w-md-300px">
                                <div class="border-bottom px-3 py-2 mb-3">
                                    <h5>Notificações</h5>
                                </div>
                                <div class="list-group list-group-borderless">
                                    <div class="list-group-item list-group-item-action  mb-3">
                                        <a class="stretched-link text-decoration-none" href="#">
                                            <div class="col-12 d-flex align-items-start">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="img-xs rounded-circle" src="https://layout-scl.com.br/static/images/centercob/logo-centercob.png" alt="Profile Picture" loading="lazy">

                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <span class="h6 d-block mb-0 stretched-link text-decoration-none">Centercob</span>
                                                    <small class="text-muted">5 minutes ago</small>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex align-items-start p-3">
                                                <span class="h6 d-block mb-0 stretched-link text-decoration-none">
                                                    Centercob aprovou a solicitação 123.
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-group-item list-group-item-action  mb-3">
                                        <a class="stretched-link text-decoration-none" href="#">
                                            <div class="col-12 d-flex align-items-start">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="img-xs rounded-circle" src="https://layout-scl.com.br/static/images/centercob/logo-centercob.png" alt="Profile Picture" loading="lazy">

                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <span class="h6 d-block mb-0 stretched-link text-decoration-none">Centercob</span>
                                                    <small class="text-muted">30 minutes ago</small>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex align-items-start p-3">
                                                <span class="h6 d-block mb-0 stretched-link text-decoration-none">
                                                    Centercob reprovou a solicitação 123.
                                                </span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="text-center mb-2">
                                        <a href="#" class="stretched-link text-decoration-none">Visualizar
                                            todas as notificações</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                                <i class="demo-psi-male"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end w-md-450px">
                                <div class="d-flex align-items-center border-bottom px-3 py-2">
                                    <div class="flex-shrink-0">
                                        <img class="img-sm rounded-circle" src="https://layout-scl.com.br/static/images/centercob/logo-centercob.png" alt="Profile Picture" loading="lazy">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">Centercob</h5>
                                        <span class="text-muted fst-italic">centercob@centercob.com.br</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="list-group list-group-borderless h-100 py-3">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i class="demo-pli-male fs-5 me-2"></i> Perfil
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i class="demo-pli-unlock fs-5 me-2"></i> Sair
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <nav id="mainnav-container" class="mainnav">
            <div class="mainnav__inner">
                <div class="mainnav__top-content scrollable-content pb-5">
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Recursos</h6>
                        <ul class="mainnav__menu nav flex-column">
                            <li class="nav-item">
                                <a href="./ui-elements-buttons.html" class="nav-link">
                                    <i class="pli-file-add  fs-5 me-2"></i>
                                    <span>Simular Emprestimo</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./ui-elements-buttons.html" class="nav-link" title="Solicitações em analise">
                                    <i class="pli-file-loading fs-5 me-2"></i>
                                    <span>Solic. em analise</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./ui-elements-buttons.html" class="nav-link" title="Solicitações aprovadas">
                                    <i class="pli-file-bookmark fs-5 me-2"></i>
                                    <span>Solic. aprovadas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./ui-elements-buttons.html" class="nav-link" title="Solicitações reporvadas">
                                    <i class="pli-file-trash fs-5 me-2"></i>
                                    <span>Solic. reporvadas</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Feed</h6>
                        <ul class="mainnav__menu nav flex-column">
                            <li class="nav-item has-sub">
                                <a href="#" class="mininav-toggle nav-link active">
                                    <i class="demo-pli-home fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Meu Feed</span>
                                </a>
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="./index.php?view=feed-notificacao" class="nav-link active">Avisos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./index.php?view=feed-notificacao" class="nav-link">Notificações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./index.php?view=feed-notificacao" class="nav-link">Noticías</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Gráficos</h6>
                        <ul class="mainnav__menu nav flex-column">
                            <li class="nav-item has-sub">
                                <a href="#" class="mininav-toggle nav-link collapsed">
                                    <i class="pli-bar-chart fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Dashboard</span>
                                </a>
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="./index.php?view=grafico-diario" class="nav-link">Solicitações de crédito - Diário</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./dashboard-2.html" class="nav-link">Solicitações de crédito -
                                            Aprovados</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./dashboard-3.html" class="nav-link">Solicitações de crédito -
                                            reprovados</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Relátorios</h6>
                        <ul class="mainnav__menu nav flex-column">
                            <li class="nav-item has-sub">
                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-receipt-4 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Financeiro</span>
                                </a>
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="./tables-static-tables.html" class="nav-link">Comissão por
                                            indicador</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./tables-gridjs.html" class="nav-link">Revisão de repasses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./tables-tabulator.html" class="nav-link">Taxa de Retorno</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item has-sub">
                                <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-receipt-4 fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Solicit. de Credito</span>
                                </a>
                                <ul class="mininav-content nav collapse">
                                    <li class="nav-item">
                                        <a href="./tables-tabulator.html" class="nav-link">Solicit. em analise</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./tables-static-tables.html" class="nav-link">Solicit. aprovadas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./tables-gridjs.html" class="nav-link">Solicit. reprovadas</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mainnav__bottom-content border-top pb-2">
                    <ul id="mainnav" class="mainnav__menu nav flex-column">
                        <li class="nav-item has-sub">
                            <a href="#" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                                <i class="demo-pli-unlock fs-5 me-2"></i>
                                <span class="nav-label ms-1">Sair</span>
                            </a>
                            <ul class="mininav-content nav flex-column collapse">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">This device only</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">All Devices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lock
                                        screen</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>
    <div id="_dm-boxedBgContent" class="_dm-boxbg offcanvas offcanvas-bottom" data-bs-backdrop="false" data-bs-scroll="true" tabindex="-1">
        <div class="offcanvas-body p-4">
            <div class="offcanvas-header border-bottom p-0 pb-3">
                <div>
                    <h4 class="offcanvas-title">Background Images</h4>
                    <span class="text-muted">Add an image to replace the solid background color</span>
                </div>
                <button type="button" class="btn-close btn-lg text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div id="_dm-boxedBgContainer" class="row mt-3">
                <div class="col-lg-4">
                    <h5 class="mb-4">Blurred</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-4">Polygon &amp; Geometric</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="mb-4">Abstract</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="_dm-offcanvas" class="offcanvas" tabindex="-1">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Offcanvas Header</h5>
            <button type="button" class="btn-close btn-lg text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <h5>Content Here</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos nihil earum aliquam quod in dolor,
                aspernatur obcaecati et at. Dicta, ipsum aut, fugit nam dolore porro non est totam sapiente animi
                recusandae obcaecati dolorum, rem ullam cumque. Illum quidem reiciendis autem neque excepturi odit est
                accusantium, facilis provident molestias, dicta obcaecati itaque ducimus fuga iure in distinctio
                voluptate nesciunt dignissimos rem error a. Expedita officiis nam dolore dolores ea. Soluta repellendus
                delectus culpa quo. Ea tenetur impedit error quod exercitationem ut ad provident quisquam omnis! Nostrum
                quasi ex delectus vero, facilis aut recusandae deleniti beatae. Qui velit commodi inventore.</p>
        </div>
    </div>
    <script src="./assets/vendors/popperjs/popper.min.js" defer></script>
    <script src="./assets/vendors/bootstrap/bootstrap.min.js" defer></script>
    <script src="./assets/js/nifty.js" defer></script>
    <script src="./assets/js/demo-purpose-only.js" defer></script>
</body>

</html>