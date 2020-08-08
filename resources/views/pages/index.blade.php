@extends('layouts.app')
@section('content')
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>App Alley Pvt Ltd</span></h2>
        <p class="animate__animated animate__fadeInUp">Glad to serve you!</p>
        <a href="#" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
        <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">We understand</h2>
        <p class="animate__animated animate__fadeInUp">Mobile is the future in Advertising, and we aim to be first in giving
            the complete experience to our users, we have developed our In-house
            platform to understand mobile user unlike any other.</p>
        <a href="#" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
        <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Are you an advertiser?</h2>
        <p class="animate__animated animate__fadeInUp">We delivers the best brand experience for its advertisers by integrating brand information with the most engaging creative experiences. Our QAWR (Quality Audience with Worldwide Reach) through publishers across the world, allows us to take your brand to relevant customers threaded through an interactive experience. We pay special attention to specific data driven optimization with trending insight to make the experience worth for our end customer.

            Our easy to understand platform provides a self-serve interface which helps advertisers to perform recurring self-services for better yield optimization.</p>
        <a href="#" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Are you a publisher</h2>
        <p class="animate__animated animate__fadeInUp">With the industry leading fill rates & premiums, Tarsan focuses on best advertising user experience through our rich media suite. Tarsan’s self-control interface with a switch on and switch off campaigns feature allows publishers total control. Not only that, our auto scalable platform is deployed in Tier-III data centre with 99.99% availability to ensure no business impact for our publishers.

            We offer perfect blend of creating extraordinary visual experience blended with targeted worldwide reach for your brand. We have options for fall back and other vital targeting options available to ease campaign performance also.</p>
        <a href="#" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Strategize and Deliver</h2>
        <p class="animate__animated animate__fadeInUp">Data driven Technology destination for mobile advertising. Reach Right User, Get Max ROI</p>
        <a href="#" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    {{-- Privacy Policy
Your privacy is important to us. It is App Alley Pvt Ltd's policy to respect your privacy regarding any information we may collect from you across our website, http://www.appalley.com, and other sites we own and operate.
We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting it and how it will be used.
We only retain collected information for as long as necessary to provide you with your requested service. What data we store, we’ll protect within commercially acceptable means to prevent loss and theft, as well as unauthorized access, disclosure, copying, use or modification.
We don’t share any personally identifying information publicly or with third-parties, except when required to by law.
Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content and practices of these sites, and cannot accept responsibility or liability for their respective privacy policies.
You are free to refuse our request for your personal information, with the understanding that we may be unable to provide you with some of your desired services.
Your continued use of our website will be regarded as acceptance of our practices around privacy and personal information. If you have any questions about how we handle user data and personal information, feel free to contact us.
This policy is effective as of 28 August 2025.
Privacy Policy created with GetTerms.  --}}
    <section class="services">
        <div class="container">

            <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">Goal</a></h4>
                <p class="description">To provide the best mobile advertising service at affordable prices</p>
                </div>
            </div>
            {{-- Policy --}}


            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Policy</a></h4>
                <p class="description"> We respect your privacy regarding any information we may collect from you across our website,</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Speed</a></h4>
                <p class="description">Our work force believes in rapid rapid development and high scalability</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box icon-box-blue">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">Culture</a></h4>
                <p class="description"> Culture is the persona of the organization. We prioritize consumer satisfaction above all </p>
                </div>
            </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    {{-- <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

        <div class="row">
        <div class="col-lg-6 video-box">
            <img src="{{ asset('img/why-us.jpg') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

        </div>
        </div>

    </div>
    </section><!-- End Why Us Section --> --}}

    <!-- ======= Features Section ======= -->
    <section class="features">
    <div class="container">

        <div class="section-title">
        <h2>Services</h2>
        </div>

        <div class="row" data-aos="fade-up">
        <div class="col-md-5">
            <img src="{{ asset('img/features-1.svg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
            <h3>DISPLAY | MAINSTREAM</h3>
            <p class="font-italic">
                Our strong belief suggests that display campaigns & branding will help you move up the ladder from your current positioning.
            </p>
        </div>
        </div>

        <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
            <img src="{{ asset('img/features-2.svg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>SOCIAL</h3>
            <p class="font-italic">
                We support objectives like “likes, installs, shares, engagements” and use them to drive Growing ROI on Ad Spends (GRAS).
            </p>
        </div>
        </div>

        <div class="row" data-aos="fade-up">
        <div class="col-md-5">
            <img src="{{ asset('img/features-3.svg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5">
            <h3>MOBILE SUBSCRIPTIONS</h3>
            <p>With a focus on the end customer, aims to optimize customer experience with the use of right communication, context and rich creative experience.</p>
        </div>
        </div>

        <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
            <img src="{{ asset('img/features-4.svg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>EMAIL / SMS / VOICE / SHORT CODES / CMS</h3>
            <p class="font-italic">
                Transactional and promotional Email/ Sms services being provided with options of integrating with clients legacy system.
            </p>
        </div>
        </div>

    </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->
@endsection
<!-- ======= Hero Section ======= -->
