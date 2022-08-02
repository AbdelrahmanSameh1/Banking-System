<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/raxa/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 May 2022 15:44:51 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="raxa/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="raxa/assets/css/flaticon.css">
    <link rel="stylesheet" href="raxa/assets/css/remixicon.css">
    <link rel="stylesheet" href="raxa/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="raxa/assets/css/odometer.min.css">
    <link rel="stylesheet" href="raxa/assets/css/fancybox.css">
    <link rel="stylesheet" href="raxa/assets/css/aos.css">
    <link rel="stylesheet" href="raxa/assets/css/style.css">
    <link rel="stylesheet" href="raxa/assets/css/dark-theme.css">
    <link rel="stylesheet" href="raxa/assets/css/responsive.css">


    <title>Cypher Bank</title>
    <link rel="icon" type="image/png" href="raxa/assets/img/bank.png">



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>






    <style>
        body {
            background: #fff;
        }

        .accordion .card {
            background: none;
            border: none;
        }

        .accordion .card .card-header {
            background: none;
            border: none;
            padding: .4rem 1rem;
            font-family: "Roboto", sans-serif;
        }

        .accordion .card-header h2 span {
            float: left;
            margin-top: 10px;
        }

        .accordion .card-header .btn {
            color: #2f2f31;
            font-size: 1.04rem;
            text-align: left;
            position: relative;
            font-weight: 500;
            padding-left: 2rem;
        }

        .accordion .card-header i {
            font-size: 1.2rem;
            font-weight: bold;
            position: absolute;
            left: 0;
            top: 9px;
        }

        .accordion .card-header .btn:hover {
            color: #ff8300;
        }

        .accordion .card-body {
            color: #324353;
            padding: 0.5rem 3rem;
        }

        .page-title {
            margin: 3rem 0 3rem 1rem;
            font-family: "Roboto", sans-serif;
            position: relative;
        }

        .page-title::after {
            content: "";
            width: 80px;
            position: absolute;
            height: 3px;
            border-radius: 1px;
            background: #73bb2b;
            left: 0;
            bottom: -15px;
        }

        .accordion .highlight .btn {
            color: #74bd30;
        }

        .accordion .highlight i {
            transform: rotate(180deg);
        }
    </style>
    <script>
        $(document).ready(function() {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function() {
                $(this).prev(".card-header").addClass("highlight");
            });

            // Highlight open collapsed element 
            $(".card-header .btn").click(function() {
                $(".card-header").not($(this).parents()).removeClass("highlight");
                $(this).parents(".card-header").toggleClass("highlight");
            });
        });
    </script>





</head>

