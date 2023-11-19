<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="website icon" type="png" href="{{asset('assets_front/images/icon.png')}}">
    <link rel="stylesheet" href="{{asset('assets_front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets_front/css/about.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@200&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://kit.fontawesome.com/cbcafb1e3c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header-image ">
        <!--navbar-->
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light main-nav">
                <div class="container">
                    <a class="navbar-brand logo" href="index.html">
                        <img src="{{asset('assets_front/images/logo.png')}}" style="width: 40%; height: 100%;" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link active rounded-1" aria-current="page" href="index.html">
                                    <span>HOME</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active rounded-1" aria-current="page" href="about.html">
                                    <span style="color: #eb242c;">ABOUT US</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="products.html">
                                    <span class="">PRODUCTS</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="projects.html">
                                    <span class="">PROJECTS</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="blog.html">
                                    <span class="">BLOG</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="contact.html">
                                    <span class="">CONTACT US</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--end navbar-->


        <div class="d-flex justify-content-between header-content">
            <div>
                <h1>About Us</h1>
            </div>
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #eb242c;">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <img src="{{asset('assets_front/images/sub-banner.jpg')}}" class="mob" style="width: 100%; height: 100%;">
            </div>
        </div>
    </header>


    <!---->
    <section class="who-we mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 my-auto mx-auto">
                    <h1>
                        Grand Gate Built to last , <br>
                        built to impress.
                    </h1>
                    <div class="line"></div>
                    <h2>
                        Grand Gate, a renowned manufacturer of electronic gates and access control solutions, was
                        approached by a new client with a unique request: a custom-designed gate system for their new
                        building.
                    </h2>
                    <p>
                        Grand Gate's team of engineers and designers quickly got to work, creating a proposal that
                        exceeded the client's expectations in every way. The new gate system was both highly secure and
                        aesthetically pleasing, and it was built with the latest technologies and materials.
                        <br>
                        Grand Gate was proud to have played a role in this project, and their custom-designed gate
                        system was a testament to their commitment to innovation and customer satisfaction.
                    </p>
                </div>
                <div class="col-xl-5 col-lg-5 my-auto mx-auto">
                    <img src="{{asset('assets_front/images/banner-2.jpg')}}" style="width: 100%;">
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!---->
    <section class="num-sec mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div style="width: 80px;" class="mx-auto">
                        <img src="{{asset('assets_front/images/icon-1.png')}}" style="width: 100%; height: 100%;">
                    </div>
                    <h4>
                        425+
                    </h4>
                    <div class="d-flex justify-content-center">
                        <div class="me-2">
                            <div class="line"></div>
                        </div>
                        <div>
                            <p>
                                Projects
                            </p>
                        </div>
                        <div class="ms-2">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div style="width: 80px;" class="mx-auto">
                        <img src="{{asset('assets_front/images/icon-3.png')}}" style="width: 100%; height: 100%;">
                    </div>
                    <h4>
                        1000+
                    </h4>
                    <div class="d-flex justify-content-center">
                        <div class="me-2">
                            <div class="line"></div>
                        </div>
                        <div>
                            <p>
                                Clients
                            </p>
                        </div>
                        <div class="ms-2">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div style="width: 80px;" class="mx-auto">
                        <img src="{{asset('assets_front/images/icon-2.png')}}" style="width: 100%; height: 100%;">
                    </div>
                    <h4>
                        195+
                    </h4>
                    <div class="d-flex justify-content-center">
                        <div class="me-2">
                            <div class="line"></div>
                        </div>
                        <div>
                            <p>
                                workers
                            </p>
                        </div>
                        <div class="ms-2">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <section class="client-logo mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <h2>Trusted by businesses and homeowners</h2>
                <div class="line"></div>
                <p>We are proud to be the trusted partner of businesses and homeowners alike</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos-1.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos-2.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos3.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos4.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos5.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos6.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos7.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos8.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos9.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos10.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos11.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos12.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos13.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos14.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div>
                                    <div class="mx-auto image-client">
                                        <img src="{{asset('assets_front/images/clients/clients-logos15.png')}}" style="width: 100%;"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"
                        style="background-color: rgba(200, 84, 92,.6)!important; margin-right: 30px;  padding: 20px; border-radius: 50%;"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"
                        style="background-color: rgba(200, 84, 92,.6)!important; margin-left: 30px;  padding: 20px; border-radius: 50%;"
                        aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!---->
    <section class="contact-us mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 my-auto">
                    <h2 class="text-end">We're always <br> looking for ways to <br> improve</h2>
                    <div class="d-flex justify-content-end">
                        <div class="line"></div>
                    </div>
                    <p class="text-end">
                        Send us an email if you have any Questions , <br> thoughts and suggestions
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 my-auto">
                    <form>
                        <div class="mb-3">
                            <div class="d-flex justify-content-center">
                                <div class="me-3" style="width: 50%;">
                                    <input type="text" class="form-control rounded-0 p-3" placeholder="Your Name">
                                </div>
                                <div style="width: 50%;">
                                    <input type="email" class="form-control rounded-0 p-3" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-0 p-3" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-0 p-5" placeholder="Message">
                        </div>
                        <button type="submit" class="btn p-xl-3 p-lg-3 p-md-3 button rounded-0">Send Mssage</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!---->


    <!--start footer-->
    <footer>
        <div class="container main-footer">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3">
                    <h6 class="mb-3">GRAND GATE</h6>
                    <ul>
                        <li>
                            <div class="d-flex justify-content-start mb-3">
                                <a href="https://www.facebook.com/profile.php?id=100063859848274&mibextid=PzaGJu">
                                    <div class="p-2 icon me-3">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </div>
                                </a>
                                <a href="tel:+201111222011">
                                    <div class="p-2 icon me-3">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </a>
                                <a
                                    href="https://api.whatsapp.com/send/?phone=%2B201111222011&text&type=phone_number&app_absent=0">
                                    <div class="p-2 icon">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <p class="text-white">
                                Bring to the table win-win survival strategies to ensure proactive.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 icons-footer">
                    <h6 class="mb-3">WHO WE ARE</h6>
                    <ul>
                        <li>
                            <a href="all-services.html">Home</a>
                        </li>
                        <li>
                            <a href="air-cargo.html">About us</a>
                        </li>
                        <li>
                            <a href="air-charter.html">Products</a>
                        </li>
                        <li>
                            <a href="air-freight.html">Projects</a>
                        </li>
                        <li>
                            <a href="expedited-trucking.html">Blog</a>
                        </li>
                        <li>
                            <a href="hot-shot-trucking.html">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <h6 class="mb-3">CONTACT US</h6>
                    <ul>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i
                                        class="fa-solid fa-location-dot"></i></span>
                                Al-Fardous Investment City, first on Al-Wahat Road, in front of Dreamland
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i class="fa-solid fa-phone"></i></span>
                                01111222011
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i class="fa-solid fa-phone"></i></span>
                                01033326433
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="me-1" style="color: #c8545c;"><i
                                        class="fa-solid fa-building-user"></i></span>
                                0238875358
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 images-footer">
                    <h6 class="mb-3">PROJECTS</h6>
                    <div class="d-flex justify-content-center mb-3">
                        <div class="square-footer ms-2">
                            <a href="projects.html">
                                <img src="{{asset('assets_front/images/1.jpg')}}" style="width: 100%; height: 100%;">
                                <div class="overlay">
                                    <div class="text">see more</div>
                                </div>
                            </a>
                        </div>
                        <div class="square-footer ms-2">
                            <a href="projects.html">
                                <img src="{{asset('assets_front/images/2.jpg')}}" style="width: 100%; height: 100%;">
                                <div class="overlay">
                                    <div class="text">see more</div>
                                </div>
                            </a>
                        </div>
                        <div class="square-footer ms-2">
                            <a href="projects.html">
                                <img src="{{asset('assets_front/images/3.jpg')}}" style="width: 100%; height: 100%;">
                                <div class="overlay">
                                    <div class="text">see more</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="square-footer ms-2">
                            <a href="projects.html">
                                <img src="{{asset('assets_front/images/4.jpg')}}" style="width: 100%; height: 100%;">
                                <div class="overlay">
                                    <div class="text">see more</div>
                                </div>
                            </a>
                        </div>
                        <div class="square-footer ms-2">
                            <a href="projects.html">
                                <img src="{{asset('assets_front/images/5.jpg')}}" style="width: 100%; height: 100%;">
                                <div class="overlay">
                                    <div class="text">see more</div>
                                </div>
                            </a>
                        </div>
                        <div class="square-footer ms-2">
                            <a href="projects.html">
                                <img src="{{asset('assets_front/images/6.jpg')}}" style="width: 100%; height: 100%;">
                                <div class="overlay">
                                    <div class="text">see more</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between text-center small-footer">
            <div class="mx-auto my-auto" style="width: 33%;">
                <img src="{{asset('assets_front/images/logo.png')}}">
            </div>
            <div class="mx-auto my-auto" style="width: 33%;">
                <small>Copyright 2023 - GRAND GATE by Arena</small>
            </div>
            <div class="mx-auto my-auto" style="width: 33%;">
                <div class="d-flex justify-content-center">
                    <a href="https://www.facebook.com/profile.php?id=100063859848274&mibextid=PzaGJu">
                        <div class="p-xl-2 p-lg-2 p-md-2 circle me-3">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                    </a>
                    <a href="tel:+201111222011">
                        <div class="p-xl-2 p-lg-2 p-md-2 circle me-3">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=%2B201111222011&text&type=phone_number&app_absent=0">
                        <div class="p-xl-2 p-lg-2 p-md-2 circle">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->

    <!--button-Up-->
    <div class="button-up shadow-lg">
        <span>
            <i class="fa-solid fa-chevron-up"></i>
            <p>TOP</p>
        </span>
    </div>


    <!-- script tags -->
    <script src="{{asset('assets_front/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets_front/js/index.js')}}"></script>
</body>

</html>
