 <html>
 <head>
  <title>
  </title>
</head>
 <body>
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
      
      <tbody>
 <?php
$con = mysqli_connect('localhost','root','','alumini');
  $newcount = $_POST['count1'];
         $displayquery ="SELECT * FROM `record` LIMIT  $newcount ";
                  $querydisplay = mysqli_query($con,$displayquery);

                  //$row = mysqli_num_rows($querydisplay);
                  
                  while($result = mysqli_fetch_array($querydisplay ))
                  {

                      ?>
            
                       <tr>
                           <td><img  src="<?php echo $result['profile_pic']; ?>" height="100px" width="100px" ></td>
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
</tbody>
</table>
</body>
</html>
