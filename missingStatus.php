<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	
	
	$query1 = "select * from missingreport where Missing_ID=$id";
	
	
	
	$result1 = $crud->getData($query1);
	


	foreach($result1 as $res){
		$id = $res['Missing_ID'];
         $Status=$res['Status'];
	}
	
	
?>





<form action="StatusEditAction.php" method="POST">
	<input type="number" name="mid" hidden value="<?php echo $id;?>"/>
    <input type="text" name="missingstatus" value="<?php echo $Status;?>"/>
	
	<input type="submit" name="update2" value="Update"/>
</form>



