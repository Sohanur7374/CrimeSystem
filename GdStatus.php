<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	
	
	$query1 = "select * from gdreport where id=$id";
	
	
	
	$result1 = $crud->getData($query1);
	


	foreach($result1 as $res){
		$id = $res['id'];
         $Status=$res['Status'];
	}
	
	
?>





<form action="StatusEditAction.php" method="POST">
	<input type="number" name="id" hidden value="<?php echo $id;?>"/>
    <input type="text" name="gdstatus" value="<?php echo $Status;?>"/>
	
	<input type="submit" name="update1" value="Update"/>
</form>



