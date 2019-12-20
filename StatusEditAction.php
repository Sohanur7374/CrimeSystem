<?php
	
	include_once 'crud.php';
	
	$Crud = new crud();
	
	if(isset($_POST['update1'])){
		$id = $_POST['id'];
         $gdstatus=$_POST['gdstatus'];
		
		$result = $Crud->execute("update gdreport set Status='$gdstatus' WHERE id=$id");
		
		if($result){
			header("Location:GDinfo.php");
		}else{
			echo "Update Problem!";
		}
		
	}




	if(isset($_POST['update2'])){
		$mid = $_POST['mid'];
         $missingstatus=$_POST['missingstatus'];
		
		$result = $Crud->execute("update missingreport set Status='$missingstatus' WHERE Missing_ID=$mid");
		
		if($result){
			header("Location:MissingReportInfo.php");
		}else{
			echo "Update Problem!";
		}
		
	}
	?>