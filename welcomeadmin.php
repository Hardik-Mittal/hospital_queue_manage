<?php

require_once "config.php";

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WE CARE</title>
    <link rel="stylesheet" href="css.css">
    <title>MyHealth.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    <!--------navigation bar------->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="ix/logo1.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#department">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Our Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/login/admin.php">Medical History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/login/logout.php">Logout</a>
                    </li>

                </ul>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <div class="container mt-4">
            <h3><?php echo "Welcome " . $_SESSION['username'] ?>! You can now use this website</h3>


        </div> -->

    </section>
    <!------slider----->
    <div id="slider">
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                <li data-target="#headerSlider" data-slide-to="1"></li>
                <li data-target="#headerSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="ix/home2.jpg" class="d-block img-fluid">
                    <div class="carousel-caption">
                        <h5>Welcome To my Health Care</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="ix/home1.jpeg" class="d-block img-fluid">

                </div>
            </div>
            <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerSlider-" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-------department----->
    <section id="department">
        <div class="container">
            <h1>Department</h1>
            <div class="row department">
                <div class="col-md-3">
                    <div class="icon">
                        <i class="fa fa-heartbeat"></i>
                        <h3>Cardio</h3>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="fa fa-wheelchair"></i>
                        <h3>Nuero</h3>

                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="icon">
                        <i class="fa fa-male"></i>
                        <h3>Orthopedic</h3>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="fa fa-eye"></i>
                        <h3>Eyes Specialist</h3>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------promo----->
    <section id="promo">
        <div class="container">
            <p>Register to Avail Facilities</p>
            <a href="http://localhost/login/admin.php" class="btn btn-primary">Medical History</a>
        </div>
    </section>
    <!------Team Member------->

    <section id="team">
        <div class="container">
            <h1>Our Team</h1>
            <div class="row">
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="ix/doctor8.jpg" class="img-responsive">
                        <ul>
                            <a href="#">
                                <li><i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <li><i class="fa fa-instagram"></i>
                            </a>

                        </ul>
                    </div>
                    <h2>Akshay Kumar</h2>
                    <h3>Founder / CEO</h3>
                </div>

                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="ix/doctor7.jpg" class="img-responsive">
                        <ul>
                            <a href="#">
                                <li><i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <li><i class="fa fa-instagram"></i>
                            </a>

                        </ul>
                    </div>
                    <h2>RATAN Kumar</h2>
                    <h3>Neurologist</h3>
                </div>

                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="ix/doctor6.jpg" class="img-responsive">
                        <ul>
                            <a href="#">
                                <li><i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <li><i class="fa fa-instagram"></i>
                            </a>

                        </ul>
                    </div>
                    <h2>MANISH Kumar</h2>
                    <h3>Cardiologist</h3>
                </div>

                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="ix/doctor5.jpeg" class="img-responsive">
                        <ul>
                            <a href="#">
                                <li><i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <li><i class="fa fa-instagram"></i>
                            </a>

                        </ul>
                    </div>
                    <h2>ROHIT Kumar</h2>
                    <h3>Founder / CEO</h3>
                </div>




            </div>

        </div>

    </section>

    <!----------------priceplan------------->
    <section id="price">
        <div class="container">
            <h1>Price Plan</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>Cardio</h2>
                            <p>Heart/<span>Surgery</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>engeoplast</li>
                                <li><i class="fa fa-check-circle"></i>Biapass</li>
                                <li><i class="fa fa-check-circle"></i>dfdfsdf</li>
                                <li><i class="fa fa-times-circle"></i>sasa</li>
                            </ul>
                        </div>
                        <div class="price-button">
                            <a href="#" class="buy-btn">Buy</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>Free</h2>
                            <p>$0/<span>month</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-times-circle"></i>sasa</li>
                            </ul>
                        </div>
                        <div class="price-button">
                            <a href="#" class="buy-btn">Buy</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>Free</h2>
                            <p>$0/<span>month</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-times-circle"></i>sasa</li>
                            </ul>
                        </div>
                        <div class="price-button">
                            <a href="#" class="buy-btn">Buy</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>Free</h2>
                            <p>$0/<span>month</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-check-circle"></i>sasa</li>
                                <li><i class="fa fa-times-circle"></i>sasa</li>
                            </ul>
                        </div>
                        <div class="price-button">
                            <a href="#" class="buy-btn">Buy</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!------getintouch------>
    <section id="contact">
        <div class="container">
            <h1>Get In Touch</h1>
            <div class="row">
                <div class=" col-md-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="your Name">
                        </div>
                        <div class="form-group">
                            <input type="Number" class="form-control" placeholder="Mobile no.">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" row="4" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 contact-info">

                    <div class="follow">
                        <b>Address:</b><i class="fa fa-map-marker"></i>XYZ , lotherRoad
                    </div>
                    <div class="follow">
                        <b>Phone:</b><i class="fa fa-phone"></i>933578456
                    </div>
                    <div class="follow">
                        <b>Email:</b><i class="fa fa-email"></i>absa@gmail.com
                    </div>
                    <div class="follow">
                        <label><b>Social Handels:</b></label>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>


                    </form>
                </div>
            </div>
        </div>


    </section>

    <!------------footer-------------->
    <section id="footer">
        <div class="container text-center">
            <p>Made by trapped in web</p>
        </div>
        <div class="center">
            Copyright &copy; www.MyHealth.com. All Rights Reserved!
        </div>
    </section>


    <!-- <script> 
    var login = document.querySelectorAll("#already_log");

    login.addEventListener("click",function(){
        alert("You are already logged in");
    });
    </script> -->
    <?php

function fsa() {
  echo '<div class="alert alert-success alert-dismissable" id="success-alert">';
  echo '<strong>Successfully posted!</strong>';
  echo '</div>';
}?>

</body>

</html>



