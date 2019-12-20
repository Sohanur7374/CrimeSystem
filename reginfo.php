
 <?php
 header("Access-Control-Allow-Origin: *");

include_once 'crud.php';

$crud = new crud();

$query = "Select * from registration order by id DESC";

$result = $crud->getData($query);

?>


<center><img src="crs logo.png" style="max-height: 200px;,max-width: 150px;"></center>
<center><h1><b>Registration Information</b></h1></center>


<center><table border="2" class="table">

	<tr style="background-color: green; color:white;">
		<center><td><b> First Name </b></td>
		<td><b> Last Name</b> </td>
		<td><b> User Name</b> </td>
		<td><b> Email </b></td>
		<td><b> Password </b></td>
		<td><b> Mobile Number </b></td>
		<td><b> Address </b></td>
		<td><b> gender </b></td>
		<td> <b>Birth Date </b></td></center>

	</tr>
	<?php
	 foreach($result as $key=>$res){
		 echo "<tr >";
		 echo "<td>".$res['First_name']."</td>";
		 echo "<td>".$res['Last_name']."</td>";
		 echo "<td>".$res['User_name']."</td>";
		 echo "<td>".$res['Email']."</td>";
		 echo "<td>".$res['Password']."</td>";
		 echo "<td>".$res['Mobile']."</td>";
		 echo "<td>".$res['Address']."</td>";
		 echo "<td>".$res['Gender']."</td>";
		 echo "<td>".$res['Birth_date']."</td>";

		
	 }
	 ?>
</table></center>
</div>

<center><a href="admin.php"><button class="button">Back</button></a></center>


<style>
.table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.button{
	width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
  background-color: green;
  color: white;
  align-items: center;
}


</style>