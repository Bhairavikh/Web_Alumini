<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Alumini meet</title>
     <script type="text/javascript">
  function myfunction(){
    alert("Inserted Successfully");
  }
</script>
</head>
<body>
  <div class="col-xs-2"></div>
  <div class="col-xs-8">
  <form action="Photo_gallary.php" method="POST" enctype="multipart/form-data" style="margin-top: 50px;">
        <center><h2>PHOTO GALLARY</h2></center>
        <hr>
       <div class="form-group">
        <label for="user">UPLOAD PHOTO:</label>
        <input type="file" name="file" id="file" class="form-control" required>
        </div>

        <center><input type="submit" name="submit" value="UPLOAD" class="btn btn-success"></center>
    </form></div>
    <div class="col-xs-2"></div>
<?php
$con=mysqli_connect("localhost","root","","alumini");

if(isset($_POST['submit'])){
    $files =$_FILES['file'];
    
    print_r($files);

        $filename = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];

        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png','jpg','jpeg');
        if(in_array($filecheck,$fileextstored)){
          $destinationfile = 'upload1/'.$filename;
          move_uploaded_file($filetmp,$destinationfile);

         $q= "INSERT INTO `photo_gallary`(`Photos`) VALUES ('$destinationfile')";
         $query = mysqli_query($con,$q);
       if($query){
          echo '<script> myfunction() </script>';
         }

         
  }       
}



?>





</body>
</html>
