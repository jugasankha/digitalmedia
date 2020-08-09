@extends('layouts.app')

@section('content')
<main id="main">
    <section class="breadcrumbs">
        <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Our Team</h2>
            <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/services">Our Services</a></li>
            <li>{{ $service_title }}</li>
            </ol>
        </div>
        </div>
    </section>
    <section class="about" data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <div class="section-title">
                <h2>{{ $service_title }}</h2>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <article class="entry">
                        <div class="entry-img">
                            <img
                                src="{{ asset('img/services/' . $img. '.jpg') }}"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
        
                        <div class="entry-content text-justify">
                            <p>
                                {!! $content !!}
                            </p>
                            
                        </div>
                    </article>
                </div>
            </div>
            
        </div>
    </section>
</main>    
@endsection