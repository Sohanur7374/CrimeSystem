
 <?php
 header("Access-Control-Allow-Origin: *");

include_once 'crud.php';

$crud = new crud();

$query1= "Select * from missingreport";

$result1 = $crud->getData($query1);

?>


<center><img src="crs logo.png" style="max-height: 200px;,max-width: 150px;"></center>
<center><h1><b>Missing Report Information</b></h1></center>


<center><table border="2" class="table">

	<tr style="background-color: green; color:white;">
		<center><td><b> Full Name </b></td>
		<td><b> Height</b> </td>
		<td><b> Weight</b> </td>
		<td><b> Dress Details </b></td>
		<td><b> Health </b></td>
		<td><b> Image </b></td>
		<td><b> Gender </b></td>
		<td><b> Age </b></td>
		<td> <b>Last Location </b></td>
		<td> <b>Last Seen Date </b></td>
		<td> <b>Reported By </b></td>
		<td> <b>Address </b></td>
		<td> <b>Reporting Officer</b></td>
	    <td> <b>Reported Date </b></td>
		<td> <b>Unit Number</b></td>
		<td> <b>Case Status</b></td>

	</center>

	</tr>

	<?php
	 foreach($result1 as $key=>$res){
		 echo "<tr>";
		 echo "<td>".$res['Full_Name']."</td>";
		 echo "<td>".$res['Height']."</td>";
		 echo "<td>".$res['Weight']."</td>";
		 echo "<td>".$res['Dress_Details']."</td>";
		 echo "<td>".$res['Health']."</td>";
		 echo "<td>".$res['Image']."</td>";
		 echo "<td>".$res['Gender']."</td>";
		 echo "<td>".$res['Age']."</td>";
		 echo "<td>".$res['Last_Location']."</td>";
		 echo "<td>".$res['Last_Seen_Date']."</td>";
		 echo "<td>".$res['Reported_By']."</td>";
		 echo "<td>".$res['Address']."</td>";
		 echo "<td>".$res['Reporting_Officer']."</td>";
		 echo "<td>".$res['Reported_Date']."</td>";
		 echo "<td>".$res['Unit_Number']."</td>";
		 echo "<td>".$res['Status']."</td>";
		  echo "<td> <a href='missingStatus.php?id=$res[Missing_ID]'>Edit</a></td>";
		 	 echo "</tr>";


		
	 }
	 ?>
</table></center>


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