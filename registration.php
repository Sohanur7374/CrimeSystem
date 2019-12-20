 <html>

<head>

</head>

<body>
	<center><img src="crs logo.png" alt="Italian Trulli" style="max-height: 200px;,max-width: 150px;"> </center>

<form method="post" action="registration.php">

<table border="5" align="center" width="400"  bgcolor="#CCCCCC" >

<caption style="color: blue;"><b><h1>Registration form</h1><b></caption>

<tr>

<th>Enter your first name</th>

<td><input type="text" name="firstname" title="enter your first name" placeholder="enter your first name" required/></td>

</tr>

<tr>

<th>Enter your last name</th>

<td><input type="text" name="lastname" placeholder="Enter your last name" /></td>

</tr>
<tr>

<th>User Name</th>

<td><input type="text" name="username" placeholder="Enter username" /></td>

</tr>

<tr>

<th>Enter your email</th>

<td><input type="email" name="email" placeholder="Enter email" /></td>

</tr>

<tr>

<th>Enter your password</th>

<td><input type="password" name="password" placeholder="Enter password" /></td>

</tr>

<tr>

<th>Enter your mobile</th>

<td><input type="number" name="number" placeholder="Enter Your mobile number" /></td>

</tr>

<tr>

<th>Enter your address</th>

<td><textarea rows="8" cols="20" name="address" placeholder="Enter your present address"></textarea></td>

</tr>

<tr>

<th>Select your gender</th>

<td>

<input type="radio" name="gender" value="male"/>Male 
<input type="radio" name="gender" value="female"/>Female
<input type="radio" name="gender" value="other"/>Other


</td>

</tr>

</tr>

<tr>

<th>Select your birthdate </th>

<td><input type="date" name="date" /></td>

</tr>

<tr>
<tr>

<td colspan="3" align="center"><button type="submit" name="submit" class="href">Registration</button>

<input type="reset" value="Reset Data"/>
<button type="back" class="href"> <a  href="home.php" class="href">Back </button></a>

</td>

</tr>

</form>
</table>

</body>

</html>

<style>

	input[type=submit],input[type=reset] {
  background-color: #2E86C1;
  color: white;
  cursor: pointer;
  width: 100px;
  height: 70px;
}

input[type=text],input[type=date],input[type=email],input[type=password],input[type=number],textarea
{
	width: 100%;

}

table {
  border: 6px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 50%;
  text-align: left;
  border-collapse: collapse;
}

.href{
	background-color: #2E86C1;
  color: white;
  cursor: pointer;
  width: 100px;
  height: 70px;
}

     
</style>

<?php 
include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $firstname=$_POST['firstname'];
       $lastname=$_POST['lastname'];
       $username = $_POST['username'];
       $email =$_POST['email'];
        $password =md5($_POST['password']);
         $number =$_POST['number'];
          $address =$_POST['address'];
           $gender =$_POST['gender'];
            $date =$_POST['date'];


       $res = $crud->execute("insert into registration(First_name,Last_name,User_name,Email,Password,Mobile,Address,Gender,Birth_date) values('$firstname','$lastname','$username', '$email','$password','$number','$address','$gender','$date')");

       if($res){
           echo("Successfully registrared");
           echo("<br/>");
       }
       else{
           echo("something is wrong");
           echo("<br/>");
       }

   }

?>

