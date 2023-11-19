<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="website icon" type="png" href="{{asset('assets_front/images/icon.png')}}">
    <link rel="stylesheet" href="{{asset('assets_front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets_front/css/products.css')}}">
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
                                    <span class="">ABOUT US</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link rounded-1" href="products.html">
                                    <span style="color: #eb242c;">PRODUCTS</span>
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
                <h1>Products</h1>
            </div>
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #eb242c;">Products</li>
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
    <section class="products mt-xl-5 mt-lg-5 mt-md-5 mb-xl-5 mb-lg-5 mb-md-5">
        <div class="container">
            <div class="all-products row justify-content-center text-center mb-5">
                <h2>Discover our wide range of high-quality products</h2>
                <div class="line"></div>
                <p>We offer a wide range of products to suit every need and exceed your expectations. Whether you're
                    looking for a security solution for your home or business, we have the perfect product for you</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 mb-3">
                    <a href="product-details.html">
                        <div class="products-section">
                            <img src="{{asset('assets_front/images/products/Automatic-sliding-doors.jpg')}}" class="image">
                            <div class="overlay-product">
                                <div class="text">
                                    <h4>Automatic sliding doors</h4>
                                    <p>Smooth and convenient access for everyone</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-3 mb-3">
                    <a href="product-details.html">
                        <div class="products-section">
                            <img src="{{asset('assets_front/images/products/Emergency-Gates.jpg')}}" class="image">
                            <div class="overlay-product">
                                <div class="text">
                                    <h4>Emergency Gates</h4>
                                    <p>Quick and easy escape in the event of an emergency</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 mb-3">
                    <a href="#">
                        <div class="products-section">
                            <img src="{{asset('assets_front/images/products/High-Speed-Doors.jpg')}}" class="image">
                            <div class="overlay-product">
                                <div class="text">
                                    <h4>High Speed Doors </h4>
                                    <p>Fast and efficient operation for demanding environments</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 mb-3">
                    <a href="#">
                        <div class="products-section">
                            <img src="{{asset('assets_front/images/products/Residential-Roller-shutters.jpg')}}" class="image">
                            <div class="overlay-product">
                                <div class="text">
                                    <h4>Residential Roller shutters</h4>
                                    <p>Add style and security to your home</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 mb-3">
                    <a href="#">
                        <div class="products-section">
                            <img src="{{asset('assets_front/images/products/Roller-Shutters.jpg')}}" class="image">
                            <div class="overlay-product">
                                <div class="text">
                                    <h4>Roller Shutters</h4>
                                    <p>Security and privacy for your home or business</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 mb-3">
                    <a href="#">
                        <div class="products-section">
                            <img src="{{asset('assets_front/images/products/Traffic-Barriers.jpg')}}" class="image">
                            <div class="overlay-product">
                                <div class="text">
                                    <h4>Traffic Barriers</h4>
                                    <p>Control traffic flow and improve security</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 mb-3">
                    <a href="#">
                        <div class="products-section">
                            <img src="{{asset('assets_front/images/products/Roller-shutters-drives.jpg')}}" class="image">
                            <div class="overlay-product">
                                <div class="text">
                                    <h4>Roller shutters drives</h4>
                                    <p>The Backbone of Efficient Gate Systems</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <!---->
    <section class="accessories-sec mt-xl-5 mt-lg-5 mt-md-5 mb-xl-5 mb-lg-5 mb-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 my-auto mx-auto">
                    <h2>
                        Accessories & Motors
                    </h2>
                    <div class="line"></div>
                    <p>
                        Keep your automatic gates running smoothly and securely with our wide selection of accessories
                        and motors. We have everything you need
                        <br><br>
                        <span style="color: #eb242c;">Click here to visit the accessories and motors page</span>
                    </p>
                    <div>
                        <a href="accessories.html" class="btn button rounded-0 p-3">Our Accessories</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 my-auto mx-auto mt-3">
                    <img src="{{asset('assets_front/images/accessories/accessories-and-motors.jpg')}}" style="width: 100%;">
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
