@extends('layouts.app')

@section('content')

<body>
  <section id="nav">
    <div class="container-fluid">

      <nav class=" navbar navbar-expand-lg navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  
  
  <!-- Account display Nav bar -->
  <section id="customer-restaurant-navBar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="customer-restaurant-navBar">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Your Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Payments</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </section>

  <!-- Account display -->
  <section id="account">
    <div class="profilePic"></div>

    <h1>My Account</h1>
    <div class="row">
      <form>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="mobile">Mobile No:</label><br>
        <input type="text" id="mNo" name="mobileNo">
      </form>

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