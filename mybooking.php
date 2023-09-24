<?php
include "admin/includes/database.php";
session_start();

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    $userID = $_SESSION['UserID'];
    // $profilePic = $_SESSION['profilePhoto'];
} else {

    header("Location: log-in.php");
    exit;
}
// $results = mysqli_fetch_assoc($initiateReservation);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Booking System</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="renting.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbarMain navbar-expand-lg navbar-light p-4">
        <div class="container">
            <a class="navbar-brand text-light" href="main.php">QuickRentz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar1 navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link ml-5 nav1 text-light" href="main.php">Home</a>
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
                            <li class="px-2">
                                <form method="POST" action="">
                                    <a class="text-white text-decoration-none" href="log-out.php"
                                        type="button">Log-out</a>
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
    <div class="container mt-5">
        <h1>My Bookings</h1>

        <!-- List of bookings -->
        <ul class="list-group">
            <li class="list-group-item">
                <div class="row">
                    <?php
                    $selectReservation = "SELECT * FROM `reservation` where `UserID` = $userID";

                    $selectReservation = "SELECT vehicle.Image1 as Image1, brand.brandName, vehicle.Model, reservation.* FROM reservation INNER JOIN vehicle ON reservation.VehicleID = vehicle.VehicleID INNER JOIN brand ON vehicle.BrandID = brand.BrandID WHERE reservation.UserID = $userID";
                    $initiateReservation = mysqli_query($conn, $selectReservation);
                    while ($result = mysqli_fetch_assoc($initiateReservation)) {
                        echo "<div class='col-md-3'>
                            <img src='admin/img/vehicleuploads/$result[Image1]' alt='Car 1' class='img-fluid'>
                        </div>
                        <div class='col-md-5'>
                            <h5>Car: $result[brandName] $result[Model]</h5> 
                            
                            <p class='p-4'>Message: $result[Message]</p>
                            <p>Pickup Date: $result[Pickup]</p>
                            <p>Return Date: $result[Return]</p>
                        </div>
                        <div class='col-md-2 py-5'>
                            <p><strong>Status:</strong> $result[Status]</p>
                        </div>
                        <div class='col-md-2 py-5'>
                            <button class='btn btn-primary'>Cancel</button>
                        </div> ";
                        
                    }
                    ?>
                </div>
            </li>
            <!-- Repeat this list item structure for other bookings -->
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>