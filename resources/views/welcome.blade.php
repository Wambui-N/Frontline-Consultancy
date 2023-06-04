<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Frontline Consultancy</title>
    <!--icons-->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!--bootstrap-->
    <link href={{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css') }}
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Italiana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <!-- Custom css -->
    <link rel="stylesheet" href="assets/custom.css">


</head>

<body>
    <div class=".container-fluid my-0 mx-0">
        <header id="header" style="background-image: url('{{ url('assets/img/Vector 1.png') }}');"
            class="bg-image-one">
            <nav class="navbar navbar-expand-lg navbar-light py-0">
                <div class="mx-5 container-fluid p-0">
                    <a class="navbar-brand mx-5" href="#">
                        <img class="logo me-5" src="{{ asset('assets/img/LOGO WHITE.png') }}" alt="logo"
                            height="116px" width="auto">
                    </a>

                    <button class="navbar-toggler border-0 bg-transparent" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <img class="bg-transparent" src={{ asset('assets/img/menu.png') }} alt="Toggle Navigation">
                    </button>

                    <div class="collapse navbar-collapse justify-content-between " id="navbarNavAltMarkup">
                        <div class="d-flex flex-row justify-space-between">
                            <div class="m-5 navbar-nav flex-grow-1">
                                <div class="d-inline-flex flex-row justify-content-evenly ">
                                    <a class="nav-link text-nowrap orange fst-normal fw-semibold fs-6"
                                        href="#">Home</a>
                                </div>
                            </div>
                            <div class="m-5 navbar-nav flex-grow-1">
                                <div class="d-inline-flex flex-row justify-content-evenly ">
                                    <a class="nav-link text-nowrap orange fst-normal fw-semibold fs-6"
                                        href="#">Services</a>
                                </div>
                            </div>
                            <div class="m-5 navbar-nav flex-grow-1">
                                <div class="d-inline-flex flex-row justify-content-evenly ">
                                    <a class="nav-link text-nowrap orange fst-normal fw-semibold fs-6"
                                        href="#">Portfolio</a>
                                </div>
                            </div>
                            <div class="m-5 navbar-nav flex-grow-1">
                                <div class="d-inline-flex flex-row justify-content-evenly ">
                                    <a class="nav-link text-nowrap orange fst-normal fw-semibold fs-6"
                                        href="#">Our Team</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav d-flex mx-5">
                            <a class="text-nowrap btn orange_bg rounded-pill white fst-normal fs-6 border-0"
                                href="#">
                                <p class="f w-semibold mx-5 my-0 py-0">Contact Us</p>
                            </a>
                        </div>
                    </div>

                </div>

            </nav>

            <<div class="container mx-5 my-5 p-0">
                <div class="card mx-5 my-2 glass-card rounded-0 w-100 border-0">
                    <div class="card-body">
                        <h5 class="card-title fs-1 fw-semibold white">YOUR RELIABLE PARTNERS IN <br>MANAGEMENT</h5>
                        <p class="card-text white fst-normal fs-5">Frontline is a Kenyan consultancy firm that offers services and
                            training in a wide range of thematic areas on the environment, tourism, and technical writing. <br>
                            Our projects range from ecosystem management and research, project development, management, and business plans to writing and marketing.</p>
                    </div>
                </div>
            </div>
        </header>

        <div>
            <div class="arc"></div>

            <h5 class="card-title fs-1 fw-semibold text-black">YOUR RELIABLE PARTNERS IN <br>MANAGEMENT</h5>
            <p class="card-text text-black fst-normal fs-5">Frontline is a Kenyan consultancy firm that offers services and
                training in a wide range of thematic areas on the environment, tourism, and technical writing. <br>
                Our projects range from ecosystem management and research, project development, management, and business plans to writing and marketing.</p>
        </div>

        <footer></footer>
    </div>

    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("scroll", window.scrollY > 0);


        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
