@extends('layouts.app')

@section('content')

<main id="main">
<!-- ======= Our Team Section ======= -->
<section class="breadcrumbs">
    <div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Our Team</h2>
        <ol>
        <li><a href="/">Home</a></li>
        <li>Our Team</li>
        </ol>
    </div>
    </div>
</section><!-- End Our Team Section -->
      <!-- ======= Team Section ======= -->
<section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/t1.png') }}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center p-1" style="background: rgba(209, 217, 230,0.5)">
                        <h4>Tarun Nayyar</h4>
                        <span>CEO & Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/t2.png') }}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center p-1">
                        <h4>Paramveer Singh</h4>
                        <span>Manager - Business</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/t3.png') }}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center p-1">
                        <h4>Vishal Tyagi</h4>
                        <span>Asst. Manager - Operations</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/t4.png') }}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center p-1">
                        <h4>Bharat Adhana</h4>
                        <span>Asst. Manager - Operations</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/t5.png') }}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center p-1">
                        <h4>Anurag Karla</h4>
                        <span>Asst. Manager - Operations</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/t6.png') }}" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="icofont-twitter"></i></a>
                        <a href=""><i class="icofont-facebook"></i></a>
                        <a href=""><i class="icofont-instagram"></i></a>
                        <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center p-1">
                        <h4>Nishant Makhija</h4>
                        <span>Executive Operations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->
</main><!-- End #main -->
@endsection