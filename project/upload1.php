
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--Jquery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Minified javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
  <title>alumini meet</title>

  
</head>
<body >

 
  
     
        <?php 
              
              if(isset($_POST['submit']))
              {
                $username =$_POST['username'];
                $files = $_FILES['file'];
              
                $filename = $files['name'];
                $fileerror = $files['error'];
                $filetemp = $files['tmp_name'];

                $fileext = explode('.', $filename);
                $filecheck = strtolower(end($fileext));
                $fileextstored = array('png','jpeg','jpg');
                if(in_array($filecheck, $fileextstored));
                {
                  $destinationfile = 'upload/'.$filename;
                  move_uploaded_file($filetemp, $destinationfile);

                  $q ="INSERT INTO `uploads`(`username`, `profile`) VALUES ('$username','$destinationfile')";
                  $query = mysqli_query($con,$q);

                   if($query){
                    echo "Data inserted successfully";
                  }

                /*  $displayquery ="SELECT * FROM `uploads` ";
                  $querydisplay = mysqli_query($con,$displayquery);

                  //$row = mysqli_num_rows($querydisplay);
                  
                  while($result = mysqli_fetch_array($querydisplay ))
                  {

                      ?>
            
                       <tr>
                          <td><?php echo $result['uid']; ?></td>
                          <td><?php echo $result['username']; ?></td>
                          <td><img  src="<?php echo $result['profile']; ?>" height="100px" width="100px" onmouseover="increase(this)"
                           onmouseout="decrease(this)"></td>
                        </tr>
                          
                      <?php
                  }*/
                }
              }

        ?>
      
     
</body>
</html>