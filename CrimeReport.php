<!DOCTYPE html>
<html>

   <head>
   
   
   </head>
   
   <body>
      
      <form method="post" action="CrimeReport.php" >
   <center>       
<fieldset style="max-height: 100%;max-width: 50%;">
<b><h1>Crime Reporting Form</h1><b>
    
 <div class="control">
    <label for="name">Your Name </label><br>
    <input name="fullname" maxlength="20" type="text" />
  </div>
 <div class="control">
    <label for="nid">NID Number </label><br>
    <input name="nid" maxlength="20" type="number" />
  </div>
 <div class="control">
    <label for="mobile">Mobile Number </label><br>
    <input name="mobile" maxlength="20" type="number" />
  </div>

 <div class="control">
    <label for="mail">Your Mail </label><br>
    <input name="email" maxlength="20" type="email" />
  </div>

 <div class="control">
    <label for="subject">Select Crime Type </label><br>
    <select name="CrimeType">
      <option>--Select Your Crime--</option>
      <option value="Murder">Murder</option>
      <option value="Drug Trafficking">Drug Trafficking</option>
      <option value="Extortion">Extortion</option>
      <option  value="Robbery">Robbery</option>
      <option value="Political Violence">Political Violence</option>
      <option value="Corruption">Corruption</option>
      <option value="Black Marketeering">Black Marketeering</option>
      <option value="Others">Others</option>
    </select>
  </div>
  <br>
  <br>
<div class="control">
    <label for="image">Image  :</label><input name="evidence" type="file" />
  </div>
  <br>
  <br>



<div class="control">

<label>Please Write Details Your Complain</label><br>
<textarea rows="13" cols="45" name="casedescription" placeholder="Enter Your Complain Description" required></textarea>
</div>


<button type="submit" name ="submit">Submit your case</button>
<button><a href="after_login.php">Home</a></button>
</fieldset>
   </form>
   </center>
   </body>
   
</html>

<?php 
include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $fullname=$_POST['fullname'];
       $nid=$_POST['nid'];
       $mobile =$_POST['mobile'];
        $email =$_POST['email'];
         $CrimeType =$_POST['CrimeType'];
          $evidence =$_POST['evidence'];
            $casedescription =$_POST['casedescription'];


       $res = $crud->execute("insert into CrimeReport(Full_Name,NID,Mobile_Number,Email,Crime_Type,Evidence,Description,Status) values('$fullname','$nid','$mobile','$email','$CrimeType','$evidence','$casedescription','Received')");

       if($res){
           echo("Crime Report Submission Successfull");
           echo("<br/>");
       }
       else{
           echo("something is wrong");
           echo("<br/>");
       }

   }

?>


       