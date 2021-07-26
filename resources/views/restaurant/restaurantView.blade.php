@extends('layouts.app')

@section('content')

<body>

    <section id="nav">
        <div class="container-fluid">

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
        </div>
    </section>

    <!-- Sort section -->
    <section id="sort">
        

        <div class="restaurant-list-dropdowns">
            <h1>Price</h1>
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                All
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">I'm on a budget</a></li>
                <li><a class="dropdown-item" href="#">Lets spend a little more</a></li>
                <li><a class="dropdown-item" href="#">Good food cost big money</a></li>
            </ul>
        </div>

        <div class="restaurant-list-dropdowns">
            <h1>Location</h1>
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                All
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Near me</a></li>
                <li><a class="dropdown-item" href="#">Within Colombo</a></li>
                <li><a class="dropdown-item" href="#">Around colombo</a></li>
            </ul>
        </div>

        <div class="restaurant-list-dropdowns">
            <h1>Cuisine</h1>
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                All
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Chinese</a></li>
                <li><a class="dropdown-item" href="#">Pasta</a></li>
                <li><a class="dropdown-item" href="#">Pizza</a></li>
                <li><a class="dropdown-item" href="#">Desserts</a></li>
                <li><a class="dropdown-item" href="#">Rice and Curry</a></li>
            </ul>
        </div>

        
    </section>

    <div class="sortSearchButton">
        <button type="button" class="btn btn-success btn-lg">Search</button>
      </div>

    <section id="restaurant-list">
        
        <div class="row">
        <div class="restaurant-list-card" style="width: 20rem;">
            <img src="images/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pizza Hut</h5>
              <p class="card-text">Pizza hut provides pizza and other Italian-American dishes, including pasta, side dishes and desserts</p>
              <a href="#" class="btn btn-primary">Visit Restaurant</a>
            </div>
          </div>

          <div class="restaurant-list-card" style="width: 20rem;">
            <img src="images/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pastamania</h5>
              <p class="card-text">Bringing a piece of Italy to Sri Lanka, Pastamania is a popular restaurant chain specialises in crafting up Italian delicacies pastas</p>
              <a href="#" class="btn btn-primary">Visit Restaurant</a>
            </div>
          </div>

          <div class="restaurant-list-card" style="width: 20rem;">
            <img src="images/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chinese Dragon Cafe</h5>
              <p class="card-text">The Chinese Dragon Café (Pvt) Ltd, A restaurant chain Started in 1942 offering authentic Chinese food refined specifically to suit the local palate.</p>
              <a href="#" class="btn btn-primary">Visit Restaurant</a>
            </div>
          </div>

          <div class="restaurant-list-card" style="width: 20rem;">
            <img src="images/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dessert Bar</h5>
              <p class="card-text">Your heartfelt desserts tasts under one roof.</p>
              <a href="#" class="btn btn-primary">Visit Restaurant</a>
            </div>
          </div>

          <div class="restaurant-list-card" style="width: 20rem;">
            <img src="images/koththu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Koththu Factory</h5>
              <p class="card-text">The most authentic SriLankan street food straight to your home with koththu factory.</p>
              <a href="#" class="btn btn-primary">Visit Restaurant</a>
            </div>
          </div>

          <div class="restaurant-list-card" style="width: 20rem;">
            <img src="images/taco.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Taco Bell</h5>
              <p class="card-text">Taco bell an American food conglomarant providing you with the most authentic mexican cuisine.</p>
              <a href="#" class="btn btn-primary">Visit Restaurant</a>
            </div>
          </div>

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