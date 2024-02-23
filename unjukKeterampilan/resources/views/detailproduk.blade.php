<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>templatefront</title>

    <!-- Bootstrap core CSS -->
    <link href={{ asset('fr/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href={{ asset('fr/assets/css/fontawesome.css') }}>
    <link rel="stylesheet" href={{ asset('fr/assets/css/templatemo-574-mexant.css') }}>
    <link rel="stylesheet" href={{ asset('fr/assets/css/owl.css') }}>
    <link rel="stylesheet" href={{ asset('fr/assets/css/animate.css') }}>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href={{ asset('fr/index.html') }} class="logo">
                            <img src={{ asset('fr/assets/images/logo.png') }} alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#artikel">Artikel</a></li>
                            <li class="buttons green-button"><a href="{{ route('login') }}">Login</a></li>
                            <li class="buttons orange-button"><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->

    <section class="about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>Detail</h6>
                        <h4>Produk</h4>
                    </div>
                </div>
                @yield('detail')
            </div>
        </div>
    </section>

    <section class="calculator">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="left-image">
                        <img src={{ asset('fr/assets/images/calculator-image.png') }} alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>Your Freedom</h6>
                        <h4>Get a Financial Plan</h4>
                    </div>
                    <form id="calculate" action="" method="get">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="name">Your Name</label>
                                    <input type="name" name="name" id="name" placeholder="" autocomplete="on"
                                        required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="email">Your Email</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Subject</label>
                                    <input type="subject" name="subject" id="subject" placeholder=""
                                        autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="chooseOption" class="form-label">Your Reason</label>
                                    <select name="Category" class="form-select" aria-label="Default select example"
                                        id="chooseOption" onchange="this.form.click()">
                                        <option selected>Choose an Option</option>
                                        <option type="checkbox" name="option1" value="Online Banking">Online Banking
                                        </option>
                                        <option value="Financial Control">Financial Control</option>
                                        <option value="Yearly Profit">Yearly Profit</option>
                                        <option value="Crypto Investment">Crypto Investment</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Submit Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>Testimonials</h6>
                        <h4>What They Say</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem.
                                Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus,
                                in euismod ligula. Aliquam vel scelerisque elit.”</p>
                            <h4>David Eigenberg</h4>
                            <span>CEO of Mexant</span>
                            <div class="right-image">
                                <img src={{ asset('fr/assets/images/testimonials-01.jpg') }} alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In
                                blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus
                                condimentum tempus.”</p>
                            <h4>Andrew Garfield</h4>
                            <span>CTO of Mexant</span>
                            <div class="right-image">
                                <img src={{ asset('fr/assets/images/testimonials-01.jpg') }} alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac
                                gravida leo. Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo.”</p>
                            <h4>George Lopez</h4>
                            <span>Crypto Manager</span>
                            <div class="right-image">
                                <img src={{ asset('fr/assets/images/testimonials-01.jpg') }} alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src={{ asset('fr/assets/images/client-01.png') }} alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src={{ asset('fr/assets/images/client-01.png') }} alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src={{ asset('fr/assets/images/client-01.png') }} alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src={{ asset('fr/assets/images/client-01.png') }} alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src={{ asset('fr/assets/images/client-01.png') }} alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src={{ asset('fr/assets/images/client-01.png') }} alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2022 Mexant Co., Ltd. All Rights Reserved.

                        <br>Designed by <a title="CSS Templates" rel="sponsored" href="https://templatemo.com"
                            target="_blank">TemplateMo</a> Distributed By <a title="CSS Templates" rel="sponsored"
                            href="https://themewagons.com" target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src={{ asset('fr/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('fr/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <script src={{ asset('fr/assets/js/isotope.min.js') }}></script>
    <script src={{ asset('fr/assets/js/owl-carousel.js') }}></script>

    <script src={{ asset('fr/assets/js/tabs.js') }}></script>
    <script src={{ asset('fr/assets/js/swiper.js') }}></script>
    <script src={{ asset('fr/assets/js/custom.js') }}></script>
    <script>
        var interleaveOffset = 0.5;

        var swiperOptions = {
            loop: true,
            speed: 1000,
            grabCursor: true,
            watchSlidesProgress: true,
            mousewheelControl: true,
            keyboardControl: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                progress: function() {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                    }
                },
                touchStart: function() {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function(speed) {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                            speed + "ms";
                    }
                }
            }
        };

        var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>
</body>

</html>
