<?php
require "dbconn.php";

$name = $_POST["name"];
$title = $_POST["title"];
$category = $_POST["category"];
$brand = $_POST["brand"];
$description = $_POST["description"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$image = $_FILES["image"]["tmp_name"];

// echo($name);
// echo($title);
// echo($category );
// echo($description);
// echo($price);
// echo($stock);
// echo($image);

if(empty($name)){
    echo ("Please Enter a name");
}else if(empty($title)){
    echo ("Please Enter a Title");
// }else if($category == "0"){
//     echo ("Please select a category");
// }else if($brand == "0"){
//     echo ("Please select a brand");
}else if(empty($description)){
    echo ("Please Enter a description");
}else if(empty($price)){
    echo ("Please Enter a price");
}else if(empty($stock)){
    echo ("Please Enter a quantity.");
}else{

Database::iud ("INSERT INTO `product` (`name`, `title`, `category_id`, `brand_id`, `description`, `price`, `stock`) 
VALUES ('".$name."', '".$title."', '".$category."', '".$brand."', '".$description."', '".$price."', '".$stock."')");

$product_id = Database::$connection->insert_id;

$file_name = "uploads/".$name.".jpg";

move_uploaded_file($image,"uploads/".$name.".jpg");
Database::iud("INSERT INTO `image`(`code`,`product_id`) VALUES ('".$file_name."','".$product_id."')");
echo ("prduct Add success");
}

?>