<body>






    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>


    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>


    <div class="page-wrapper">

        <header class="header-wrap style1">
            <div class="header-top">
                <button type="button" class="close-sidebar">
                    <i class="ri-close-fill"></i>
                </button>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="header-top-left">
                                <ul class="contact-info list-style">
                                    <li><i class="flaticon-call"></i> <a href="tel:201221717255">(+20) 122 171 7255</a></li>
                                    <li><i class="flaticon-email-1"></i> <a href="mailto: contact@cypherbank.org"><span class="__cf_email__" data-cfemail="96fef3fafaf9d6e4f7eef7b8f5f9fb">contact@cypherbank.org</span></a></li>
                                    <li><i class="flaticon-pin"></i>
                                        <p>Cairo, Egypt</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="header-top-right">
                                <ul class="header-top-menu list-style">
                                    <li><a href="contact.html">Support</a></li>
                                    <li><a href="contact.html">Help</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index">
                            <!-- <img class="logo-light" src="raxa/assets/img/logo.png" alt="logo"> -->
                            <h1 class="logo-light">Cypher Bank</h1>
                            <!-- <img class="logo-dark" src="raxa/assets/img/logo-white.png" alt="logo"> -->
                            <h1 class="logo-dark">Cypher Bank</h1>
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close xl-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item  has-dropdown">
                                    <a href="./index.php" class="nav-link">
                                        Home

                                    </a>

                                </li>
                                <li class="nav-item">
                                    <!-- <a href="raxa/messages.html" class="nav-link"> -->
                                    <a href="messages" class="nav-link">
                                        Messages
                                    </a>
                                </li>
                                <li class="nav-item has-dropdown">
                                    <a href="customers" class="nav-link">
                                        Customers

                                    </a>

                                </li>
                                <li class="nav-item has-dropdown">
                                    <a href="transactions" class="nav-link">
                                        Transactions

                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="raxa/contact.html" class="nav-link">Contact Us</a>
                                </li>

                            </ul>
                            <div class="others-options  lg-none">


                            </div>
                        </div>
                    </nav>
                    <div class="mobile-bar-wrap">
                        <div class="mobile-sidebar">
                            <i class="ri-menu-4-line"></i>
                        </div>
                        <button class="searchbtn xl-none" type="button">
                            <i class="flaticon-search"></i>
                        </button>
                        <div class="mobile-menu xl-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="search-area">
                    <div class="container">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" placeholder="Search Here" autofocus>
                            </div>
                        </form>
                        <button type="button" class="close-searchbox">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>











        <div class="page-wrapper">

            <header class="header-wrap style1">
                <div class="header-top">
                    <button type="button" class="close-sidebar">
                        <i class="ri-close-fill"></i>
                    </button>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-12">
                                <div class="header-top-left">
                                    <ul class="contact-info list-style">
                                        <li><i class="flaticon-call"></i> <a href="tel:201221717255">(+20) 122 171 7255</a></li>
                                        <li><i class="flaticon-email-1"></i> <a href="mailto: contact@cypherbank.org"><span class="__cf_email__" data-cfemail="96fef3fafaf9d6e4f7eef7b8f5f9fb">contact@cypherbank.org</span></a></li>
                                        <li><i class="flaticon-pin"></i>
                                            <p>Cairo, Egypt</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="header-top-right">
                                    <ul class="header-top-menu list-style">
                                        <li><a href="contact.html">Support</a></li>
                                        <li><a href="contact.html">Help</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index">
                                <!-- <img class="logo-light" src="raxa/assets/img/logo.png" alt="logo"> -->
                                <h1 class="logo-light">Cypher Bank</h1>
                                <!-- <img class="logo-dark" src="raxa/assets/img/logo-white.png" alt="logo"> -->
                                <h1 class="logo-dark">Cypher Bank</h1>
                            </a>
                            <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                                <div class="menu-close xl-none">
                                    <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                                </div>
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item  has-dropdown">
                                        <a href="index" class="nav-link">
                                            Home

                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <!-- <a href="raxa/messages.html" class="nav-link"> -->
                                        <a href="messages" class="nav-link">
                                            Messages
                                        </a>
                                    </li>
                                    <li class="nav-item has-dropdown">
                                        <a href="customers" class="nav-link">
                                            Customers

                                        </a>

                                    </li>
                                    <li class="nav-item has-dropdown">
                                        <a href="transactions" class="nav-link">
                                            Transactions

                                        </a>

                                    </li>

                                    <li class="nav-item">
                                        <a href="raxa/contact.html" class="nav-link">Contact Us</a>
                                    </li>

                                </ul>
                                <div class="others-options  lg-none">


                                </div>
                            </div>
                        </nav>
                        <div class="mobile-bar-wrap">
                            <div class="mobile-sidebar">
                                <i class="ri-menu-4-line"></i>
                            </div>
                            <button class="searchbtn xl-none" type="button">
                                <i class="flaticon-search"></i>
                            </button>
                            <div class="mobile-menu xl-none">
                                <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="search-area">
                        <div class="container">
                            <form action="#">
                                <div class="form-group">
                                    <input type="search" placeholder="Search Here" autofocus>
                                </div>
                            </form>
                            <button type="button" class="close-searchbox">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>





            <br><br><br><br>








            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-title">Messages</h1>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="clearfix mb-0">
                                        <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-chevron-circle-down"></i> What is Bootstrap Framework?</a>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-chevron-circle-down"></i> How to Create Responsive Website with Bootstrap?</a>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-chevron-circle-down"></i> Does Bootstrap Framework Provide Cross-browser Support?</a>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-chevron-circle-down"></i> Can I Use Bootstrap for Mobile App Development?</a>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>












            <footer class="footer-wrap bg-rock">








                <div class="contact-form-area ptb-100 bg-albastor">
                    <img src="raxa/assets/img/contact-shape-1.png" alt="Image" class="contact-shape-one animationFramesTwo">
                    <img src="raxa/assets/img/contact-shape-2.png" alt="Image" class="contact-shape-two bounce">

                </div>








                <div style="text-align: center;" class="footer-widget">

                    <h1 class="comp-desc">
                        Contact Us Via
                    </h1>



                    <div class="social-link" style="margin-left: 588px;">
                        <ul class="social-profile list-style style1">
                            <li>
                                <a class="social-profile li:first-child" target="_blank" href="https://facebook.com/">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://linkedin.com/">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://instagram.com/">
                                    <i class="ri-pinterest-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>






                <div class="copyright-text">
                    <p>Copyright <i class="ri-copyright-line"></i> 2022 cypher-bank.com</p>
                </div>
            </footer>

        </div>








    </div>


    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>




    <script>

    </script>








    <script src="raxa/assets/js/jquery.min.js"></script>
    <script src="raxa/assets/js/bootstrap.bundle.min.js"></script>
    <script src="raxa/assets/js/form-validator.min.js"></script>
    <script src="raxa/assets/js/contact-form-script.js"></script>
    <script src="raxa/assets/js/aos.js"></script>
    <script src="raxa/assets/js/owl.carousel.min.js"></script>
    <script src="raxa/assets/js/odometer.min.js"></script>
    <script src="raxa/assets/js/fancybox.js"></script>
    <script src="raxa/assets/js/jquery.appear.js"></script>
    <script src="raxa/assets/js/tweenmax.min.js"></script>
    <script src="raxa/assets/js/main.js"></script>

    </div>


    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>


    <script src="raxa/assets/js/jquery.min.js"></script>
    <script src="raxa/assets/js/bootstrap.bundle.min.js"></script>
    <script src="raxa/assets/js/form-validator.min.js"></script>
    <script src="raxa/assets/js/contact-form-script.js"></script>
    <script src="raxa/assets/js/aos.js"></script>
    <script src="raxa/assets/js/owl.carousel.min.js"></script>
    <script src="raxa/assets/js/odometer.min.js"></script>
    <script src="raxa/assets/js/fancybox.js"></script>
    <script src="raxa/assets/js/jquery.appear.js"></script>
    <script src="raxa/assets/js/tweenmax.min.js"></script>
    <script src="raxa/assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/raxa/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 May 2022 15:44:51 GMT -->

</html>