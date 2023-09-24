<?php
session_start();
include "admin/includes/database.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){

  $email = $_POST['email'];
  $username = $_POST['username'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phonenumber'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $conpassword = $_POST['conpassword'];

  if(!empty($email) && !empty($password) && !is_numeric($email)){


    if($password == $conpassword){

      $check_query = "SELECT * FROM `user` WHERE `Email` = '$email'";
      $result = mysqli_query($conn, $check_query);

      if(mysqli_num_rows($result) == 0){
        
        $check_query = "SELECT * FROM `user` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $check_query);

        if(mysqli_num_rows($result) == 0){

          // $enc_password = password_hash($password, $password_default);

          $insert = "INSERT INTO `user`(`Username`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `Email`, `Password`) VALUES ('$username','$fname','$lname','$phone','$address','$email','$password')";
          mysqli_query($conn, $insert);

          echo "<script type='text/javascript'>alert('Successully Registered!')</script>";
          header("location: log-in.php");

        }else{
          echo "<script type='text/javascript'>alert('Username already exist!')</script>";
        }
        
      }else{
        
        echo "<script type='text/javascript'>alert('Email is already taken!')</script>";
      }

    }else{
      echo "<script type='text/javascript'>alert('Password didnt matched!')</script>";
    }
  }
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
</head>

<body>
  <div class="container-fluid py-5" style="background-color: aqua;">
    <h1 class="text-center py-4">Sign-up Page</h1>
    <div class="card mx-auto p-3" style="width: 50rem;">
      <form method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Username</label><br>
            <input class="form-control" type="text" name="username">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">First Name</label><br>
            <input class="form-control" type="text" name="fname">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Last Name</label><br>
            <input class="form-control" type="text" name="lname">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Mobile Number</label><br>
            <input class="form-control" type="number" name="phonenumber">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Full Address</label><br>
            <input class="form-control" type="text" name="address">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="conpassword">
          </div>
          <button type="submit" name="submitbtn" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

  <!-- Js Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>