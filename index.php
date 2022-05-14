<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8">
        <meta name="description" content="Gym Website">
        <meta name="author" content="Manohar">
        <title>Neptua | Gym</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome Icons -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        
        <!-- Google Fonts - Use: " font-family: 'Raleway', sans-serif; " to reference it-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:300,700' rel='stylesheet' type='text/css'>

        <!-- Google Fonts - Use: " font-family: 'Roboto', sans-serif; " to reference it-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
        
        <!-- Ekko Lightbox Image Gallery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
                
        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- Header Section -->
        <header>
            <nav class="navbar navbar-expand-md navbar-toggleable-md navbar-dark nav-color fixed-top">
                <a class="pl-4 navbar-brand" href="index.php"><img class="img img-fluid" src="assets/img/logo1.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto small">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="facilities.php">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="membership.php">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonials.php">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="backnd.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Home Banner -->
        <section id="home-banner">
            <div class="container-fluid no-gutters">
                <div class="row">
                    <div class="col-md-12 text-center banner-display">
                        <h1>NO PAIN NO GAIN</h1>
                        <h4>Motivation is what gets you started. Habit is what keeps you going.</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="fitness-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-white text-center">
                        <h4 class="pb-5">WORLD CLASS FITNESS</h4>
                        <i class="fa fa-child fa-5x"></i>
                        <p class="pt-5 pb-4 lead">At Neptua Gym, everything we do from top to bottom is of the highest quality to ensure we’re equipped to help you reach your goals of a healthy and fit lifestyle. We follow a globally proven fitness training module with state-of-the-art infrastructure and delivery methodology and continuous up gradation through training programs.</p>
                        <a href="membership.php#membership-area" class="btn btn-outline-dark ripple" id="banner-button">JOIN US TODAY</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Signup section -->
        <section id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 p-5">
                        <img class="img img-fluid" src="assets/img/signupimage.jpg">
                    </div>
                    <div class="col-md-6 p-5">
                        <h5 class="text-white pb-3">Sign Up For A Free Training Session!</h5>
                        <div id="form-messages"></div>
                        <form class="text-white" action="mailer.php" method="POST" id="ajax-contact">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-color">Start Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features" data-type="background" data-speed="5">
            <div class="features-overlay">
            <div class="container">
                <div class="row text-center py-5 features-details">
                    <div class="col-md-3">
                        <i class="fa fa-chain-broken font-awesome"></i>
                        <h5 class="text-white pt-3">Strength</h5>
                        <p class="text-white pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, ornare es volutpat etra</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-bicycle font-awesome"></i>
                        <h5 class="text-white pt-3">Fitness & Cardio</h5>
                        <p class="text-white pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, ornare es volutpat etra</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-skyatlas font-awesome"></i>
                        <h5 class="text-white pt-3">Flexibility & Rest</h5>
                        <p class="text-white pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, ornare es volutpat etra</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-heartbeat font-awesome"></i>
                        <h5 class="text-white pt-3">Health & Diet</h5>
                        <p class="text-white pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, ornare es volutpat etra</p>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Results Section -->
        <section id="results">
            <div class="container py-5">
                
                <div class="row">
                    <h4 class="pb-3 col-md-12 text-white text-center">REAL WORLD RESULTS</h4>
                    <div class="col-md-6 results-details p-5">
                        <div class="row">
                            <div class="col-md-3 text-center pb-3">
                               <img class="img img-fluid" src="assets/img/customer1.jpg"> 
                            </div>
                            <div class="col-md-9 text-white" id="name-hover">
                                <p class="text-muted">“The trainers at Neptua Gym have helped me reach my fitness goals beyond anything I could of hoped for. I love it!”</p>
                                <p>- Mary Jane</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 results-details p-5">
                        <div class="row">
                            <div class="col-md-3 text-center pb-3">
                               <img class="img img-fluid" src="assets/img/customer2.jpg"> 
                            </div>
                            <div class="col-md-9 text-white" id="name-hover">
                                <p class="text-muted">“The atmosphere at Neptua Gym is amazing, the people are even better. All in all, it is a great place to work out.”</p>
                                <p>- John Doe</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 results-details p-5">
                        <div class="row">
                            <div class="col-md-3 text-center pb-3">
                               <img class="img img-fluid" src="assets/img/customer3.jpg"> 
                            </div>
                            <div class="col-md-9 text-white" id="name-hover">
                                <p class="text-muted">“The facilities at Neptua Gym stood out to me the most. They are well maintained and have high quality equipment.”</p>
                                <p>- Katie Rose</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 results-details p-5">
                        <div class="row">
                            <div class="col-md-3 text-center pb-3">
                               <img class="img img-fluid" src="assets/img/customer4.jpg"> 
                            </div>
                            <div class="col-md-9 text-white" id="name-hover">
                                <p class="text-muted">“No bad things to say about Neptua Gym, they are top notch at every corner and truly take care of their customers.”</p>
                                <p>- Mike Meyers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </section>
        
        <!-- Facilities Section -->
        <section id="facilities">
            <div class="container">
                <h4 class="py-5 text-center text-white">HIGH PERFORMANCE FACILITIES</h4>
                <div class="row">
                    <div class="col-md-4 mb-3 text-center text-center">
                       <a data-toggle="lightbox" data-gallery="img-gallery" href="assets/img/home-image11.jpg"><img src="assets/img/home-image1.jpg" class="img img-fluid"></a>
                    </div>
                    <div class="col-md-4 mb-3 text-center">
                        <a data-toggle="lightbox" data-gallery="img-gallery" href="assets/img/home-image22.jpg"><img src="assets/img/home-image2.jpg" class="img img-fluid"></a>
                    </div>
                    <div class="col-md-4 mb-3 text-center">
                        <a data-toggle="lightbox" data-gallery="img-gallery" href="assets/img/home-image33.jpg"><img src="assets/img/home-image3.jpg" class="img img-fluid"></a>
                    </div>
                    <div class="col-md-4 mt-3 text-center">
                        <a data-toggle="lightbox" data-gallery="img-gallery" href="assets/img/home-image44.jpg"><img src="assets/img/home-image4.jpg" class="img img-fluid"></a>
                    </div>
                    <div class="col-md-4 mt-3 text-center">
                        <a data-toggle="lightbox" data-gallery="img-gallery" href="assets/img/home-image55.jpg"><img src="assets/img/home-image5.jpg" class="img img-fluid"></a>
                    </div>
                    <div class="col-md-4 mt-3 text-center">
                        <a data-toggle="lightbox" data-gallery="img-gallery" href="assets/img/home-image66.jpg"><img src="assets/img/home-image6.jpg" class="img img-fluid"></a>
                    </div>
                    <div class="col-md-12 py-5 text-center">
                        <a href="facilities.php" class="btn btn-outline-dark ripple" id="banner-button">VIEW ALL FACILITIES</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quote Section -->
        
        <section id="quote" class="text-white" data-type="background" data-speed="5">
            <div class="quote-overlay">
                <p class="lead">“ I fear not the man who has practiced 10,000 kicks once, but I fear the man who has practiced one kick 10,000 times ”</p>
                <h4>BRUCE LEE • QUOTE OF THE DAY</h4>
            </div>
        </section>

        <!-- Trainers Section -->

        <section id="trainers">
            <div class="container py-5">
                <h4 class="pb-3 text-white text-center">MEET OUR TRAINERS</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="assets/img/trainer1.jpg" class="card-img-top">
                            <div class="card-block p-3 py-5 text-white">
                                <div class="card-title">
                                    <h6>Ann Baker - Personal Trainer</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, onare volutpat.</p>
                                    <div class="icons">
                                    <a href=""><i class="fa fa-facebook" title="Facebook"></i></a>
                                    <a href="" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="assets/img/trainer2.jpg" class="card-img-top">
                            <div class="card-block p-3 py-5 text-white">
                                <div class="card-title">
                                    <h6>Mary Jane - Personal Trainer</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, onare volutpat.</p>
                                    <div class="icons">
                                    <a href=""><i class="fa fa-facebook" title="Facebook"></i></a>
                                    <a href="" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="assets/img/trainer3.jpg" class="card-img-top">
                            <div class="card-block p-3 py-5 text-white">
                                <div class="card-title">
                                    <h6>John Doe - Personal Trainer</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue nisl, onare volutpat.</p>
                                    <div class="icons">
                                        <a href=""><i class="fa fa-facebook" title="Facebook"></i></a>
                                        <a href="" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 py-5 text-center">
                    <a href="aboutus.php#trainers" class="btn btn-outline-dark ripple" id="banner-button">VIEW ALL TRAINERS</a>
                </div>
            </div>
        </section>

        <!-- Blog Section -->

        <section id="blog-news">
            <div class="container text-white py-5">
                <h4 class="text-center text-white pb-3">PERFORMANCE NEWS</h4>
                <div class="row">
                    <div class="card-columns">
                        <div class="card">
                            <img src="assets/img/blog1.jpg" class="card-img-top">
                            <div class="card-block p-4">
                                <div class="card-title">
                                    <h6>Train with free weights or your body weight?</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium, tortor vitae porttitor suscipit, sapien purus aliquet risus, eu finibus arcu ante nec risus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/img/blog2.jpg" class="card-img-top">
                            <div class="card-block p-4">
                                <div class="card-title">
                                    <h6>To be number one, train like you’re number two</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium, tortor vitae porttitor suscipit, sapien purus aliquet risus, eu finibus arcu ante nec risus.</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium, tortor vitae porttitor suscipit, sapien purus aliquet risus, eu finibus arcu ante nec risus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/img/blog3.jpg" class="card-img-top">
                            <div class="card-block p-4">
                                <div class="card-title">
                                    <h6>Nutritional advice that will keep you training</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium, tortor vitae porttitor suscipit, sapien purus aliquet risus, eu finibus arcu ante nec risus.</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium, tortor vitae porttitor suscipit, sapien purus aliquet risus, eu finibus arcu ante nec risus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/img/blog4.jpg" class="card-img-top">
                            <div class="card-block p-4">
                                <div class="card-title">
                                    <h6>Top 5 mistakes every gym member makes</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium, tortor vitae porttitor suscipit, sapien purus aliquet risus, eu finibus arcu ante nec risus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/img/blog5.jpg" class="card-img-top">
                            <div class="card-block p-4">
                                <div class="card-title">
                                    <h6>Simple principles for your next workout</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium, tortor vitae porttitor suscipit, sapien purus aliquet risus, eu finibus arcu ante nec risus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="assets/img/blog6.jpg" class="card-img-top">
                            <div class="card-block p-4">
                                <div class="card-title">
                                    <h6>The myths of shedding body fat explored</h6>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium, tortor vitae porttitor suscipit, sapien purus aliquet risus, eu finibus arcu ante nec risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 py-5 text-center">
                    <a href="blog.php" class="btn btn-outline-dark ripple" id="banner-button">READ OUR ARTICLES</a>
                </div>
            </div>
        </section>

        <!-- Join Us Section -->

        <section id="join-us">
            <div class="signup-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 text-white text-center">
                            <h4>Achieve Your Fitness Goals</h4>
                            <p>Flexible membership packages to suit all levels of training to help achieve your fitness goals</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <a href="membership.php#membership-area" class="btn btn-outline-dark ripple" id="banner-button">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Secondary Footer Section -->
        <section id="secondary-footer">
            <div class="container">
                <div class="row text-white py-5">
                    <div class="col-md-3">
                        <p class="small">COME FIND US</p>
                        <address class="text-muted">
                            125 East Main Street
                            New York City
                            New York, NY 52145
                            Phone: 1800 455 4455
                            Email: support@neptua.com
                        </address>
                    </div>
                    <div class="col-md-3">
                        <p class="small">RECENT POSTS</p>
                        <a href="blog.php" class="text-muted">Train with free weights or your body weight?</a><hr>
                        <a href="blog.php" class="text-muted">Top 5 mistakes every gym member makes</a><hr>
                    </div>
                    <div class="col-md-3">
                        <p class="small">OPENING TIMES</p>
                        <p class="mb-0 text-muted">Weekdays Monday - Friday</p>
                        <p class="mt-0 text-muted">09:00 - 19:00</p>
                        <p class="mb-0 text-muted">Weekends Saturday - Sunday</p>
                        <p class="mt-0 text-muted">09:00 - 21:00</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="assets/img/ad.jpg" class="img img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 text-center pt-3">
                        <p>&copy; Copyright 2018   |   Neptua   |   All Rights Reserved   </p>
                    </div>   
                    <div class="col-md-2 text-center pt-3">
                        <div class="footer-icons">
                            <a href=""><i class="fa fa-facebook" title="Facebook"></i></a>
                            <a href="" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="" title="Flickr"><i class="fa fa-flickr"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    </body>
</html>
