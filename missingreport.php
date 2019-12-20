<!DOCTYPE html>
<html>
<head>
</head>

<body>

  <center><fieldset style="max-height: 50%;max-width: 50%;">
<form method="post" action="missingreport.php">
  <h1>Missing Report Form</h1>

  <div class="control">
    <label for="name">Full name </label><input name="fullname" maxlength="20" type="text" />
  </div>
  <div class="control">
    <label for="height">Height </label><input name="height"maxlength="20" type="number"/>
  </div>
  <div class="control">
    <label for="weight">Weight </label><input name="weight" maxlength="20" type="number"  />
  </div>
  <div class="control">
    <label for="dressdetails">Dress Details </label><textarea rows="9" cols="25" name="dressdetails"></textarea> 
  </div>
  <div class="control">
    <label for="overallhealth">Overall Health </label><textarea rows="9" cols="25" name="overallhealth"></textarea> 
  </div>
  <div class="control">
    <label for="image">Image </label><input name="image" type="file" />
  </div>
  <fieldset style="max-height: 50%;max-width: 50%;">
    <legend>Gender</legend>
    <div class="control">
      <input  name="gender" type="radio" value="Male" /><label for="gender_male">Male</label>
    </div>
    <div class="control">
      <input name="gender" type="radio" value="Female" /><label for="gender_female">Female</label>
    </div>
  </fieldset>
  
  <div class="control">
    <label for="age">Age </label><input name="age" maxlength="20" type="number"  />
  </div>
  <div class="control">
    <label for="lastseenlocation">Last Seen Location</label><textarea rows="5" cols="20" name="lastseenlocation"></textarea>
  </div>
  <div class="control">
    <label for="lastseendate">Last Seen Date </label><input type="Date" name="date" maxlength="20"   />
  </div>
  <fieldset style="max-height: 50%;max-width: 50%;">
    <legend>MISSING PERSON REPORTED BY </legend>
    <div class="control">
    <label for="name">Full name </label><input name="reportername" maxlength="20" type="text" />
  </div>
    <div class="control">
    <label for="address">Address</label><textarea rows="5" cols="20" name="reporteraddress"></textarea>
  </div>
  </fieldset>
  <fieldset style="max-height: 50%;max-width: 50%;">
    <legend>REPORTING OFFICER  </legend>
    <div class="control">
    <label for="name">Full name </label><input name="officername" maxlength="20" type="text" />
  </div>
    <div class="control">
    <label for="datereported">Date for Reported </label><input name="reporteddate" maxlength="20" type="Date" />
  </div>
  <div class="control">
    <label for="unitnumber ">Unit Number  </label><input name="unitnumber" maxlength="20" type="number" />
  </div>
  </fieldset>
  
        
  
  <div class="control">
    <input type="submit" name="submit" value="Submit Missing Report"/>
    <button><a href="After_login.php">Home Page</a></button>
  </div>
  </form>
</fieldset>
  </center>
</body>

</html>

<style>
  body {
   background-color: #E6E6FA;

}
table {
  border: 6px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 50%;
  text-align: left;
  border-collapse: collapse;
}

.control, fieldset {
  margin: 6px 0;
}

label {
  display: inline-block;
  width: 120px;
  vertical-align: top;
}

input + label {
  width: auto;
}
</style>

<?php 
include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $fullname=$_POST['fullname'];
       $height=$_POST['height'];
       $weight = $_POST['weight'];
       $dressdetails =$_POST['dressdetails'];
       $overallhealth =$_POST['overallhealth'];
       $image =$_POST['image'];
       $gender =$_POST['gender'];
       $age =$_POST['age'];
       $lastseenlocation =$_POST['lastseenlocation'];
       $date =$_POST['date'];
       $reportername =$_POST['reportername'];
       $reporteraddress =$_POST['reporteraddress'];
       $officername =$_POST['officername'];
       $reporteddate =$_POST['reporteddate'];
       $unitnumber =$_POST['unitnumber'];


       $res = $crud->execute("insert into missingreport(Full_Name,Height,Weight,Dress_Details,Health,Image,Gender,Age,Last_Location,Last_Seen_Date,Reported_By,Address,Reporting_Officer,Reported_Date,Unit_Number,Status) values('$fullname','$height','$weight','$dressdetails','$overallhealth','$image','$gender','$age','$lastseenlocation','$date','$reportername','$reporteraddress','$officername','$reporteddate','$unitnumber','Received')");

       if($res){
           echo("Missing Report submitted successfully ");
           echo("<br/>");
       }
       else{
           echo("something is wrong");
           echo("<br/>");
       }

   }

?>