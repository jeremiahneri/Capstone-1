<?php
include "includes/database.php";
session_start();

if (isset($_SESSION['AdminUsername'])&&isset($_SESSION['profilePhoto'])) {

    $username = $_SESSION['AdminUsername'];
    $profilePic = $_SESSION['profilePhoto'];
} else {

    header("Location: log-in.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container d-flex h-100">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-3 pd-4 d-flex justify-content-between">
                <h2 class="text-white px-2">QuickRentz</h2>
                <button class="btn d-md-none d-block close-btn px-1 py-0"><i class="fa-solid fa-bars-staggered"
                        style="color: #ffffff;"></i></button>
            </div>
            <ul class="list-unstyled px-2 pt-3">
                <li class="p-3"><a href="main.php" class="text-decoration-none fs-4">Dashboard</a></li>
                <li class="p-3"><a href="#" class="text-decoration-none fs-4">Manage Booking</a></li>
                <li class="p-3"><a href="users.php" class="text-decoration-none fs-4">Customer Credential</a></li>
                <li class="p-3"><a href="vehicles.php" class="text-decoration-none fs-4">Manage Vehicle</a></li>
                <li class="p-3 active"> <a class="text-decoration-none fs-4" data-bs-toggle="collapse"
                        href="#collapseAdd" role="button" aria-expanded="false" aria-controls="collapseAdd">Add <i
                            class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="collapseAdd">
                        <li><a class="text-decoration-none fs-5 p-3" href="addVehicles.php">Car</a></li>
                        <li><a class="text-decoration-none fs-5 p-3" href="addAdmins.php">Admin</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled signout px-4">
                <li>
                    <form method="POST" action="">
                        <a class="text-decoration-none fs-4" href="log-out.php" type="button">Log-out</a>
                    </form>
                </li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <a class="navbar-brand text-white" href="#">QuickRentz</a>
                        <button class="btn d-md-none d-block open-btn px-1 py-0"><i class="fa-solid fa-bars-staggered"
                                style="color: #000000;"></i></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="profile collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <h5 class="text-white my-auto p-4">
                                <img src='img/adminprofilephoto/<?php echo $profilePic ?>' alt='' style='border:2px solid #000;border-radius: 50px;' height='50'>
                                    <?php
                                    echo $username;
                                    ?>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="col-md-12 px-3">Add Admin</h1>
            <hr>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $AdminFname = $_POST['fname'];
                $AdminLname = $_POST['lname'];
                $AdminPhone = $_POST['number'];
                $AdminFullAdd = $_POST['address'];
                $AdminEmail = $_POST['email'];
                $AdminUsername = $_POST['username'];
                $AdminPassword = $_POST['password'];

                if (!empty($AdminFname) && !empty($AdminLname) && !empty($AdminEmail) && !empty($AdminPassword) && !is_numeric($AdminEmail)) {

                    $insert = "INSERT INTO `admin`(`FirstName`, `LastName`, `PhoneNumber`, `Address`, `AdminUsername`, `Email`, `Password`) VALUES ('$AdminFname','$AdminLname','$AdminPhone','$AdminFullAdd','$AdminUsername','$AdminEmail','$AdminPassword')";
                    mysqli_query($conn, $insert);

                    echo "<script>alert('Admin Added Successfully!');</script>";
                } else {
                    echo "<script>alert('Invalid Characters');</script>";
                }
            }
            ?>
            <div class="container p-2">
                <div style="border: 2px solid #000; border-radius: 8px;height: 100%;">
                    <div class="container p-4">
                        <form class="row g-3" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fname">
                            </div>
                            <div class="col-md-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname">
                            </div>
                            <div class="col-md-3">
                                <label for="number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="number">
                            </div>
                            <div class="col-md-9">
                                <label for="address" class="form-label">Full Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <hr>
                            <h3>Log-in Details</h3>
                            <div class="col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add Admin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</body>

</html>