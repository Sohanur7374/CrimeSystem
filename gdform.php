<!DOCTYPE html>
<html>

   <head>
    
   <link rel="stylesheet" type="text/css" href="style1.css">
   </head>
   
   <body>
      
      <form method="post" action="gdform.php" >
         

<b><h1>GD Form</h1><b>
    Thana:     
  <select name="select_thana" required>
 <option  value="thana">--Select Your Thana--</option>
  <option value="Mohammadpur thana">Mohammadpur Thana</option>
  <option value="Dhanmondi Thana">Dhanmondi Thana</option>
  <option value="Sha Ali Thana">Sha Ali Thana</option>
  <option value="Mirpur Model Thana">Mirpur Model Thana</option>
</select>
Your Name: <input type = "text" name = "name" placeholder="Enter your name" required />

NID Number:<input type ="number" name="nidnumber" placeholder="Enter your NID Number" required/>

Father Name: <input type = "text" name = "fathername" placeholder="Enter Father Name" required/>

Mother Name: <input type = "text" name = "mothername" placeholder="Enter mother Name" required/>

Permanent Address: <input type = "text" name = "permanentaddress" placeholder="Permanent Address" required/>

Present Address: <input type = "text" name = "presentaddress" placeholder="Present Address" required/>

Mobile Number: <input type = "number" name = "mobilenumber" placeholder="Mobile number" required/>
<label>Description:</label><br>
<textarea rows="13" cols="45" name="casedescription" placeholder="Enter Case Description" required></textarea>


<button type="submit" name ="submit">Submit your case</button>
<button><a href="after_login.php">Home</a></button>

   </form>
   
   </body>
   
</html>

<?php 
include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $select_thana=$_POST['select_thana'];
       $name=$_POST['name'];
       $nidnumber = $_POST['nidnumber'];
       $fathername =$_POST['fathername'];
        $mothername =$_POST['mothername'];
         $permanentaddress =$_POST['permanentaddress'];
          $presentaddress =$_POST['presentaddress'];
           $mobilenumber =$_POST['mobilenumber'];
            $casedescription =$_POST['casedescription'];


       $res = $crud->execute("insert into gdreport(Thana_Name,Victim_Name,NID_number,Father_Name,Mother_Name,PermanentAddress,PresentAddress,Mobile_Number,Case_Description,Status) values('$select_thana','$name','$nidnumber', '$fathername','$mothername','$permanentaddress','$presentaddress',' $mobilenumber',' $casedescription','Received')");

       if($res){
           echo("Case Successfully registrared");
           echo("<br/>");
       }
       else{
           echo("something is wrong");
           echo("<br/>");
       }

   }

?>
