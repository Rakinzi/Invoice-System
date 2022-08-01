<?php
ini_set("display_errors","1") ;
error_reporting(E_ALL);
require 'config.php';

if (isset($_POST['register'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Email = $_POST['email'];
    $password = $_POST['psw'];
    $repeat_pass = $_POST['passrepeat'];
    $gender = $_POST['gender'];
    $phone = $_POST['full_phone'];
    $address = $_POST['address'];

    if ($password != $repeat_pass){
        echo "<script>alert('Password and Re-Type fields do not match'); </script>";
    }
    else{
        

        $result = $conn->query("INSERT INTO invoice_user (`first_name`, `last_name`, `email`, `password`, `mobile`, `address`, `gender`) 
        VALUES('$firstname','$lastname', '$Email', '$password','$phone', '$address', '$gender' )");

        if(!$result) echo "<script> alert('Failed to Register please try again');";
        header('location: index.php');
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/Style3.css">
</head>

<body>
    <style>
    .iti-flag {
        background-image: url("Assets/Images/flags.png");
    }

    @media (-webkit-min-device-ratio: 2),
    (min-resolution: 192dpi) {
        .iti-flag {
            background-image: url("Assets/Images/flags@2x.png");
        }
    }

    ;
    </style>
    <h2>Registration Form</h2>
    <p>Please fill in this form to create an account.</p>

    <div class="container">
        <form action="#" method="POST" autocomplete="off">
            <div class="row">
                <div class="col-25">
                    <label for="fname"><b>First Name</b></label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="First Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname"><b>Last Name</b></label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email"><b>Email</b></label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="Enter Email" name="email" id="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="psw"><b>Password</b></label>
                </div>
                <div class="col-75">
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                </div>
                <input type="password" placeholder="Repeat Password" name="passrepeat" id="psw-repeat" required>
            </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="gender"><b>Gender</b></label>
        </div>
        <div class="col-75">
            <select id="gender" name="gender">
                <option selected disabled>Choose Option</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Null">Do Not Specify</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-25">
            <label for="phone"><b>Mobile Number</b></label>
        </div>
        <div class="col-25">
            <input type="tel" name="full_phone" id="phone" required>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="subject"><b>Address</b></label>
        </div>
        <div class="col-75">
            <textarea id="address" name="address" placeholder="Write your home address........"
                style="height:100px"></textarea>
        </div>
    </div>
    <br>
    <div class="row">
        <input type="submit" name="register" value="Register">
    </div>
    <div class="container signin">
        <p style="text-center">Already have an account? <a href="index.php">Sign in</a>.</p>
    </div>
    </form>
    </div>

</body>

</html>