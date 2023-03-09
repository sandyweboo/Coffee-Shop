function AddProduct(){
    var name = document.getElementById("name");
    var title = document.getElementById("title");
    var category = document.getElementById("category");
    var brand = document.getElementById("brand");
    var description = document.getElementById("description");
    var price = document.getElementById("price");
    var stock = document.getElementById("stock");
    var image = document.getElementById("image");

    var form = new FormData();
    form.append("name", name.value);
    form.append("title", title.value);
    form.append("category", category.value);
    form.append("brand", brand.value);
    form.append("description", description.value);
    form.append("price", price.value);
    form.append("stock", stock.value);
    form.append("image",image.files[0]);

    
      var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState==4&&request.status==200){
            alert(request.responseText);
        }
    }
      request.open("POST","addproduct_process.php",true);
      request.send(form);

    // alert(name.value);
    // alert(title.value);
    // alert(category.value);
    // alert(brand.value);
    // alert(description.value);
    // alert(image.files);
    // alert(stock.value);

}
