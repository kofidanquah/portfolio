<?php
require "config.php";

if (isset($_SESSION['success'])) {
    echo "<script>alert('Success! Your Message was sent');</script>";
    unset($_SESSION['success']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <title>Kofi Danquah | Portfolio</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <!-- Header -->
    <header class="header sticky-top bg-white text-dark">
        <nav class="navbar navbar-expand-lg container">
            <a href="#" class="navbar-brand logo"><img src="images/logo.png" alt="KD"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#skill" class="nav-link">Skills</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Banner -->
    <section class="banner text-center text-light d-flex align-items-center justify-content-center">
        <div class="row container">
            <div class="col-12 col-md-7 text-center mb-4 mb-md-0">
                <h1>HI 👋, I'M KOFI DANQUAH</h1>
                <h3>A full-stack software developer based in Ghana.</h3>
                <a href="#projects" class="btn btn-warning btn-md mt-4">My Latest Projects</a>
            </div>
            <div class="col-12 col-md-5">
                <img src="images/Kofi.jpg" alt="Portrait of Kofi Danquah" class="img-fluid rounded-circle" loading="lazy">
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skill" class="skills py-5">
        <div class="container">
            <h2 class="text-center mb-4">SKILLS</h2>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6 text-center">
                    <i class="fab fa-html5 fa-3x text-warning"></i>
                    <h5 class="mt-2">HTML</h5>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <i class="fab fa-css3 fa-3x" style="color: #4B96D4;"></i>
                    <h5 class="mt-2">CSS</h5>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <i class="fab fa-js fa-3x" style="color: #f7df1e;"></i>
                    <h5 class="mt-2">JavaScript</h5>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <i class="fab fa-bootstrap fa-3x" style="color: #712BBF;"></i>
                    <h5 class="mt-2">Bootstrap</h5>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <i class="fab fa-php fa-3x" style="color: #8993be;"></i>
                    <h5 class="mt-2">PHP</h5>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <i class="fab fa-laravel fa-3x" style="color: #ff2d20;"></i>
                    <h5 class="mt-2">Laravel</h5>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <i class="fa fa-database fa-3x" style="color: #00758f;"></i>
                    <h5 class="mt-2">MySQL</h5>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <i class="fab fa-java fa-3x" style="color: #f8981d;"></i>
                    <h5 class="mt-2">Java</h5>
                </div>

                <!-- Repeat for other skills -->
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="about py-5 bg-light">
        <div class="container text-center">
            <h2>About Me</h2>
            <p>I am Kofi Oduro Danquah, a software developer passionate about creating impactful digital solutions.</p>
            <p>
                I believe that great software is a blend of creativity and logic. Whether it's crafting visually appealing web interfaces or writing clean, efficient code, I strive for excellence in every detail. My process emphasizes collaboration, understanding your
                vision, and turning ideas into reality.
            </p>
            <p>
                Experience & Expertise With about 3 years of experience in the tech industry, I’ve had the privilege of working on a variety of projects—from building scalable web applications to training teams on best practices and documenting processes for seamless
                collaboration. My skills include: Web Development: Creating responsive, robust, and scalable web applications. Web Design: Designing intuitive and user-friendly interfaces. Training: Empowering teams with the knowledge to succeed in their
                technical endeavors. Documentation: Delivering clear, concise, and comprehensive technical materials.
            </p>

            <a href="downloads/kofi_danquah_resume.pdf" target="_blank" class="btn btn-primary">
                <i class="fa fa-download"></i> Download Résumé</a>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="services py-5 text-dark">
        <div class="container">
            <h2 class="text-center text-light py-2">SERVICES</h2>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-code fa-3x"></i>
                            <h5 class="mt-3">Web Development</h5>
                            <p>Building robust websites tailored to your needs with modern technologies</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-laptop-code fa-3x"></i>
                            <h5 class="mt-3">Web Design</h5>
                            <p>Crafting visually stunning and user-centric designs that make your brand stand out.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-server fa-3x"></i>
                            <h5 class="mt-3">Training</h5>
                            <p>Empowering individuals and teams with hands-on training in web technologies.</p>

                        </div>
                    </div>
                </div>
                <!-- Repeat for other services -->
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="projects py-5 bg-light container">
        <div class="">
            <h2 class="text-center mb-4">PORTFOLIO</h2>
            <div class="row g-4">
                <div class="col-md-3 text-center">
                    <div class="card hover-card">
                        <img src="images/voting.png" alt="Voting System" class="card-img-top">
                        <div class="card-body">
                            <h6>Online Voting System</h6>
                            <div class="overlay-text">A system built for seamless voting online</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card hover-card">
                        <img src="images/ticket.jpg" alt="ticket" class="card-img-top">
                        <div class="card-body">
                            <h6>Online Event Ticket</h6>
                            <div class="overlay-text">Purchase tickets for your favourite events without any difficulty</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card hover-card">
                        <img src="images/ngo.avif" alt="ngo" class="card-img-top">
                        <div class="card-body">
                            <h6>Website for NGO</h6>
                            <div class="overlay-text">Donate to help the needy in soceity. You can also become a volunteer</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card hover-card">
                        <img src="images/pos.jpg" alt="pos" class="card-img-top">
                        <div class="card-body">
                            <h6>Shop 360</h6>
                            <div class="overlay-text">Buy your products online and have it delivered to you</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card hover-card">
                        <img src="images/sms.png" alt="student Management System" class="card-img-top">
                        <div class="card-body">
                            <h6>Student Management System</h6>
                            <div class="overlay-text">A software crafted to manage educational institutions</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card hover-card">
                        <img src="images/attendance.webp" alt="attendance" class="card-img-top">
                        <div class="card-body">
                            <h6>Online Attendance</h6>
                            <div class="overlay-text">Check attendance online for attendees of schools church etc. </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card hover-card">
                        <img src="images/hms.png" alt="hotel" class="card-img-top">
                        <div class="card-body">
                            <h6>Hotel Management System</h6>
                            <div class="overlay-text">A well designed system for managing all hotel activities</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card hover-card">
                        <img src="images/estate.jpg" alt="pos" class="card-img-top">
                        <div class="card-body">
                            <h6>Real Estate Website</h6>
                            <div class="overlay-text">A website built for all housing enthusiast</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact py-5">
        <div class="container">
            <h2 class="text-center text-white">SEND A MESSAGE</h2>
            <form method="POST" action="sendEmail.php" id="myform" class="mx-auto" style="max-width: 600px;">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                </div>

                <div class="mb-3">
                    <textarea id="msg" rows="5" class="form-control" name="msg" placeholder="Your message"></textarea>
                </div>

                <a type="button" onclick="submitForm()" class="btn btn-primary w-100">Send</a>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-4">
        <p>&copy; 2024 Kofi Danquah | All Rights Reserved</p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/kofi-oduro-danquah-089a68277/" class="text-white mx-2" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
            <a href="https://github.com/kofidanquah" class="text-white mx-2" target="_blank"><i class="fab fa-github fa-2x "></i></a>
            <a href="https://wa.me/+233208595739" class="text-white mx-2" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
            <a href="https://www.twitter.com/kdanquah_" class="text-white mx-2" target="_blank"><i class="fab fa-x-twitter fa-2x "></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>