@extends('layouts.layout')
@section('content')
<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/cake.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/circus.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/game.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/safe.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="#">
                <i class="fa fa-download mr-2"></i>
                Download Now!
            </a>
        </div>
    </div>
</section>

@endsection