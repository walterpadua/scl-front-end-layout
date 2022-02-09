<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="The login page allows a user to gain access to an application by entering their username and password or by authenticating using a social media login.">
    <title>Credluz | Login</title>
    <link rel="icon" type="image/x-icon" href="./static/images/centercob/cropped-icone-180x180.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/nifty.min.css">
    <link rel="stylesheet" href="./assets/css/demo-purpose/demo-icons.min.css">
    <link rel="stylesheet" href="./assets/css/demo-purpose/demo-settings.min.css">
    <link rel="stylesheet" href="./static/css/scl-frontend-login.min.css">
</head>

<body class="body">

    <div id="root" class="root front-container">
        <section id="content" class="content">
            <div class="content__boxed w-100 min-vh-100 d-flex flex-column align-items-center">
                <div class="content__header">&nbsp;
                </div>
                <div class="content__wrap content__wrap-card">
                    <div class="card card-login">
                        <div class="card-body">
                            <div class="text-center">
                                <h1 class="h3">
                                    <span class="font-size-25 text-cred">Cred</span>
                                    <span class="font-size-25 text-luz">luz</span>
                                </h1>
                                <p>Acesse sua conta credluz</p>
                            </div>
                            <form class="mt-4" action="index.php" method="get">

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="E-mail" autofocus>
                                </div>

                                <div class="mb-3">
                                    <input type="password" name="password" autocomplete="on" class="form-control" placeholder="Senha">
                                </div>

                                <div class="form-check">
                                    <input id="_dm-loginCheck" class="form-check-input" type="checkbox">
                                    <label for="_dm-loginCheck" class="form-check-label">
                                        Lembrar minha senha
                                    </label>
                                </div>

                                <div class="d-grid mt-5">
                                    <button class="btn btn-lg btn-login" type="submit">Entrar</button>
                                </div>
                            </form>

                            <div class="d-flex justify-content-center mt-4">
                                <a href="./front-pages-password-reminder.html" class="btn-link text-decoration-none">Esquecu sua senha ?</a>
                            </div>

                            <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                <h5 class="m-0">Redes</h5>
                                <div class="ms-3">
                                    <a href="#" class="btn btn-sm btn-icon btn-hover text-inherit">
                                        <i class="demo-psi-facebook fs-5 color-blue-facebook"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-hover text-inherit">
                                        <i class="demo-psi-twitter fs-5 color-blue-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-hover text-inherit">
                                        <i class="demo-psi-google-plus fs-5 color-red-google-plus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-hover text-inherit">
                                        <i class="demo-psi-instagram fs-5 color-purple-instagram"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Popper JS [ OPTIONAL ] -->
    <script src="./assets/vendors/popperjs/popper.min.js" defer></script>

    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script src="./assets/vendors/bootstrap/bootstrap.min.js" defer></script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="./assets/js/nifty.js" defer></script>

    <!-- Nifty Settings [ DEMO ] -->
    <script src="./assets/js/demo-purpose-only.js" defer></script>

</body>

</html>