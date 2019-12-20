<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="#"><img src="crs logo.png" style="max-height: 80px;,max-width: 60px;"></a>
  
 
  <ul class="navbar-nav">
     <li class="nav-item">
      <a class="nav-link" href="adminlogin.php">Admin Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="registration.php">registration</a>
    </li>

  
  

    
  </ul>
  <center><h1 style="color: white"><b>Crime Reporting System</b></h1></center>
</nav>



<center><div class="w3-content w3-section" style="width:100%,height:50%">

  <img class="mySlides w3-animate-top" src="1.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="2.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="3.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="4.jpg" style="width:100%">
</div></center>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>

</body>
</html>