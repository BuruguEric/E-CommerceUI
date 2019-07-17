<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('partials._head')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include('partials._navbar')

        <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12" data-aos-delay="400">
                        <div class="row mb-4">
                            <div class="col-md-7">
                                <h1>Shop With Us</h1>
                                <p class="mb-5 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                                <div>
                                    <a href="{{route('login')}}" class="btn btn-white btn-outline-white py-3 px-5 rounded-3 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a>
                                    <a href="{{route('register')}}" class="btn btn-white py-3 px-5 rounded-3 d-block d-sm-inline-block">Club Membership</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials._products')

        <div class="site-blocks-cover inner-page-cover overlay get-notification" style="background-image: url(images/hero_2.jpg); background-attachment: fixed;" >
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <form class="col-md-7" method="post">
                        <h2>Get notified on each updates.</h2>
                        <div class="d-flex mb-4">
                            <input type="text" class="form-control rounded-3" placeholder="Enter your email address">
                            <button type="button" class="btn btn-white btn-outline-white rounded-3">Subscribe</button>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi veniam doloremque ducimus tempora.</p>
                    </form>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-6 text-center">
                        <h3 class="section-sub-title">Awesome Products</h3>
                        <h2 class="section-title mb-3">Featured Products</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                    </div>
                </div>
                <div class="bg-white py-4 mb-4">
                    <div class="row mx-4 my-4 product-item-2 align-items-start">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="images/model_1_bg.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-5 ml-auto product-title-wrap">
                            <span class="number">01.</span>
                            <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
                            <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>
                            <div class="mb-4">
                                <h3 class="text-black font-weight-bold h5">Price:</h3>
                                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
                            </div>
                            <p>
                            <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                            <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white py-4">
                    <div class="row mx-4 my-4 product-item-2 align-items-start">
                        <div class="col-md-6 mb-5 mb-md-0 order-1 order-md-2">
                            <img src="images/product_1_bg.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1">
                            <span class="number">02.</span>
                            <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
                            <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>
                            <div class="mb-4">
                                <h3 class="text-black font-weight-bold h5">Price:</h3>
                                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
                            </div>
                            <p>
                            <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                            <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section" id="about-section">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-md-8 mb-5 mb-lg-0 position-relative">
                        <img src="images/about_1.jpg" class="img-fluid" alt="Image">
                        <div class="experience">
                            <span class="year">Trusted Merchant</span>
                            <span class="caption">for 50 years</span>
                        </div>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <h3 class="section-sub-title">Merchant Company</h3>
                        <h2 class="section-title mb-3">About Us</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
                        <p><a href="#" class="btn btn-black btn-black--hover rounded-0">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay get-notification" id="special-section" style="background-image: url(images/hero_2.jpg); background-attachment: fixed; background-position: top;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center">
                        <h3 class="section-sub-title">Special Promo</h3>
                        <h3 class="section-title text-white mb-4">Summer Sale</h3>
                        <p class="mb-5 lead">Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                        <div id="date-countdown" class="mb-5"></div>
                        <p><a href="{{route('login')}}" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section border-bottom" id="team-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h3 class="section-sub-title">Team</h3>
                        <h2 class="section-title mb-3">Leadership</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos-delay="100">
                        <div class="person text-center">
                            <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
                            <h3>John Rooster</h3>
                            <p class="position text-muted">Co-Founder, President</p>
                            <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                            <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos-delay="200">
                        <div class="person text-center">
                            <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
                            <h3>Tom Sharp</h3>
                            <p class="position text-muted">Co-Founder, COO</p>
                            <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                            <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos-delay="300">
                        <div class="person text-center">
                            <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
                            <h3>Winston Hodson</h3>
                            <p class="position text-muted">Marketing</p>
                            <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                            <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                    <h3 class="section-sub-title">Contact Form</h3>
                    <h2 class="section-title mb-3">Get In Touch</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5">
                        <form action="#" class="p-5 bg-white">
                            <h2 class="h4 text-black mb-5">Contact Form</h2>
                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control rounded-3">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control rounded-3">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" class="form-control rounded-3">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="subject">Subject</label>
                                    <input type="subject" id="subject" class="form-control rounded-3">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-3" placeholder="Write your notes or questions here..."></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <button type="submit" value="" class="btn btn-black rounded-3 py-3 px-4">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('partials._footer')

    </div>

    <script src="js/jquery-3.3.1.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/jquery-migrate-3.0.1.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/jquery-ui.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/popper.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/bootstrap.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/jquery.stellar.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/jquery.countdown.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/bootstrap-datepicker.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/aos.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/jquery.fancybox.min.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/jquery.sticky.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script src="js/main.js" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="81d5bfb9a0f8721bdb9c9137-text/javascript"></script>
    <script type="81d5bfb9a0f8721bdb9c9137-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="81d5bfb9a0f8721bdb9c9137-|49" defer=""></script>

</body>

<!-- Mirrored from colorlib.com/preview/theme/selling/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2019 13:35:28 GMT -->
</html>