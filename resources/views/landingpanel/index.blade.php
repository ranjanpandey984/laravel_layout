<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="w  fidth=device-width, initial-scale=1.0" />
    <title>Real Estate Web Application</title>

    <!-- BOOTSTRAP -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
        crossorigin="anonymous"
    />

    <!-- FONT AWESOME ICONS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">GharBaar</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link fs-16" href="#"
                    >House <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item active mr-3">
                    <a class="nav-link fs-16" href="#"
                    >Land <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item active mr-3">
                    <a class="nav-link fs-16" href="#"
                    >Flats <span class="sr-only">(current)</span></a
                    >
                </li>
                <li class="nav-item active mr-3">
                    <a class="nav-link fs-16" href="#"
                    >FAQs <span class="sr-only">(current)</span></a
                    >
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <!-- border-orange-600
                    bg-orange-100
                    text-orange-600
                    hover:bg-primary hover:text-primary hover:border-primary -->
                <a href="" class="btn btn-outline-danger mr-2 my-sm-0"
                >Post Property</a
                >
                <a href="" class="btn btn-outline-primary my-2 my-sm-0">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    Sign-in / Sign-up
                </a>
            </form>
        </div>
    </div>
</nav>

<main>
    <section class="banner d-flex justify-content-center align-items-center">
        <div class="banner-content">
            <h1 class="text-white">Find Your Perfect Property</h1>
            <h2 class="text-white">
                Search your dream home on Nepal’s largest property marketplace
            </h2>
            <label for="address"></label>
            <input type="text" name="address" id="address" class="input-style" />
            <label for="category"></label>
            <select name="category" id="category" class="select-style">
                <option value="">Select Category</option>
                <option value="1">House</option>
                <option value="1">Land</option>
                <option value="1">Flat</option>
            </select>
        </div>
    </section>
</main>

<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>About Me</h4>
                    <p>
                        We have tested a number of registry fix and clean utilities and
                        present our top 3 list on our site for your convenience.
                    </p>
                    <p class="footer-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with
                        <i class="fa fa-heart-o" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends</p>
                    <div class="" id="mc_embed_signup">
                        <form
                            target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get"
                        >
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="EMAIL"
                                    placeholder="Enter Email Address"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Email Address '"
                                    required=""
                                    type="email"
                                />
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <span class="lnr lnr-arrow-right"></span>
                                    </button>
                                </div>
                                <div class="info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h4>Follow Me</h4>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/main.js"></script>
<script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"
></script>
</body>
</html>
