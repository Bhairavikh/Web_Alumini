<?php
$con = mysqli_connect('localhost','root','','alumini');

?>
<!DOCTYPE html>
<html>
<head>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css" />
  <title>view data</title>
  <script >
    $(document).ready(function(){
      var count=5;
      $("button").click(function(){
        count=count+5;
        $("#comments").load("load-commment.php", {
           count1: count

        })
      })
    })
  </script>
 <style>
  .searchbar{
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    width: 400px;
    height:30px;
  }
  


</style>
</head>
<body >

   <div class="row navbar-fixed-top " style="background-color: #339999">
    <div class="col-xs-2" align="middle"><img src="../project/logo.jpeg" style="width:100px;"></div>
    <div class="col-xs-10" style="text-align: center; color: #FFFFFF;"><h3>शासकीय अभियांत्रिकी व संशोधन महाविद्यालय, अवसरी खुर्द<br>तालुका- आंबेगाव, जिल्हा- पुणे, ४१२४०५<br>  Government College of Engineering &amp; Research, Avasari Khurd<br>Taluka - Ambegaon, District - Pune, 412405</h3></div>
    
  </div>

<div class="container-fluid">
  <form action="search1.php" method="POST" style="margin-top: 125px;" >
    <input type="text" name="search" placeholder="Enter Branch" class="searchbar">
    
   </form> 
 </div>

  



<div class="container" style="margin-top: 30px; ">


<div id="comments" >


  <?php

         $displayquery ="SELECT * FROM `record` LIMIT 5 ";
                  $querydisplay = mysqli_query($con,$displayquery);

                  //$row = mysqli_num_rows($querydisplay);
                  ?>
                  <table class="table table-bordered table-striped table-hover" >
                    <thead>
                      <th>profile pic</th>
                      <th>Student Name</th>
                      <th>Branch</th>
                      <th>Passout Year</th>
                      <th>Company Name</th>
                      <th>Designation</th>
                      <th>Year of Experience</th>
                      <th>Email ID</th>
                      <th>Contact Number</th>
                    </thead>
                  
                  <?php
                  
                  while($result = mysqli_fetch_array($querydisplay ))
                  {

                      ?>
                    
                       <tr>
                          <td><center><img  src="<?php echo $result['profile_pic']; ?>" height="100px" width="100px" ></center></td>
                          <td><?php echo $result['Name']; ?></td>
                          <td><?php echo $result['Branch']; ?></td>
                          <td><?php echo $result['Passout_year']; ?></td>
                          <td><?php echo $result['Company_Name']; ?></td>
                          <td><?php echo $result['Designation']; ?></td>
                          <td><?php echo $result['Experience']; ?></td>
                          <td><?php echo $result['Email']; ?></td>
                          <td><?php echo $result['Contact_no']; ?></td>
                      </tr>
                    
                    
                      <?php
                      }
?>
</table>
 
  
</div>
</div>
<center><button class="btn btn-warning" style="width: 150px; margin-bottom: 100px;">show more</button></center> 

   <div style="background-color: #000000; margin-bottom: 20px; margin-top: 50px; padding: 10px 10px 10px 10px;">
        <center >
            <h5><p style="color: #FFFFFF;">Government College Of Engineering and Reasearch,Awsari(Khurd)<br>
          Tal.Ambegaon Dist.Pune</p> </h5> 
        </center>
    </div>
</body>
</html>