<?php
    $_SESSION['active'] = 'portfolio';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agência - Tema Start Bootstrap</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />

    <script>
        const changeActiveItem = (itemId, event) => {
            // <?php
            //     $_SESSION['active'] = itemId
            // ?>
            element.classList.add("border-bottom", "border-warning");
        };
    </script>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li id="nav-item-1"><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}"href="/" >Início</a></li>
                    <li id="nav-item-1"><a class="nav-link scrollto {{ Request::is('/portfolio') ? 'active' : '' }}" href="/portfolio" >Portfólio</a></li>
                    <li id="nav-item-2"><a class="nav-link scrollto {{ Request::is('/about') ? 'active' : '' }}" href="/about" >Sobre</a></li>
                    <li id="nav-item-3"><a class="nav-link scrollto {{ Request::is('/contact') ? 'active' : '' }}" href="/contact" >Contato</a></li>
                    <li id="nav-item-4"><a class="nav-link scrollto {{ Request::is('/services') ? 'active' : '' }}" href="/services" >Serviços</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class='mt-5'>
        @yield('content');
    </div>

    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Direitos autorais &copy; Seu Website 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Política de Privacidade</a>
                    <a class="link-dark text-decoration-none" href="#!">Termos de Uso</a>
                </div>
            </div>
        </div>
    </footer>
   
    <script src="assets/js/main.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
</body>
</html>
