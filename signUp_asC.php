<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
    <link rel="stylesheet" href="./navbarNorm.css">
    <link rel="stylesheet" href="./signUp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./image/Logo/favicon-logo.png/">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="navbar-logo">
                <img src="./image/Logo/OCNBG.png" alt="">
            </div>
            <div class="search">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass">

                    </i>
                </div>
                <input type="text" placeholder="Enter Pincode" class="input-box">
            </div>
            <div class="login">
                <div class="user-icon">
                    <i class="fa-regular fa-circle-user"></i>
                </div>
                Login
            </div>
        </div>
    </header>

    <div class="content">
        <div class="signUp-content">
            <div class="signUp-heading">
                Sign-Up
            </div>
            <div class="signUp-form">
                <form action="signUp_asC" method="POST">
                    <div class="input-box">
                        <label for="fname" >Full Name</label>
                        <input type="text" id="fname" name="Name" placeholder="Enter Your Full Name">
                    </div>
                    <div class="input-box">
                        <label for="age" >Age</label>
                        <input type="text" id="age" name = "Age" placeholder="Enter Your Age">
                    </div>
                    <div class="input-box">
                        <label for="adder" >Address</label>
                        <input type="text" id="addr" name="Address" placeholder="Enter Your Address">
                    </div>
                    <div class="input-box">
                        <label for="pincode" >Pincode</label>
                        <input type="number" id="pincode" name = "Pincode" placeholder="Enter Pincode">
                    </div>
                    <div class="input-box">
                        <label for="email" >E-mail</label>
                        <input type="email" id="email" name = "Email" placeholder="Enter E-mail">
                    </div>
                    <div class="input-box">
                        <label for="phone" >Phone Number</label>
                        <input type="number" id="phone" name = "Phone_Number" placeholder="10 Digit Number">
                    </div>
                    <div class="input-box">
                        <label for="password" >Password :</label>
                        <input type="password" id="password" name = "Password" placeholder="Enter Password">
                    </div>
                    <div class="input-box">
                        <label for="cpassword" >Confirm Password :</label>
                        <input type="password" id="cpassword" name = "Confirm_Password" placeholder="Re-Enter Password">
                    </div>
                    <div class="signUp-button">
                         <input type="submit" value="Submit" name="Submit" >
                        <button type="submit" name="submit" href="signUp_asC.php">Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="login-ask">
                Old User ?
                <a href="./login.html">Login</a>
            </div>
        </div>
    </div>

    <footer>

    </footer>

    <script src="./navbarNorm.js"></script>
</body>
</html>

<?php
echo"hello user";
include 'connection.php';

if(isset($_POST['Submit'])){
            $Name = $_POST['Name'];
            $Age = $_POST['Age'];
            $Address = $_POST['Address'];
            $Pincode = $_POST['Pincode'];
            $Email = $_POST['Email'];
            $Phone_Number = $_POST['Phone_Number'];
            $Password = $_POST['Password'];
            $Confirm_Password = $_POST['Confirm_Password'];


            $insertquery = "insert into `cc_project`.`customer`(Name,Age,Address,Pincode,Email,Phone_Number,Password,Confirm_Password) values('$Name','$Age','$Address','$Pincode','$Email','$Phone_Number','$Password','$Confirm_Password')";

            $res = mysqli_query($con,$insertquery);

            if($res){
                    ?>
                            <script>
                            alert("Form submitted successfully");
                            </script>
                            <?php
            }
             else{
                    ?>
                    <script>
                            alert("data not inserted properly");
                    </script>
                    <?php

            }
    }


   ?>

