
<!DOCTYPE html>
<html>
<head>
	<title>search bar</title>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--Jquery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Minified javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	.searchbar{
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    width: 400px;
  }
  


</style>
<body>
  <div style="background-color: #FFCCFF;">
    <marquee behaviour="obsolute"><h3>Government College of Engineering and Reaserach ,Awsari(Khurd)</h3></marquee>
  </div>
  <div class="container-fluid">
	<form action="search1.php" method="POST" >
    <input type="search" name="search" placeholder="Enter Branch" class="searchbar" >
     
 </form>
</div>
	
	
<div class="container-fluid">
	<?php
$con =mysqli_connect('localhost','root','','alumini');
$output = "";
$fname="";
$id="";
//collect
if(isset($_POST['search']))
{
  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^a-z]#i","",$searchq);
 $sql = "SELECT * FROM `record` WHERE Branch LIKE '%$searchq%'";
  $query=mysqli_query($con,$sql) ;
$count = mysqli_num_rows($query);
if($count==0){
  ?>
	<div class="jumbotron" >
 <div style="color:#3333FF;">
    <center><h3><?php echo "No Records Found"?></h3></center>
  </div>
 </div>
  <?php
}else{
	?>
	 <table class="table table-bordered table-striped table-hover">
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
	while ($result = mysqli_fetch_array($query)) {
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
}
}
?>

</table>
 </div>

    <div style="background-color: #000000; margin-bottom: 20px; margin-top: 500px; padding: 10px 10px 10px 10px;">
        <center >
            <h5><p style="color: #FFFFFF;">Government College Of Engineering and Reasearch,Awsari(Khurd)<br>
          Tal.Ambegaon Dist.Pune</p> </h5> 
        </center>
    </div>
</body>
</html>