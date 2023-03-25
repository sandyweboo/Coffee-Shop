<!DOCTYPE html>
<html lang="en">
<?php
   require "dbconn.php";
   ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assests/css/style.css">
        <link rel="stylesheet" href="assests/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/6da195159b.js" crossorigin="anonymous"></script>

        <title>Sandy Coffee</title>

    </head>

    <body>
        <div class="container">
            <?php
        include("component/nav.php");
        ?>

<section class="mt-4 ">
    <h3 class="m-4 hed" >About Us</h3>
        <div class="col-md-12">
            <div class="row about shadow p-3 mb-5 bg-white rounded">
           
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center align-items-center ">
                    <img src="./uploads/Image-ourstory.png" class="image" alt="">
                </div>

                <div class=" col-lg-8 col-md-12 col-sm-12 d-flex justify-content-center align-items-center ">
                    <span>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span>
                </div>
            </div>
        </div>
    </section>

<script src="script.js"></script>
        <script src="assests/js/bootstrap.min.js"></script>
        <script src="assests/js/bootstrap.bundle.js"></script>
    </body>

</html>