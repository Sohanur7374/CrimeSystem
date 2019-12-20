<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}
/* style the submit button */
input[type=submit] {
  background-color: #2E86C1;
  color: white;
  cursor: pointer;
}

input[type=number],input[type=password] {
 background-color: #D6EAF8;
}

a{
    background-color: #2E86C1;
  color: white;
  cursor: pointer;
  text-align: center;
  

}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: center;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}


.hide-md-lg {
  display: none;
}

@media screen and (max-width: 650px) {
  .col {
    width: 50%;
    margin-top: 0;
  }
  
  .vl {
    display: none;
  }
  
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>


<center><img src="crs logo.png" alt="Italian Trulli" style="max-height: 200px;,max-width: 150px;"> </center>
        
<div class="container">
  <form action="adminlogin.php" method="POST">
    <div class="row">
      <h2 style="text-align:center"><b>Login<b></h2>
    
      <div class="col">
      

        <input type="number" name="userid" placeholder="Enter admin id" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Login">
      </div>
      
    </div>
  </form>
</div>


    <div class="col">
 
      <a href="home.php" class="btn">Back</a>
    </div>
  </div>
</div>

</body>
</html>
<?php
  session_start();
  include_once"crud.php";
  $Crud=new crud();
  if (isset($_POST['submit'])) {
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $loggedIn=$Crud->getData("select * from adminlogin where admin_id='$userid' and password='$password'");

    if ($loggedIn) {
      foreach($loggedIn as $res){
       $userid = $res['userid'];
      
    }
    $_SESSION['userid'] = $userid;
    header("Location:admin.php");
    }
    else{
      echo "Incorrect ID or Password";
    }
  }
  ?>
