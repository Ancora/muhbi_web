<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="{{ csrf_token() }}" />
        <meta name="author" content="" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap core CSS -->
        <link href="dist/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Custom fonts for this template -->
        <link href="dist/fontawesome-free/css/all.min.css" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css?family=Varela+Round"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />

        <!-- Custom styles for this template -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/app.css" />
    </head>

    <body id="page-top">
        <!-- Navigation -->
        <nav
            class="navbar navbar-expand-lg navbar-light fixed-top"
            id="mainNav"
        >
        {{-- {{ config('app.name', 'Laravel') }} --}}
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"
                    ><img src="/img/logoMuhbiColor80x96.png" class="img-fluid"
                        width=100% height=auto></a
                >
                <button
                    class="navbar-toggler navbar-toggler-right"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about"
                                >Sobre</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="#projects"
                                >Serviços</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#signup"
                                >Fale Conosco</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#"
                                >Login</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Muhbi.com</h1>
                    <h2 class="text-dark-50 mx-auto mt-2 mb-5">
                        Encontre tudo sobre o mercado <strong><cite>Pet</cite></strong>:
                        Veterinários, Clínicas, Hospitais, Adestradores,
                        PetShops etc.
                    </h2>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="about-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-dark mb-4">Quem Somos</h2>
                        <p class="text-dark-100">
                            Somos uma plataforma ponto de referência onde você
                            encontra tudo sobre o mercado Pet: Médicos
                            veterinários, cínicas, hospitais, casas pets,
                            adestrador, cuidador, dog muhbi, dog walker, dog
                            tinder, cruzador, implante de chip, banho, tosa,
                            agendamento de consulta, pagamento on line, eventos
                            pets, logistica e administrativa financeira,
                            relatórios...
                        </p>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-dark mb-4">Como funciona?</h2>
                        <span class="text-dark-100">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam vitae erat eu lacus semper mollis. Sed
                            vehicula posuere ipsum in dignissim. Nam tristique
                            ultricies ante ut imperdiet. Integer id mauris vel
                            odio sollicitudin consequat. Donec scelerisque non
                            ipsum ac tincidunt. Praesent tincidunt eleifend
                            ipsum ut luctus. Mauris porta iaculis magna, aliquet
                            venenatis justo auctor at. Nunc eget lectus nibh.
                        </span>

                        <span class="text-dark-100">
                            Nulla interdum, nisl vel efficitur molestie, quam ex
                            molestie mauris, non volutpat nulla nisi non lacus.
                            Duis ac varius mi, in placerat ipsum. Nulla dictum
                            interdum ligula, sit amet sollicitudin lectus
                            ullamcorper sit amet. Curabitur sodales vestibulum
                            nulla. Donec sit amet erat vel nisl imperdiet
                            vehicula et id diam. Vestibulum fringilla augue
                            eleifend, blandit dolor vel, malesuada mauris. Donec
                            accumsan lorem quis pretium tristique.
                        </span>
                        <span class="text-dark-100">
                            Nulla facilisi. Proin iaculis augue nisi, maximus
                            sagittis risus malesuada ut. Donec tristique, arcu
                            at egestas convallis, ipsum tortor varius tortor,
                            vel pellentesque dolor tellus sit amet enim. Donec
                            semper sapien vel malesuada aliquam. Vestibulum
                            rutrum auctor faucibus. Aenean fringilla felis at
                            velit pretium laoreet. Nulla efficitur tempor leo in
                            posuere. Aliquam aliquam, risus nec tincidunt
                            iaculis, purus augue scelerisque mi, ut accumsan
                            elit urna nec purus. Curabitur condimentum tortor
                            sit amet eros posuere hendrerit. Aliquam et libero
                            varius, auctor lorem commodo, fermentum justo. Sed
                            vestibulum velit metus, at eleifend nibh maximus ut.
                            Fusce risus risus, pulvinar semper tempor vitae,
                            dictum sit amet justo. Vivamus vel lacus blandit,
                            pharetra ipsum a, dictum neque. Sed vestibulum,
                            augue id elementum maximus, tellus est volutpat leo,
                            eu pellentesque mauris turpis vel libero.
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="projects-section bg-light">
            <div class="container">
                <!-- Featured Project Row -->
                <div
                    class="row align-items-center no-gutters mb-4 mb-lg-5 bg-gradiente"
                >
                    <div class="col-xl-8 col-lg-7">
                        <img
                            class="img-fluid mb-3 mb-lg-0"
                            src="img/online.jpg"
                            alt=""
                        />
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div
                            class="text-white featured-text text-center text-lg-left"
                        >
                            <h4>O que você procura</h4>
                            <p class="text-light mb-0">
                                Oferemos vários serviços/profissionais para seu
                                <strong>Pet</strong>; navegue pelos quadros
                                abaixo e encontre o que precisa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Project One Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                        <img
                            class="img-fluid"
                            src="img/vet.jpg"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-gradiente text-center h-100 project">
                            <div class="d-flex h-100">
                                <div
                                    class="project-text w-100 my-auto text-center text-lg-right"
                                >
                                    <h4 class="text-white">Veterinários</h4>
                                    <p class="mb-0 text-white-50">
                                        Nulla interdum, nisl vel efficitur
                                        molestie, quam ex molestie mauris, non
                                        volutpat nulla nisi non lacus. Duis ac
                                        varius mi, in placerat ipsum.
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row -->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
                        <img
                            class="img-fluid"
                            src="img/clihosp.jpg"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-gradiente text-center h-100 project">
                            <div class="d-flex h-100">
                                <div
                                    class="project-text w-100 my-auto text-center text-lg-left"
                                >
                                    <h4 class="text-white">
                                        Clínicas/Hospitais
                                    </h4>
                                    <p class="mb-0 text-white-50">
                                        Nulla interdum, nisl vel efficitur
                                        molestie, quam ex molestie mauris, non
                                        volutpat nulla nisi non lacus. Duis ac
                                        varius mi, in placerat ipsum.
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Tree Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                        <img
                            class="img-fluid"
                            src="img/adestrador.jpg"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-gradiente text-center h-100 project">
                            <div class="d-flex h-100">
                                <div
                                    class="project-text w-100 my-auto text-center text-lg-right"
                                >
                                    <h4 class="text-white">Adestradores</h4>
                                    <p class="mb-0 text-white-50">
                                        Nulla interdum, nisl vel efficitur
                                        molestie, quam ex molestie mauris, non
                                        volutpat nulla nisi non lacus. Duis ac
                                        varius mi, in placerat ipsum.
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Four Row -->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
                        <img
                            class="img-fluid"
                            src="img/petshop.jpg"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-gradiente text-center h-100 project">
                            <div class="d-flex h-100">
                                <div
                                    class="project-text w-100 my-auto text-center text-lg-left"
                                >
                                    <h4 class="text-white">
                                        Pet Shops
                                    </h4>
                                    <p class="mb-0 text-white-50">
                                        Nulla interdum, nisl vel efficitur
                                        molestie, quam ex molestie mauris, non
                                        volutpat nulla nisi non lacus. Duis ac
                                        varius mi, in placerat ipsum.
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Signup Section -->
        <section id="signup" class="signup-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-dark"></i>
                        <h2 class="text-dark mb-5">
                            Inscreva-se para receber atualizações!
                        </h2>

                        <form class="form-inline d-flex">
                            <input
                                type="email"
                                class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0"
                                id="inputEmail"
                                placeholder="Informe seu endereço de e-mail..."
                            />
                            <button type="submit" class="btn btn-info mx-auto">
                                Inscrever-se
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div
                            class="card h-60 bg-gradiente"
                            style="padding: 0; border: 0;"
                        >
                            <div class="card-header text-center text-light">
                                <div class="row">
                                    <div class="w-50">
                                        <i
                                            class="fas fa-map-marked-alt text-light mb-2"
                                        ></i>
                                    </div>
                                    <div class="w-50">
                                        <h4 class="text-uppercase m-0"
                                            style="padding-top: 0.5rem;">
                                            Endereço
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center text-light">
                                <div class="small">
                                    <p>Rua Muhbi, 123 - Muhbairro, Maceió/AL</p>
                                    CEP 57.123-123
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div
                            class="card h-100 bg-gradiente"
                            style="padding: 0; border: 0;"
                        >
                            <div class="card-header text-center text-light">
                                <div class="row">
                                    <div class="w-50">
                                        <i
                                            class="fas fa-envelope text-light mb-2"
                                        ></i>
                                    </div>
                                    <div class="w-50">
                                        <h4 class="text-uppercase m-0"
                                            style="padding-top: 0.5rem;">
                                            E-mail
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center text-light">
                                <div class="small">
                                    <a href="#" class="text-light"
                                        ><p>contato@muhbi.com</p></a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div
                            class="card h-100 bg-gradiente"
                            style="padding: 0; border: 0;"
                        >
                            <div class="card-header text-center text-light">
                                <div class="row">
                                    <div class="w-50">
                                        <i
                                            class="fas fa-mobile-alt text-light mb-2"
                                        ></i>
                                    </div>
                                    <div class="w-50">
                                        <h4 class="text-uppercase m-0"
                                            style="padding-top: 0.5rem;">
                                            Telefone
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center text-light">
                                <div class="small">
                                    <p>+55 (82) 91234.5678</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="small text-center">
            <div class="container">
                <div class="row col-md-12">
                    <div class="col-md-4 social d-flex justify-content-center">
                        <div class="btn-group mr-2">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div class="btn-group mr-2">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="btn-group mr-2">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <img
                            class="img-fluid"
                            src="img/logoMuhbiTransparent.png"
                            width="80"
                            height="40"
                        />
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <span style="color: #f57c27;">Copyright &copy; - 2020 Muhbi.com</span>
                        <p>Todos os direitos reservados</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="dist/jquery/jquery.min.js"></script>
        <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="dist/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="dist/js/bootstrap.min.js"></script>
    </body>
</html>
