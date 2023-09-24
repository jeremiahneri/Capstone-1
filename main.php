<?php
include "admin/includes/database.php";
session_start();

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    // $profilePic = $_SESSION['profilePhoto'];
} else {

    header("Location: log-in.php");
    exit;
}
// echo $username;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Include Owl Carousel CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Quickrentz</title>
</head>

<body>
    <!--START OF NAVBAR -->
    <nav class="navbar navbarMain navbar-expand-lg navbar-light p-4">
        <div class="container">
            <a class="navbar-brand text-light" href="#">QuickRentz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar1 navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link ml-5 nav1 text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav1 text-light" href="#">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav1 text-light" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav1 text-light" href="#">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav1 text-light" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item text-white mx-auto dropdown">
                        <button class="dropdown-toggle user" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-regular fa-user"></i>
                            <?php echo $username; ?>
                        </button>
                        <ul class="mt-2 dropdown-menu bg-dark">
                            <li class="px-2 mb-3"><a href="" class="text-white text-decoration-none">Manage Account</a>
                            </li>
                            <li class="px-2 mb-3"><a href="" class="text-white text-decoration-none">My Booking</a></li>
                            <li class="px-2" >
                                <form method="POST" action="">
                                    <a class="text-white text-decoration-none" href="log-out.php" type="button">Log-out</a>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-light" href="sign-up.php"><i class="fa-solid fa-bag-shopping"></i> Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"><i class="fa-solid fa-cart-shopping"></i></a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--END OF NAVBAR -->

    <!--START SECTION 1 (CAROUSEL) -->

    <div class="container-fluid carousel1">
        <div id="carouselExample" class="carousel slide" carousel-fade data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="img/car1.jpg" class="d-block w-100" alt="...">
                    <div class="overlay">
                        <h2>Drive Dreams, Explore Roads, Car Rental Bliss.</h2>
                    </div>
                </div>
                <div class="carousel-item pic2" data-bs-interval="4000">
                    <img src="img/car2.jpg" class="d-block w-100" alt="...">
                    <div class="overlay">
                        <h3>
                            Family Adventures: Where Memories and Smiles Happen.</h3>
                    </div>
                </div>
                <div class="carousel-item pic2" data-bs-interval="3000">
                    <img src="img/car3.jpg" class="d-block w-100" alt="...">
                    <div class="overlay">
                        <h2>Drive Dreams, Explore Roads, Car Rental Bliss.</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>

            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <!--END SECTION 1 (CAROUSEL) -->

    <!-- START SECTION 2 -->
    <section>
        <div class="container container2 mt-5 text-light">
            <h1 class="text-center">Welcome to Quickrentz</h1>
            <div class="row">
                <div class="col-md-6 mt-5 about">
                    <p>
                        Quickrentz is your trusted partner for all your car rental needs.
                        With a wide range of cars to choose from and competitive prices, we make
                        it easy for you to find the perfect vehicle for your journey.
                    </p>
                    <p>
                        Our mission is to provide you with a seamless and hassle-free car rental
                        experience. Whether you're traveling for business or pleasure, our
                        dedicated team is here to ensure your satisfaction.
                    </p>
                    <div class="button-container btnAbout">
                        <button class="button">Book Now</button>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="col-md-6 aboutPic">
                    <img src="img/image-removebg-preview.png" alt="" class="aboutPicImg">
                </div>
            </div>
        </div>
    </section>

    <!-- END SECTION 2 -->

    <!-- START SECTION 3 -->
    <div class="container container3">
        <div class="title_main">
            <h2>FEATURED LISTINGS</h2>
        </div>
        <div class="row">
            <?php
            $selectVehicle = "SELECT vehicle.*, brand.brandName FROM vehicle
                LEFT JOIN brand ON vehicle.BrandID = brand.BrandID";
            $initiateSelectVehicle = mysqli_query($conn, $selectVehicle);
            while ($results = mysqli_fetch_assoc($initiateSelectVehicle)) {
                echo "<div class='col-md-4 mb-4'>
                        <div class='card text-light'>
                            <div id='$results[Model]' class='carousel slide'>
                            <div class='carousel-indicators'>
                                <button type='button' data-bs-target='#$results[Model]' data-bs-slide-to='0' class='active'
                                    aria-current='true' aria-label='Slide 1'></button>
                                <button type='button' data-bs-target='#$results[Model]' data-bs-slide-to='1'
                                    aria-label='Slide 2'></button>
                                <button type='button' data-bs-target='#$results[Model]' data-bs-slide-to='2'
                                    aria-label='Slide 3'></button>
                            </div>
                            <div class='carousel-inner'>
                                <div class='carousel-item active'>
                                    <img src='admin/img/vehicleuploads/$results[Image1]' class='d-block w-100' alt='...'>
                                </div>
                                <div class='carousel-item'>
                                    <img src='admin/img/vehicleuploads/$results[Image2]' class='d-block w-100' alt='...'>
                                </div>
                                <div class='carousel-item'>
                                    <img src='admin/img/vehicleuploads/$results[Image3]' class='d-block w-100' alt='...'>
                                </div>
                                <div class='carousel-item'>
                                    <img src='admin/img/vehicleuploads/$results[Image4]' class='d-block w-100' alt='...'>
                                </div>
                            </div>
                            <button class='carousel-control-prev' type='button' data-bs-target='#$results[Model]'
                                data-bs-slide='prev'>
                                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                <span class='visually-hidden'>Previous</span>
                            </button>
                            <button class='carousel-control-next' type='button' data-bs-target='#$results[Model]'
                                data-bs-slide='next'>
                                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                <span class='visually-hidden'>Next</span>
                            </button>
                        </div>
                        <div class='card-body'>
                            <div class='card-header'>
                                <h5 class='card-title'>$results[brandName] $results[Model]</h5>
                                <h6 class='card-subTitle'>$results[Year]</h6>
                            </div>
                            <div class='grid-container'>
                                <div class='grid-item'>
                                    <p class='card-text'><i class='fa-regular fa-user' style='color: #806393;'></i> $results[SeatingCapacity] people
                                    </p>
                                    <p class='card-text'><i class='fa-solid fa-gauge' style='color: #806393;'></i> 6.1 km/
                                        1-liter</p>
                                </div>
                                <div class='grid-item'>
                                    <p class='card-text'><i class='fa-solid fa-gas-pump' style='color: #806393;'></i> $results[FuelType]
                                    </p>
                                    <p class='card-text'><i class='fa-solid fa-car' style='color: #806393;'></i> $results[Transmision]
                                    </p>
                                </div>
                                <hr style='width: 200%;'>
                            </div>
                            <div class='grid-item2'>
                                <h5 class='card-title amountText'>₱$results[Rate] / day</h5>
                                <a href='#'><button class='btn' style='color: white; background-color: #806393;'>Rent Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>

    <!-- END SECTION 3 -->

    <!-- START SECTION 4 -->

    <div class="container mainContainer">
        <div class="title_main2">
            <h2>GET STARTED WITH 4 SIMPLE STEPS</h2>
        </div>
        <div class="row">
            <div class="step1 col-md-3">
                <div class="card cardSect4" style="height: 100%;">
                    <span class="span1">
                        <i class="fa-regular fa-circle-user iconSect4" id="icon1"></i>
                    </span>
                    <h3 class="step1__title">Create a profile</h3>
                    <p class="step1__text">Register on our platform to access a personalized car rental experience.</p>
                </div>

            </div>
            <div class="step1 col-md-3">
                <div class="card cardSect4" style="height: 100%;">
                    <span class="span3">
                        <i class="fa-solid fa-car-side iconSect4" id="icon1"></i>
                    </span>
                    <h3 class="step1__title">Tell us what car you want</h3>
                    <p class="step1__text">Specify your preferred car model, rental period, and pick-up location.</p>
                </div>

            </div>
            <div class="step1 col-md-3">
                <div class="card cardSect4" style="height: 100%;">
                    <span class="span3">
                        <i class="fa-solid fa-user-plus iconSect4" id="icon1"></i>
                    </span>
                    <h3 class="step1__title">Match with seller</h3>
                    <p class="step1__text">Our algorithm will match you with the best available car rental options.</p>
                </div>

            </div>
            <div class="step1 col-md-3">
                <div class="card cardSect4" style="height: 100%;">
                    <span class="span4">
                        <i class="fa-regular fa-file iconSect4" id="icon1"></i>
                    </span>
                    <h3 class="step1__title">Make a deal</h3>
                    <p class="step1__text">Finalize the rental agreement with the car owner and enjoy your hassle-free
                        ride.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Section 4 -->

    <!-- START SECTION 5 (OWL CAROUSEL) -->
    <div class="container">
        <h2 class="text-center">Image Carousel</h2>
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1"></div>
        </div>
    </div>
    <!-- END SECTION 5 (OWL CAROUSEL) -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                    },
                    600: {
                        items: 3,
                        nav: false,
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false,
                    },
                },
            });
        });
    </script>

    <footer class="text-white" style="background-color: #06010C;">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-3" id="div1">
                    <h1></i> QUICKRENTZ</h1>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, laudantium.</p> -->
                    <!-- <button style="background-color: #806393; color: white; border-radius: 10px;">Submit Ad</button> -->
                </div>
                <div class="col-md-3" id="div2">
                    <h2 style="margin-bottom: 20px;">Explore</h2>
                    <p>About Us</p>
                    <p>My Account</p>
                    <p>How it works</p>
                    <p>Pricing Packages</p>

                </div>
                <div class="col-md-3" id="div3">
                    <h2 style="margin-bottom: 20px;">Contact</h2>
                    <span class="contact-item">
                        <i class="fa-solid fa-location-dot" style="color: #806393;"></i> Lorem ipsum dolor sit amet
                        consectetur
                    </span>
                    <span class="contact-item">
                        <i class="fa-solid fa-clock" style="color: #806393;"></i> Mon-Sat 8:00am to 11:00pm
                    </span>
                    <span class="contact-item">
                        <i class="fa-solid fa-envelope" style="color: #806393;"></i> quickrentz.main@gmail.com
                    </span>
                    <span class="contact-item">
                        <i class="fa-solid fa-phone" style="color: #806393;"></i> +63 9693568001 / 939-54-72
                    </span>
                </div>
                <div class="col-md-3" id="div4">
                    <h2 style="margin-bottom: 20px;">Newsletter</h2>
                    <!-- <p>Subscribe for the new articles</p> -->
                    <input type="text" placeholder="Email Address" style="border-radius: 10px; text-align: center;">
                </div>
                <div class="col-md-12" id="div5">
                    <hr>
                    <div class="social-icon" style="background-color: #06010C;">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                    <div class="social-icon" style="background-color: #06010C;">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="social-icon" style="background-color: #06010C;">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <p style="margin-top: 20px;">&copy; 2023 QuickRentz. All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </footer>



</body>

</html>