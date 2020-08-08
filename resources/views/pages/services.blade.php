@extends('layouts.app')
@section('content')
<main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Our Services</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Our Services</li>
            </ol>
            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->
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
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
            <div class="col-lg-6 video-box">
                <img src="{{ asset('img/why-us.jpg') }}" class="img-fluid" alt="">
                {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">Specializes in providing two-fold solutions for your digital needs</a></h4>
                <p class="description">
                    
                        Growing ROI on Ad Spends (GRAS) as well as
                        Quality Audience with Worldwide Reach (QAWR)
                    
                </p>
                </div>

                <div class="icon-box">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title"><a href="">How do we do it?</a></h4>
                <p class="description">We are a data driven technology destination for all of your digital needs. Optimize returns through pertinent targeting and insights driven optimisations.</p>
                </div>

            </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
        <div class="section-title">
            <h2>SERVICES</h2>
        <div class="container">

        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/service-details-1.jpg') }}" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><a href="#">DISPLAY | MAINSTREAM</a></h5>
                    <p class="card-text">Our campaigns inspire a trigger of response by keeping our displays informative and interactive.
                        With our equilibrium of creative experts and domain strategy specialists, 
                        ..
                        {{-- our creative suite of interactive Video, Rich Media and Native meets intelligent targeting.


                        Our In-house Technology Platform & Partner integrations with Exchanges & DSPs allows us to target Quality Audience with Worldwide Reach (QAWR) to achieve the right Branding objectives. --}}
                    </p>
                    <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/service-details-2.jpg') }}" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><a href="#">SOCIAL</a></h5>
                    <p class="card-text">
                        Our focus is not limited to network and exchanges, we walk a mile further into data consolidation and optimization with social media platforms. With the growing use of social, the audience size is humongous...
                {{-- The use-case therefore becomes implied. With our subject matter experts and actionable insights from our brand researchers, we are enabled to optimize the social platforms and monetize returns. We support objectives like “likes, installs, shares, engagements” and use them to drive Growing ROI on Ad Spends (GRAS) for our campaigns.  --}}

                    </p>
                    <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/service-details-3.jpg') }}" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><a href="#">
                        MOBILE SUBSCRIPTIONS</a></h5>
                    <p class="card-text">With an intent to increase the average revenue per telecom user beyond the calls and messages, Mobile Subscriptions or Value Added Services were introduced...
                        {{-- Tarsan, with a focus on the end customer, aims to optimize customer experience with the use of right communication, context and rich creative experience. --}}
{{-- 
                        We offer customer demographic specific packages to improve the utility and transactional value on your Mobile Subscriptions, be it CPA, CPS, CPAS, CPL & others. With our thousands of existing Mobile Subscription campaigns, we have been successful in decreasing the cost of User Acquisition & Growing ROI on Ad Spends (GRAS). --}}
                    </p>
                    <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/service-details-4.jpg') }}" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><a href="#">EMAIL / SMS / VOICE / SHORT CODES / CMS</a></h5>
                    <p class="card-text">
                        With our team of specialists & technology, we have integrated SMS, emails, Voices, short codes with various ERP systems. Not only can we automate alerts on transactions,... 
                        {{-- we can also help you set reminders and 
                        engaging tools for your customers. Ours specialists work hard to provide you customized reports with insights of your campaigns. We offer dashboard access to each and every client with admin and multiple user login. We also, through our integrated solution over sms email voices short codes and virtual mobile numbers provide our clients to run various marketing and promotional /contests/etc. campaigns across India seamlessly. --}}
                    </p>
                    <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
                </div>
            </div>
            </div>

        </div>
    </section><!-- End Service Details Section -->

    {{-- <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
            <h2>SOCIAL</h2>
            <p>
                </p>
            </div>

            <div class="row no-gutters">

            <div class="col-lg-4 box">
                <h3>Free</h3>
                <h4>$0<span>per month</span></h4>
                <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
            </div>

            <div class="col-lg-4 box featured">
                <h3>Business</h3>
                <h4>$29<span>per month</span></h4>
                <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
            </div>

            <div class="col-lg-4 box">
                <h3>Developer</h3>
                <h4>$49<span>per month</span></h4>
                <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                </ul>
                <a href="#" class="get-started-btn">Get Started</a>
            </div>

            </div>

        </div>
    </section><!-- End Pricing Section --> --}}

</main><!-- End #main -->
@endsection