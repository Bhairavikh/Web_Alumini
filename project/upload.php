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
  <title>Alumini meet</title>
</head>
<script type="text/javascript">
  function myfunction(){
    alert("Inserted Successfully");
  }
</script>
<body>
  
<!--<div class="container">
   <br>
   <div class="responsive">
   <table class="table table-bordered table-striped table-hover">
    <thead>
      <th>Id</th>
      <th>Profile pic</th>
      <th>Student-Name</th>
      <th>Branch</th>
      <th>Passout-year</th>
      <th>Company-Name</th>
      <th>Designation</th>
      <th>Experience</th>
      <th>Email-id</th>
      <th>Contact-No.</th>
    </thead>
    <tbody>-->
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
   <!-- </tbody>
     
   </table>
 </div>
</div>-->
</body>
</html>