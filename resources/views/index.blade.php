<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="header">
        <!-- Logo -->
        <a href="#" class="logo">KD</a>
        <!-- Hamburger icon -->
        <input class="side-menu" type="checkbox" id="side-menu" />
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
        <!-- Menu -->
        <nav class="nav">
            <ul class="menu">
                <li><a href="#">About</a></li>
                <li><a href="#skill">Skills</a></li>
                <li><a href="#services">Service</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="banner mb-5">
        <img src="{{ asset('images/image1.jpg') }}">
    </div>

    {{-- start skill --}}
    <section class="skill mb-5" id="skill">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h2 class="mb-4 text-dark">
                            SKILLS
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card card mb-3">
                        <div class="card-body">
                            <h6><i class="fab fa-html5 fa-lg" style="color: #e34f26;"></i> HTML</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card card mb-3">
                        <div class="card-body">
                            <h6><i class="fab fa-css3 fa-lg" style="color: #4B96D4;"></i> CSS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card card mb-3">
                        <div class="card-body">
                            <h6><i class="fab fa-js fa-lg" style="color: #f7df1e;"></i> JavaScript</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card card mb-3">
                        <div class="card-body">
                            <h6><i class="fab fa-bootstrap fa-lg" style="color: #712BBF;"></i> Bootstrap</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card card mb-3">
                        <div class="card-body">
                            <h6><i class="fab fa-php fa-lg" style="color: #8993be;"></i> PHP</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card card mb-3">
                        <div class="card-body">
                            <h6><i class="fab fa-laravel fa-lg" style="color: #ff2d20;"></i> Laravel</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card card mb-3">
                        <div class="card-body">
                            <h6><i class="fa fa-database fa-lg" style="color: #00758f;"></i> MySQL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card card mb-3">
                        <div class="card-body">
                            <h6><i class="fab fa-java fa-lg" style="color: #f8981d;"></i> Java</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- end skill --}}


    {{-- start services --}}
    <section class="services mb-4" id="services">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h2 class="mb-10 text-white">
                            SERVICES
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card mb-4">
                        <div class="card-body">
                            <h3 class="text-center"><i class="fa fa-code fa-lg"></i></h3>
                            <h6 class="text-center">Web Development</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card mb-4">
                        <div class="card-body">
                            <h3 class="text-center"><i class="fa fa-laptop-code fa-lg"></i></h3>
                            <h6 class="text-center">Web Design</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card mb-4">
                        <div class="card-body">
                            <h3 class="text-center"><i class="fa fa-server fa-lg"></i></h3>
                            <h6 class="text-center">Service 3</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card mb-4">
                        <div class="card-body">
                            <h3 class="text-center"><i class="fa fa-file-alt fa-lg"></i></h3>
                            <h6 class="text-center">Documentation</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- end services --}}

    {{-- start projects --}}
    <section class="projects mb-4" id="projects">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h2 class="mb-10 text-dark">
                            PROJECTS
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="project-card card mb-4">
                        <div class="card-body">
                            <h6>Project 1</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-card card mb-4">
                        <div class="card-body">
                            <h6>Project 2</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-card card mb-4">
                        <div class="card-body">
                            <h6>Project 3</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-card card mb-4">
                        <div class="card-body">
                            <h6>Project 4</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end projects --}}

    {{-- start contact --}}
    <section class="contact" id="contact">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h2 class="mb-4 text-dark">
                            CONTACT US
                        </h2>
                    </div>
                </div>
            </div>
            <div class="contact-card card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 bg-secondary text-white text-center">
                            <h3 class="text-dark mb-3 mt-3">Contacts</h3>

                            <div class="address mb-4">
                                <h4>
                                    <i class="fa fa-map-marker"></i>
                                    Address
                                </h4>
                                <h6>No.1 Oxford Street, Accra.</h6>
                            </div>

                            <div class="phone mb-4">
                                <h4>
                                    <i class="fa fa-phone"></i>
                                    Call
                                </h4>
                                <h6> +233 208 595 739</h6>
                                <h6>+233 535 556 411</h6>
                            </div>


                            <div class="email mb-4">
                                <h4>
                                    <i class="fa fa-envelope"></i>
                                    Email
                                </h4>
                                <h6>danquahkofi520@gmail.com</h6>
                            </div>

                        </div>

                        <div class="col-md-7">
                            <form method=post action="">
                                <h4 class="text-center">Send us a Message</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Your Subject</label>
                                            <input type="text" name="subject" id="subject"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Your Name</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label>Message</label>
                                            <textarea type="text" name="message" id="message" class="form-control" rows="5">
                                                </textarea>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-success">Send</a>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end contact --}}


    {{-- start footer --}}
    <footer>
        <div class="container row">
            <div class="col-md-4 text-center">
                Connect with Us
                <ul>
                    <a href=""><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href=""><i class="fab fa-github fa-lg"></i></a>
                    <a href=""><i class="fab fa-whatsapp fa-lg"></i></a>
                    <a href=""><i class="fab fa-twitter fa-lg"></i></a>
                </ul>
            </div>

            <div class="col-md-4 text-center">
                Quick Links
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#skill">Skills</a></li>
                    <li><a href="#services">Service</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4">
            </div>
        </div>
        <h6>&copy; Copyright 2024.All rights reserved</h6>
    </footer>
    {{-- end footer --}}

</body>
<script src="{{ asset('js/index.js') }}"></script>

</html>
