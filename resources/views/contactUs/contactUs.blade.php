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
    </head>

    <body>

        <!--Contact Us form -->
        <section id="contactUs-form">
            <div class="text-format">
                <h1>Send us a Message</h1>
            </div>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="name" class="form-control" id="inputNameContact">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmailContact">
                </div>
                <div class="col-12">
                    <label for="inputSubject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="inputSubjectContact">
                </div>
                <div class="mb-3">
                    <label for="textArea" class="form-label">Your Message</label>
                    <textarea class="form-control" id="textareaContact" rows="3"></textarea>
                </div>
            </form>
            <button type="button" class="btn btn-primary">Send Message</button>
        </section>

        <section id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.761503165684!2d79.85980196208999!3d6.919090552851194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596d3cb8fe07%3A0x2b0ae2edd563a661!2sAsia%20Pacific%20Institute%20of%20Information%20Technology%20(APIIT)!5e0!3m2!1sen!2slk!4v1626210826896!5m2!1sen!2slk"
                width="1024" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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