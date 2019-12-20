
 <?php
 header("Access-Control-Allow-Origin: *");

include_once 'crud.php';

$crud = new crud();

$query1= "Select * from gdreport";

$result1 = $crud->getData($query1);

?>


<center><img src="crs logo.png" style="max-height: 200px;,max-width: 150px;"></center>
<center><h1><b>General Diary Information</b></h1></center>


<center><table border="2" class="table">

	<tr style="background-color: green; color:white;">
		<center><td><b> Name of Thana </b></td>
		<td><b> Victim Name</b> </td>
		<td><b>Nid Number</b> </td>
		<td><b> Father Name </b></td>
		<td><b> Mother Name </b></td>
		<td><b> Permanent Address </b></td>
		<td><b> Present Address </b></td>
		<td><b> Mobile Number </b></td>
		<td> <b>Case Description </b></td>
		<td> <b>Case Status </b></td>
		<td> <b>Update status </b></td>

	</center>

	</tr>

	<?php
	 foreach($result1 as $key=>$res){
		 echo "<tr>";
		 echo "<td>".$res['Thana_Name']."</td>";
		 echo "<td>".$res['Victim_Name']."</td>";
		 echo "<td>".$res['NID_number']."</td>";
		 echo "<td>".$res['Father_Name']."</td>";
		 echo "<td>".$res['Mother_Name']."</td>";
		 echo "<td>".$res['PermanentAddress']."</td>";
		 echo "<td>".$res['PresentAddress']."</td>";
		 echo "<td>".$res['Mobile_Number']."</td>";
		 echo "<td>".$res['Case_Description']."</td>";
		 echo "<td>".$res['Status']."</td>";
		   echo "<td> <a href='GdStatus.php?id=$res[id]'>Edit</a></td>";
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