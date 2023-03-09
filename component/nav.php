
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.topnav {
  overflow: hidden;



}

.navlink {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px;
  margin-top: 10px;
  text-decoration: none;
  font-size: 17px;
  font-weight: bold;
}
.navlink-main {
  float: left;
  display: block;

  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 28px;
  font-weight: bolder;
}
.navlink{

  color: black;
}

.navlink-main {
    color: #6F4E37;

}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>


<div class="topnav" id="myTopnav">

  <a href="#home" class="navlink-main">SandyCoffee</a>

  <a href="#news" class="navlink" >Products</a>
  <a href="#contact" class="navlink">Contact</a>
  <a href="#about" class="navlink" >About Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


