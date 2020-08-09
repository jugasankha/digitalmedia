@extends('layouts.app')

@section('content')
<main id="main">
    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
            <h2>About Us</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>About Us</li>
            </ol>
            </div>
        </div>
    </section><!-- End About Us Section -->
        <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('img/team1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>App Alley Pvt Ltd</h3>
                    <p class="font-italic">
                        Tarsan specializes in providing two-fold solutions for your digital needs;
                    <ul>
                        

                        <li><i class="icofont-check-circled"></i> Quality Audience with Worldwide Reach (QAWR)</li>
                        <li><i class="icofont-check-circled"></i> Growing ROI on Ad Spends (GRAS)</li>
                        
                    </ul>
                    <p>
                        We are a data driven technology destination for all of your digital needs. Optimize returns through pertinent targeting and insights driven optimisations.




                    </p>
                    <p>
                        Not only that, with our in-house tracking and analytics platform AdMenu , we understand the pulse of our users across the advertisement platform & Audience Behavior Trends (ABT) to help us manage our campaigns.
                    </p>
                    <p>
                        With more than a decade of experience, our team is proficient enough to deliver product & solutions to enterprises and consumers by leveraging our understanding of dynamic channels of advertising.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    {{-- Start Brand section --}}
    <section class="about" data-aos="fade-up" style="background: rgb(51, 214, 165, 0.2)">
        <div class="section-title">
            <h2>Our Esteemed Partners</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/airtel.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/databack.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/itc.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/lava.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/ndtv.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/airtel-pb.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/wynk.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/disney.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/mirae.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/jll.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/panasonic.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/yeahmobi.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/apollo-munich.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/kimia.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/ett.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/nazara.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/zeropark.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <img src="{{ asset('img/brands/repero.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    {{--End of Brand section --}}
        <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
        <div class="container">
            <div class="row counters">
                <div class="col-md-4  text-center">
                    <span class="d-inline mr-0" data-toggle="counter-up">427</span>
                    <span class="d-inline ml-0" >+</span>
                    <p>Partners</p>
                </div>
                <div class="col-md-4 text-center">
                    <span class="d-inline mr-0" data-toggle="counter-up">400</span>
                    <span class="d-inline ml-0" >K+</span>
                    <p>Leads</p>
                </div>
                <div class="col-md-4  text-center">
                    <span class="d-inline mr-0" data-toggle="counter-up">28</span>
                    <span class="d-inline ml-0" >K+</span>
                    <p>Offers</p>
                </div>
                
            </div>
            <div class="row counters">
                <div class="col-md-4  text-center">
                    <span class="d-inline mr-0" data-toggle="counter-up">300</span>
                    <span class="d-inline ml-0" >M+</span>
                    <p>Clicks</p>
                </div>
                <div class="col-md-4 text-center">
                    <span class="d-inline mr-0" data-toggle="counter-up">43</span>
                    <span class="d-inline ml-0" >+</span>
                    <p>Brands</p>
                </div>
                <div class="col-md-4  text-center">
                    <span class="d-inline mr-0" data-toggle="counter-up">30</span>
                    <span class="d-inline ml-0" >K+</span>
                    <p>Cups of Coffee</p>
                </div>
                
            </div>
        </div>
    </section><!-- End Facts Section -->
        <!-- ======= Our Skills Section ======= -->
    <!-- End Our Skills Section -->
            <!-- ======= Tetstimonials Section ======= -->
    <!-- End Ttstimonials Section -->
</main>
@endsection