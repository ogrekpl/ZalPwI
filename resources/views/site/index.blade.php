@extends('layouts.app')

@section('content')
    <section class="page-section about" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="about-item mx-auto">
                        <img class="img-fluid" src="assets/img/Picture_1.jpg"/>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <h3>{{ __('lang.s1')}}</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-primary text-white mb-0" id="salesforce">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <img class="img-fluid" src="assets/img/salesforce.png"/>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <h3>{{ __('lang.s2')}}</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-primary2" id="experience">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <img class="img-fluid" src="assets/img/vlocity.png"/>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-column">
                    <h3>{{ __('lang.s3')}}</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
