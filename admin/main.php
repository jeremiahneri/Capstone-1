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
    <title>Admin | Dashboard</title>
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
                <li class="p-3 active"><a href="main.php" class="text-decoration-none fs-4">Dashboard</a></li>
                <li class="p-3"><a href="#" class="text-decoration-none fs-4">Manage Booking</a></li>
                <li class="p-3"><a href="users.php" class="text-decoration-none fs-4">Customer Credential</a></li>
                <li class="p-3"><a href="vehicles.php" class="text-decoration-none fs-4">Manage Vehicle</a></li>
                <li class="p-3"> <a class="text-decoration-none fs-4" data-bs-toggle="collapse" href="#collapseAdd"
                        role="button" aria-expanded="false" aria-controls="collapseAdd">Add <i
                            class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="collapseAdd">
                        <a class="text-decoration-none fs-5 " href="addVehicles.php"><li class="pb-2 px-5">Car</li></a>
                        <a class="text-decoration-none fs-5 " href="addBrand.php"><li class="pb-2 px-5">Brand</li></a>
                        <a class="text-decoration-none fs-5" href="addAdmins.php"><li class="pb-2 px-5">Admin</li></a>
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
            <h1 class="col-md-12 px-3">Dashboard</h1>
            <hr>
            <div class="row mx-auto">
                <div class="col-md-3">
                    <div class="card custom_card">
                        <div class="card-body text-center" id="card-body1">
                            <?php
                            $sql = "SELECT COUNT(*) as row_count FROM user";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $rowCount = $row['row_count'];
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                            ?>
                            <h1 class="card-title">
                                <?php echo htmlentities($rowCount); ?>
                            </h1>
                            <p class="card-text">Users</p>
                        </div>
                        <div class="card-footer">
                            <a class="text-decoration-none text-dark" href="users.php">
                                Full Details <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom_card">
                        <div class="card-body text-center" id="card-body1">
                            <?php
                            $sql = "SELECT COUNT(*) as row_count FROM vehicle";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $rowCount = $row['row_count'];
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                            ?>
                            <h1 class="card-title">
                                <?php echo htmlentities($rowCount) ?>
                            </h1>
                            <p class="card-text">Vehicles</p>
                        </div>
                        <div class="card-footer">
                            <a class="text-decoration-none text-dark" href="vehicles.php">
                                Full Details <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom_card">
                        <div class="card-body text-center" id="card-body1">
                            <h1 class="card-title">0</h1>
                            <p class="card-text">Total Bookings</p>
                        </div>
                        <div class="card-footer">
                            <a class="text-decoration-none text-dark" href="#">
                                Full Details <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card custom_card">
                        <div class="card-body text-center" id="card-body1">
                            <?php
                            $sql = "SELECT COUNT(*) as row_count FROM admin";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                $rowCount = $row['row_count'];
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }
                            ?>
                            <h1 class="card-title">
                                <?php echo htmlentities($rowCount) ?>
                            </h1>
                            <p class="card-text">Admins</p>
                        </div>
                        <div class="card-footer">
                            <a class="text-decoration-none text-dark" href="admins.php">
                                Full Details <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom_card">
                        <div class="card-body text-center" id="card-body1">
                            <h1 class="card-title">0</h1>
                            <p class="card-text">Messages</p>
                        </div>
                        <div class="card-footer">
                            <a class="text-decoration-none text-dark" href="#">
                                Full Details <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
    <script>
        $(".sidebar ul li").on('click', function () {
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        });
        $(".open-btn").on('click', function () {
            $('.sidebar').addClass('active');
        });
        $(".close-btn").on('click', function () {
            $('.sidebar').removeClass('active');
        });
    </script>
</body>

</html>