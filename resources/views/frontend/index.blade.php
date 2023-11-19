<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Gate</title>
    <link rel="website icon" type="png" href="{{asset('assets_front/images/icon.png')}}">
    <link rel="stylesheet" href="{{asset('assets_front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets_front/css/index.css')}}">
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
                        <img src="{{asset('assets_front/images/logo2.png')}}" style="width: 40%; height: 100%;" alt="logo">
                    </a>
                    <button class="navbar-toggler" style="color: white !important;" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link active rounded-1" aria-current="page" href="index.html">
                                    <span style="color: #eb242c;">HOME</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active rounded-1" aria-current="page" href="about.html">
                                    <span class="">ABOUT US</span>
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

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 header-content text-center mx-auto">
                <p>Built to last , built to impress</p>
                <h1>We at Grand <span style="color: #eb242c;">Gate</span></h1>
                <p>
                    Precision manufacturing and continuous product development at the forefront of motors and
                    electromechanical operations.
                </p>
                <div class="d-flex justify-content-center mt-xl-4 mt-lg-4 mt-md-4">
                    <div class="me-2">
                        <a href="projects.html" class="btn button rounded-0 p-xl-3 p-lg-3 p-md-3">Our Projects</a>
                    </div>
                    <div>
                        <a href="contact.html" class="btn button2 rounded-0 p-xl-3 p-lg-3 p-md-3">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <img src="{{asset('assets_front/images/main.png')}}" style="width: 100%; height: 100%;">
            </div>
        </div>
    </header>
    <!---->
    <section class="about-us mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 mx-auto">
                    <h2>
                        <span style="color: #eb242c;">Grand Gate</span>
                        Your trusted partner for precision -engineered motors and electromechanical solutions.
                    </h2>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="line"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10 mx-auto">
                    <p>
                        Our Engineering and Design Department takes pride in precision and quality, adhering strictly to
                        industry standards and specifications.
                        We achieve this through the provision of top-notch materials, exceptional post-sales services,
                        and
                        seamless contracting processes. Our dedicated team is passionate about pushing the boundaries of
                        electronic gate technology and setting new benchmarks in the industry.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!---->
    <section class="products-sec mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-3 col-md-3 mb-2 rounded-0">
                                <div class="card rounded-0">
                                    <div>
                                        <img src="{{asset('assets_front/images/products/Roller-Shutters-h.jpg')}}" style="width: 100%;"
                                            class="card-img-top rounded-0" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">Roller Shutters</h5>
                                                <p>Security and privacy for your home or business</p>
                                            </div>
                                            <div class="my-auto">
                                                <a href="#">
                                                    <div class="p-1 circle">
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 mb-2 rounded-0">
                                <div class="card">
                                    <div>
                                        <img src="{{asset('assets_front/images/products/Emergency-Gates-h.jpg')}}" style="width: 100%;"
                                            class="card-img-top rounded-0" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">Emergency Gates</h5>
                                                <p>Quick and easy escape in the event of an emergency</p>
                                            </div>
                                            <div class="my-auto">
                                                <a href="#">
                                                    <div class="p-1 circle">
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 mb-2 rounded-0">
                                <div class="card">
                                    <div>
                                        <img src="{{asset('assets_front/images/products/Traffic-Barriers-h.jpg')}}" style="width: 100%;"
                                            class="card-img-top rounded-0" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">Traffic Barriers</h5>
                                                <p>Control traffic flow and improve security</p>
                                            </div>
                                            <div class="my-auto">
                                                <a href="#">
                                                    <div class="p-1 circle">
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-3 col-md-3 mb-2 rounded-0">
                                <div class="card">
                                    <div>
                                        <img src="{{asset('assets_front/images/products/Roller-shutters-drives-h.jpg')}}"
                                            style="width: 100%;" class="card-img-top rounded-0" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">Roller shutters drives</h5>
                                                <p>The Backbone of Efficient Gate Systems</p>
                                            </div>
                                            <div class="my-auto">
                                                <a href="#">
                                                    <div class="p-1 circle">
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 mb-2 rounded-0">
                                <div class="card">
                                    <div>
                                        <img src="{{asset('assets_front/images/products/Automatic-sliding-doors-h.jpg')}}"
                                            style="width: 100%;" class="card-img-top rounded-0" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">Automatic sliding doors</h5>
                                                <p>Smooth and convenient access for everyone</p>
                                            </div>
                                            <div class="my-auto">
                                                <a href="#">
                                                    <div class="p-1 circle">
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 mb-2 rounded-0">
                                <div class="card">
                                    <div>
                                        <img src="{{asset('assets_front/images/products/Residential-Roller-shutters-h.jpg')}}"
                                            style="width: 100%;" class="card-img-top rounded-0" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">Residential Roller shutters</h5>
                                                <p>Add style and security to your home</p>
                                            </div>
                                            <div class="my-auto">
                                                <a href="#">
                                                    <div class="p-1 circle">
                                                        <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
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

    <!---->
    <section class="who-we mt-xl-5 mt-lg-5 mt-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 my-auto mx-auto">
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
                <div class="col-xl-5 col-lg-5 col-md-5 my-auto mx-auto">
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

    <!---->
    <section class="projects-sec mt-xl-5 mt-lg-5 mt-md-5">
        <div class="main-proj">
            <h2>Projects</h2>
            <div class="line"></div>
            <div id="buttons">
                <button class="button3 active-proj" onclick="filterSelection('all')"> Show all</button>
                <button class="button3" onclick="filterSelection(' Roller-Shutters')"> Roller Shutters</button>
                <button class="button3" onclick="filterSelection('Traffic-Barriers')"> Traffic Barriers</button>
                <button class="button3" onclick="filterSelection('Automatic-sliding-doors')"> Automatic sliding
                    doors</button>
                <button class="button3" onclick="filterSelection('High-Speed-Doors')"> High Speed Doors </button>
                <button class="button3" onclick="filterSelection('Emergency-Gates')"> Emergency Gates</button>
                <button class="button3" onclick="filterSelection('Residential-Roller-shutters')"> Residential Roller
                    shutters </button>
                <button class="button3" onclick="filterSelection('Roller-shutters-drives')"> Roller shutters
                    drives</button>
            </div>
            <!-- Portfolio Gallery Grid -->
            <div class="row-proj">
                <div class="column-proj  Roller-Shutters">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/1.jpg')}}" alt="Mountains" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj  Roller-Shutters">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/2.jpg')}}" alt="Lights" style="width:100%">
                        <h4>مشروع ارابيلا مول التجمع الخامس</h4>
                    </div>
                </div>
                <div class="column-proj  Roller-Shutters">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/3.jpg')}}" alt="Nature" style="width:100%">
                        <h4>مشروع ارابيلا مول التجمع الخامس</h4>
                    </div>
                </div>
                <div class="column-proj  Roller-Shutters">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/4.jpg')}}" alt="Nature" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <!------------------------------->
                <div class="column-proj Traffic-Barriers">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/5.jpg')}}" alt="Car" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Traffic-Barriers">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/6.jpg')}}" alt="Car" style="width:100%">
                        <h4>مشروع ارابيلا مول التجمع الخامس</h4>
                    </div>
                </div>
                <div class="column-proj Traffic-Barriers">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/7.jpg')}}" alt="Car" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Traffic-Barriers">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/8.jpg')}}" alt="Car" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <!------------------------------->
                <div class="column-proj Automatic-sliding-doors">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/9.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Automatic-sliding-doors">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/10.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Automatic-sliding-doors">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/11.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Automatic-sliding-doors">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/12.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <!------------------------------->
                <div class="column-proj High-Speed-Doors">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/13.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj High-Speed-Doors">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/14.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj High-Speed-Doors">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/15.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj High-Speed-Doors">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/16.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <!------------------------------->
                <div class="column-proj Emergency-Gates">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/1.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Emergency-Gates">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/2.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Emergency-Gates">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/3.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Emergency-Gates">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/4.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <!------------------------------->
                <div class="column-proj Residential-Roller-shutters">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/5.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Residential-Roller-shutters">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/6.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Residential-Roller-shutters">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/7.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Residential-Roller-shutters">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/8.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <!------------------------------->
                <div class="column-proj Roller-shutters-drives">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/9.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Roller-shutters-drives">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/10.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Roller-shutters-drives">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/11.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <div class="column-proj Roller-shutters-drives">
                    <div class="content">
                        <img src="{{asset('assets_front/images/projects/12.jpg')}}" alt="People" style="width:100%">
                        <h4>مخازن البنك الاهلي المصري</h4>
                    </div>
                </div>
                <!-- END GRID -->
            </div>
        </div>
    </section>
    <!---->

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
                                <a href="https://api.whatsapp.com/send/?phone=%2B201111222011&text&type=phone_number&app_absent=0">
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
