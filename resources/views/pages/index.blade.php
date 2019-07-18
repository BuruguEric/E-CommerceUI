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

        <div class="site-blocks-cover overlay" style="background-image: url({{asset('images/hero_2.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12" data-aos-delay="400">
                        <div class="row mb-4">
                            <div class="col-md-7">
                                <h1>Shop With Us</h1>
                                <p class="mb-5 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                                <div>
                                    <a href="{{route('login')}}" title="Login" class="btn btn-white btn-outline-white py-3 px-5 rounded-3 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a>
                                    <a href="{{route('register')}}" title="Register" class="btn btn-white py-3 px-5 rounded-3 d-block d-sm-inline-block">Club Membership</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Products --}}
        @include('partials._products')

        {{-- Subscribe --}}
        <div class="site-blocks-cover inner-page-cover overlay get-notification" style="background-image: url({{asset('images/hero_2.jpg')}}); background-attachment: fixed;" >
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
                        <p id="product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                    </div>
                </div>
                <div class="bg-white py-4 mb-4">
                    <div class="row mx-4 my-4 product-item-2 align-items-start">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="{{asset('images/astronaut-astronomy-cosmonaut-355956.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-5 ml-auto product-title-wrap">
                            <span class="number">01.</span>
                            <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
                            <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>
                            <div class="mb-4">
                                <h3 class="text-black font-weight-bold h5">Price:</h3>
                                <div class="price"><del class="mr-2">Ksh269.00</del> Ksh249.99</div>
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
                            <img src="{{asset('images/product_1_bg.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1">
                            <span class="number">02.</span>
                            <h3 class="text-black mb-4 font-weight-bold">About This Product</h3>
                            <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>
                            <div class="mb-4">
                                <h3 class="text-black font-weight-bold h5">Price:</h3>
                                <div class="price"><del class="mr-2">Ksh269.00</del> Ksh249.99</div>
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
        {{-- About Us --}}
        <div class="site-section" id="about-section">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-md-8 mb-5 mb-lg-0 position-relative">
                        <img src="{{asset('images/exmachina.jpg')}}" class="img-fluid" alt="Image">
                        <div class="experience">
                            <span class="year">Trusted Merchant</span>
                            <span class="caption">for over 15 years</span>
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
        {{-- Offers --}}
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
        {{-- Team Involved Section --}}
        <div class="site-section border-bottom" id="team-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h3 class="section-sub-title">Team</h3>
                        <h2 class="section-title mb-3">Owners</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos-delay="100">
                        <div class="person text-center">
                            <img src="{{asset('images/model_2_bg.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
                            <h3>Eric Burugu</h3>
                            <p class="position text-muted">Co-Founder, CEO</p>
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
                            <img src="{{asset('images/model_3_bg.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
                            <h3>Michelle Omondi</h3>
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
                            <img src="{{asset('images/person_4.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
                            <h3>Kevin Mwenda</h3>
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

        {{-- Contact Form --}}
        @include('partials._contactForm')

        {{-- Page Footer --}}
        @include('partials._footer')

    </div>

    @include('partials._scripts')
    
</body>
</html>