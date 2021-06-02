<?php include 'top-page/header.php'; ?>

<?php

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { ?>

    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>StreetClub</title>


    <header>
        <div id="top"></div>
        <section id="hero">
            <!--navBar-->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
                <div class="container">
                    <a href="#"><img src="img/logo.png" alt="logo" style="width: 90px;" /> </a>
                    <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Workouts</a>
                                <div class="dropdown-menu text-center" style="background: rgba(0,0,0,0.7)" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-toggle-split text-white" href="warmUp.php">WarmUp - Stretching</a><br />
                                    <a class="dropdown-toggle-split text-white" href="chest.php">Chest - Tricept</a><br />
                                    <a class="dropdown-toggle-split text-white" href="back.php">Back - Biceps</a><br />
                                    <a class="dropdown-toggle-split text-white" href="legs.php">Legs - Abs</a><br />
                                    <a class="dropdown-toggle-split text-white" href="hit.php">Hiit</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="personalizedWk.php" class="nav-link text-white">Personalized Workouts</a>
                            </li>
                            <li class="nav-item">
                                <a href="#services1" class="nav-link text-white">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#gallery1" class="nav-link text-white">Workout Gallery</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>&ensp;<?= $_SESSION['user_full_name'] ?></a>
                                <div class="dropdown-menu text-center" style="background: rgba(0,0,0,0.7) !important;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-toggle-split text-white" href="logout.php"><i class="fas fa-sign-out-alt"></i>&ensp;Log-out</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link text-white">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--end navBar-->
        </section>
        <div class="overlay"></div>
        <video id="myvideo" autoplay muted loop>
            <source src="video/video_2.mp4" type="video/mp4">
        </video>
    </header>

    <body>
        <!--Section About Us-->
        <section id="features" class="aboutMeBackground">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h3 style="color:black !important;">ABOUT ME</h3>
                        <p class="text-justify mx-5 p-black" style="font-size:23px;">This site is based on Calisthenics which is a lesser known sport. I have become aware of it at the age of 17. Although I have always been quite an active individual the results of my
                            lifestyle were not showing physically.<br /><br /> The first results I had ever seen were while practicing this sport. Notwithstanding the fact that they were not immediate, because all the information I knew at the time was vague, since in
                            the beginning I was not practising in a professional setting. After a while I managed to include myself in groups of professional athletes, who I owe
                            my results and my knowledge to.<br /><br /> After many years of experience I have grown a liking to helping my friends and acquaintances with their fitness journey. With this project I am trying
                            to extend my reach and help more people get a better hold of their physical and mental state through exercise.<br /><br />
                        </p>
                    </div>
                    <div class="col-md-6 no-space">
                        <img src="img/image-top.jpg" class="img-fluid w-100 max-width: 100%; height: auto;" />
                    </div>
                </div>
                <div id="services1"></div>
        </section>
        <!-- End Section About Us-->

        <!--Section Services-->
        <section id="services">
            <h3>Services</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a class="fas fa-4x fa-running" style="color:green;"></a><br /><br /><br />
                        <h4 href='#'>WarmUp<br />Stretching</h4><br />
                        <p>Two crucial elements that put up a base for a healty training process</p>
                    </div>

                    <div class="col-md-3">
                        <a class="fas fa-4x fa-dumbbell" style="color:blue;"></a><br /><br /><br />
                        <h4 href='#'>Free<br />Workouts</h4><br />
                        <p>Well established programmes that assure maximum performance during training</p>
                    </div>

                    <div class="col-md-3">
                        <a class="fas fa-4x fa-heartbeat" style="color:red;"></a><br /><br /><br />
                        <h4 href='#'>Hiit<br /><a class="text-capitalize">(High-intensity interval training)</a></h4><br />
                        <p>These type of exercises have benefits for the cardiovascular system on top of the physical benefits</p>
                    </div>

                    <div class="col-md-3">
                        <a class="fas fa-4x fa-clipboard-list" style="color:white;"></a><br /><br /><br />
                        <h4 href='#'>Personalized<br />Workouts</h4><br />
                        <p>The personalization of workout programmes brings quicker and better results</p>
                    </div>
                </div>
            </div>
            <div id="gallery1"></div>
        </section>
        <!--End Section Services-->

        <!--Section Gallery-->
        <section id="gallery">
            <div class="container-fluid">
                <h3>Workout Gallery</h3>
                <div class="row no-space">
                    <div class="col-md-6">
                        <img src="img/img-1.jpg" class="img-fluid w-100 max-width: 100%; height: auto;" alt="gallery" />
                    </div>
                    <div class="col-md-6">
                        <img src="img/img-21.jpg" class="img-fluid w-100 max-width: 100%; height: auto; " alt="gallery" />
                    </div>
                    <div class="col-md-6">
                        <img src="img/img-31.jpg" class="img-fluid w-100 max-width: 100%; height: auto; " alt="gallery" />
                    </div>
                    <div class="col-md-6">
                        <img src="img/img-41.jpg" class="img-fluid w-100 max-width: 100%; height: auto; " alt="gallery" />
                    </div>
                </div>
            </div>
        </section>

        <!--End Section Gallery-->



        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            var nav = document.querySelector('nav');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 100) {
                    nav.classList.add('bg-secondary');
                } else {
                    nav.classList.remove('bg-secondary');
                }
            });
        </script>
    </body>

    <?php include 'top-page/footer.php'; ?>

    </html>
<?php
} else {
    header("Location: login.php");
}
?>