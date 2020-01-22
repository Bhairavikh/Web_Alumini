
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>



<!-- 2. Create links -->

    <title>Alumini meet</title>
    <style type="text/css">
        body{
            background:#339999;
        }
        .container h1{
            color: #fff;

        }
        .container img{
            border:2px solid white;
            padding: 2px 2px 2px 2px;
        }
    </style>
</head>
<body>
<div class="container">
    
    <button type="button" class="btn btn-primary " onclick="window.location.href='Login1.php'" style="float:right;">UPLOAD IMAGES</button>
  <center><h2 style="margin-bottom: 30px;">Photo Gallary</h2>


   <?php
           $con=mysqli_connect("localhost","root","","alumini");
         $displayquery ="SELECT `id`, `Photos` FROM `photo_gallary` ORDER BY id Desc";
                  $querydisplay = mysqli_query($con,$displayquery);

                  //$row = mysqli_num_rows($querydisplay);
                  ?>
                 
                  <?php
                  
                  while($result = mysqli_fetch_array($querydisplay ))
                  {

                      ?>
                    
                       <a data-fancybox="gallary" href="<?php echo $result['Photos']; ?>"><img  src="<?php echo $result['Photos']; ?>"  style="border-radius: 10px; height: 250px; width:250px;" ></a>
                          
                      <?php
                      }
?>
</center>  </div>

 <div style="background-color: #000000; margin-bottom: 20px; margin-top: 70px; padding: 10px 10px 10px 10px;">
        <center >
            <h5><p style="color: #FFFFFF;">Government College Of Engineering and Reasearch,Awsari(Khurd)<br>
          Tal.Ambegaon Dist.Pune</p> </h5> 
        </center>
    </div>

</body>
</html>