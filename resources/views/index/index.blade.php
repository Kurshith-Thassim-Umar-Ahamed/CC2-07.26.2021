@extends('layouts.app')

@section('content')

<body>

    <section id="title">
        <div class="container-fluid">
            
            <!-- Nav Bar -->

            <nav class=" navbar navbar-expand-lg navbar-dark">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #F0A500;" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #F0A500;" href="/restaurant-view">Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" style="color: #F0A500;">Eat.lk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #F0A500;" href="/cart-view">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #F0A500;" href="/contactus-view">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark fas fa-user-circle"
                                    style="color: #F0A500;"></i></button>
                                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/user-view">Your Account</a></li>
                                    <li><a class="dropdown-item" href="/login-view">Login</a></li>
                                    <li><a class="dropdown-item" href="/register-view">Register</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Title -->

            <div class="row">
                <div class="col-lg-6">
                    <h1 class="big-heading">Why starve when you have us.</h1>
                    <button type="button" class="btn btn-success btn-lg download-button"><i class="fab fa-apple"></i>
                        Download
                    </button>
                    <button type="button" class="btn btn-outline-light btn-lg download-button"><i
                            class="fab fa-google-play"></i>
                        Download</button>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Enter your craving"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- For You -->
    <section id="forYou">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/carousal1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/carousal2.jpg" class="d-block w-100" alt="...">
                </div>
                <a class="carousel-control-prev" href="#forYou-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#forYou-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- For You recommendations -->
    <section id="forYouRecom">

        <div class="row">
            <h1>For You</h1>
            <div class="col-sm-3">
                <div class="forYouRecom-card" style="width: 18rem;">
                    <img src="images/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pizza Hut</h5>
                        <p class="card-text">Pizza hut provides pizza and other Italian-American dishes, including pasta, side dishes and desserts</p>
                        <a href="#" class="btn btn-primary">Visit Restaurant</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="forYouRecom-card" style="width: 18rem;">
                    <img src="images/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pastamania</h5>
                        <p class="card-text">Bringing a piece of Italy to Sri Lanka, Pastamania is a popular restaurant chain specialises in crafting up Italian delicacies pastas</p>
                        <a href="#" class="btn btn-primary">Visit Restaurant</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="forYouRecom-card" style="width: 18rem;">
                    <img src="images/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chinese Dragon Cafe</h5>
                        <p class="card-text">The Chinese Dragon Café (Pvt) Ltd, A restaurant chain Started in 1942 offering authentic Chinese food refined specifically to suit the local palate.</p>
                        <a href="#" class="btn btn-primary">Visit Restaurant</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="forYouRecom-card" style="width: 18rem;">
                    <img src="images/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dessert Bar</h5>
                        <p class="card-text">Your heartfelt desserts tasts under one roof.</p>
                        <a href="#" class="btn btn-primary">Visit Restaurant.</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    <!-- Categories -->
    <section id="categories">
        
        <h1>Categories</h1>
        <div class="category_img">
        <img height="auto" width="20%" src="images/1.jpg" class="img-thumbnail" alt="...">
        <img height="20%" width="20%" src="images/2.jpg" class="img-thumbnail" alt="...">
        <img height="20%" width="20%" src="images/3.jpg" class="img-thumbnail" alt="...">
        <img height="20%" width="20%" src="images/4.jpg" class="img-thumbnail" alt="...">
    </div>
    </section>

    <!-- Reviews section -->
    <section id="reviews">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2>Best food delivery app in town.</h2>
                </div>
                <div class="carousel-item">
                    <h2 class="reviews-text">Fast, reliable and tasty .</h2>
                </div>
                <div class="carousel-item">
                    <h2 class="reviews-text">Best Service in town .</h2>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

    </section>

    <!-- Footer -->

    <footer id="footer">

        <p class="footer-name fab" style="color: #F0A500;">Hirushi Athukorala</p>
        <i class="footer-icons fab fa-linkedin"></i>
        <p class="footer-name fab" style="color: #F0A500;">Oshada Wanigasekara</p>
        <i class="footer-icons fab fa-linkedin"></i>
        <p class="footer-name fab" style="color: #F0A500;">Umar Ahamed</p>
        <i class="footer-icons fab fa-linkedin"></i>
        <p class="float-right"><a href="#" style="color: #F0A500;">Back to top</a></p>


    </footer>



@endsection