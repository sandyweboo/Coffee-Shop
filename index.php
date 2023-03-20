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
<div class="col-md-12">

<h3 class="m-4 hed" >HOT DEALS</h3>

<div class="row d-flex justify-content-between">
    
<!----------------------------------->

<?php
            $c_rs = Database::search("SELECT * FROM `category`  ORDER BY `id` ASC LIMIT 3 ");
            $c_num = $c_rs->num_rows;

            for ($y = 0; $y < $c_num; $y++) {
                $cdata = $c_rs->fetch_assoc();

            ?>

    <div class="shadow p-3 mb-5 bg-white rounded col-lg-3 col-md-8 col-sm-12 ">
    <?php

$product_rs = Database::search("SELECT * FROM `product` WHERE `category_id`='" . $cdata["id"] . "'");
$product_num = $product_rs->num_rows;

for ($z = 0; $z < $product_num; $z++) {
    $product_data = $product_rs->fetch_assoc();

?>

    <?php

$image_rs = Database::search("SELECT * FROM `image` WHERE `product_id`='" . $product_data["id"] . "'");
$image_data = $image_rs->fetch_assoc();

?>

  <img src="<?php echo $image_data["code"]; ?>" class="card-img-top" alt="...">
  <div class="card-body ">
  <div class="name text mt-2"><i class="fa-sharp fa-solid fa-tags"></i> <?php echo $cdata["name"]; ?></div>
   
    <div class="Price text mt-2">$ <?php echo $product_data["price"]; ?> .00</div>
                <div class="stock text text-success fw-bold mt-2"> <?php echo $product_data["stock"]; ?> Stock Available</div>
                <a href="#" class="btn btn-outline-dark mt-2" onclick="singleView(<?php echo $product_data['id']; ?>);" >View More</a>
  </div>

  <?php } ?>
</div>

<?php } ?>

<!--------------------------------- -->


    </div>

<div class="col-12">
    <hr>
</div>
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


</div>


<div class="col-12">
    <hr>
</div>
    <section class="mt-4 ">
    <h3 class="m-4 hed" >Offer</h3>
        <div class="col-md-12">
            <div class="row about shadow p-3 mb-5 bg-white rounded">
           
            <div class=" col-lg-8 col-md-12 col-sm-12 d-flex justify-content-center align-items-center ">
                <div class="col-12">
                <h3 class="m-4 hed" >Up To 50%</h3>
                    <span>At our cafe, we take pride in providing our customers with the best coffee around. Our carefully-selected coffees come from some of the most renowned coffee growing regions in the world, ensuring that each cup is unrivaled in flavor and freshness.</span>
               
                </div>
            </div>

                <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center align-items-center ">
                    <img src="uploads/Proefpakket_page-0003 2 (no bg).png" class="image" alt="">
                </div>


            </div>
        </div>
    </section>


</div>

</div>
<script src="script.js"></script>
        <script src="assests/js/bootstrap.min.js"></script>
        <script src="assests/js/bootstrap.bundle.js"></script>
    </body>

</html>