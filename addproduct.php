<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assests/css/style.css">
  <link rel="stylesheet" href="assests/css/bootstrap.min.css">


  <title>Sandy Coffee</title>

</head>

<body>
  <div class="container-fluid">
    <?php
    include("component/nav.php");
    require "dbconn.php";
    ?>

    <div class="container">
      <div class="main col-8">

          <div class="row">
            <div class="mb-3 col-lg-4 col-md-12 col-sm-12">
              <label class="form-label">Product Name</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3 col-lg-4 col-md-12 col-sm-12">
              <label class="form-label">Title </label>
              <input type="text" class="form-control" id="title">
            </div>
          </div>

         <div class="row">
            <div class="mb-3 col-lg-4 col-md-12 col-sm-12">
              <label class="form-label">Product Category</label>
              <select class="form-select" id="category" aria-label="Default select example">
              <?php

$rs = Database::search("SELECT * FROM `category`");
$n = $rs->num_rows;
for ($x = 0; $x < $n; $x++) {
    $d = $rs->fetch_assoc();
?>
    <option value="<?php echo $d["id"]; ?>"><?php echo $d["name"]; ?></option>
<?php
}
?>
</select>
            </div>
            <div class="mb-3 col-lg-4 col-md-12 col-sm-12">
              <label class="form-label">Product Brand</label>
              <select class="form-select" id="brand">
                                    <?php

                                   
                                    $rs = Database::search("SELECT * FROM `brand`");
                                    $n = $rs->num_rows;
                                    for ($x = 0; $x < $n; $x++) {
                                        $d = $rs->fetch_assoc();
                                    ?>
                                        <option value="<?php echo $d["id"]; ?>"><?php echo $d["name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
            </div>
          </div>
          <div class="col-12">
            <div class="mb-3 col-lg-8 col-md-12 col-sm-12">
              <label class="form-label">Product Description</label>
              <textarea class="form-control"  id="description" rows="3"></textarea>

            </div>
          </div>

          <div class="col-12">
            <div class="mb-3 col-lg-8 col-md-12 col-sm-12">
            
            <label for="formFile" class="form-label">Picture</label>
           <input class="form-control" type="file" id="image">
        
            </div>
          </div>



          <div class="row">
            <div class="mb-3 col-lg-4 col-md-12 col-sm-12">
              <label class="form-label">Product Price</label>
              <input type="text" class="form-control" id="price">
            </div>
            <div class="mb-3 col-lg-4 col-md-12 col-sm-12">
              <label class="form-label">in stock</label>
              <input type="text" class="form-control" id="stock">
            </div>
          </div> 

   <button type="submit" onclick="AddProduct()"  class="btn btn-primary">Submit</button>
                                  
      </div>
    </div>



    <script src="script.js"></script>
    <script src="assests/js/bootstrap.min.js"></script>
    <script src="assests/js/bootstrap.bundle.js"></script>
</body>

</html>