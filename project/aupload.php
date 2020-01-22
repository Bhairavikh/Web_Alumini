<?php
$con=mysqli_connect("localhost","root","","alumini");

?>
<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="body.css" />-->
<!--Jquery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Minified javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="dist/datepicker.min.js"></script>
  <title>Alumini meet</title>
</head>
    <style>
body{
    background-image: url("../project/bckmin.jpg ");
        background-repeat:no-repeat;
       background-size:cover;
} 


</style>
      <script>
  $( document).ready(function() {
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true
    });

  } );
  </script>
  <script type="text/javascript">
  function myfunction(){
    alert("Inserted Successfully");
  }
</script>
<body>

  <div style="background-color: #FFCCCC;">
    <marquee behaviour="obsolute"><h3>Government College of Engineering and Reaserach ,Awsari(Khurd)</h3></marquee>
  </div>
<div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
<form action="" method="POST" enctype="multipart/form-data">
      <center><h2>ENTER STUDENT INFORMATION</h2></center>
      <hr>
       <div class="form-group" style="margin-top: 30px;">
        <label for="user">PROFILE PIC:</label>
        <input type="file" name="file" id="file" class="form-control" required>
        </div>

        <div class="form-group">
        <label for="user">STUDENT NAME:</label>
        <input type="text" name="username" id="file" class="form-control" required>
        </div>

        <div class="form-group ">
        <label for="user">BRANCH:</label>
        <div class="form-control">
        <select name="Branch" required="">
            <option></option>
            <option>Computer Engineer</option>
            <option>Electronics and Telecommunication Engineer</option>
            <option>Civil Engineer</option>
            <option>Mechanicl Engineer</option>
            <option>Automobile Engineer</option>
            <option>Instrumentation and Control Engineer</option>
        </select>
        </div>
        </div>

        <div class="form-group">
        <label for="user">PASSOUT YEAR:</label>
        <input type="text" name="Passout_year"  class="form-control" placeholder="Enter Passout-year" required>
        </div>

        <div class="form-group">
        <label for="user">COMPANY-NAME:</label>
        <input type="text" name="Company_name"  class="form-control" placeholder="Enter Company Name" required>
        </div>

        <div class="form-group">
        <label for="user">DESIGNATION:</label>
        <input type="text" name="Designation"  class="form-control" placeholder="Enter Designation" required>
        </div>


        <div class="form-group">
        <label for="user">EXPERIENCE:</label>
        <input type="text" name="Experience" class="form-control" placeholder="Enter Experience Year" required>
        </div>

        <div class="form-group">
        <label for="user">CONTACT NO.</label>
        <input type="text" name="Contact"  class="form-control" placeholder="Enter Contact Number" required>
        </div>

        <div class="form-group">
        <label for="user">EMAIL-ID:</label>
        <input type="text" name="Email" id="user" class="form-control" placeholder="Enter Email-ID" required>
        </div>


        <div class="form-group">
        <label for="user">ADDRESS:</label>
        <input type="textview" name="Address"  class="form-control" placeholder="Enter Address" required>
        </div>

              <center><input type="submit" name="submit" value="UPLOAD" class="btn btn-success"></center>
    </form>
</div>
<div class="col-xs-3"></div>
</div>


       <div style="background-color: #000000; margin-bottom: 20px; margin-top: 50px; padding: 10px 10px 10px 10px;">
        <center >
            <h5><p style="color: #FFFFFF;">Government College Of Engineering and Reasearch,Awsari(Khurd)<br>
          Tal.Ambegaon Dist.Pune</p> </h5> 
        </center>
    </div>



<?php
      $con=mysqli_connect("localhost","root","","alumini");
      

      if(isset($_POST['submit'])){

        $files = $_FILES["file"];
        $username =$_POST['username'];
       $branch =$_POST['Branch']; 
       $pass_year =$_POST['Passout_year'];
        $company =$_POST['Company_name'];
        $designation =$_POST['Designation'];
        $experience =$_POST['Experience'];
       $email =$_POST['Email'];
        $contact =$_POST['Contact'];
       $address =$_POST['Address'];
  
        
        $filename = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];

        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png','jpg','jpeg');
        if(in_array($filecheck,$fileextstored)){
          $destinationfile = 'upload/'.$filename;
          move_uploaded_file($filetmp,$destinationfile);

         $q= "INSERT INTO `record` ( `profile_pic`, `Name`, `Branch`, `Passout_year`, `Company_Name`, `Designation`, `Experience`, `Contact_no`, `Email`, `Address`) VALUES ( '$destinationfile', '$username', '$branch', '$pass_year', '$company', '$designation', '$experience', '$contact', '$email', '$address')";

          
         
         $query = mysqli_query($con,$q);
         if($query){
          echo '<script> myfunction() </script>';
         }
       } 
      }
      ?>

</body>
</html>