<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--Jquery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Minified javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="stylesheet" type="text/css" href="Style.css" />

	<title>Alumini meet</title>
</head>
<script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.password.value == "123") {
                    window.open('aupload.php')/*opens the target page while Id & password matches*/
                }
                else {
                    alert("Enter correct password")/*displays error message*/
                }
            }
        </script>
<body>

     <div style="background-color: #3399FF;">
    <marquee behaviour="obsolute"><h3>Government College of Engineering and Reaserach ,Awsari(Khurd)</h3></marquee>
  </div>
	<div class="container" style="margin-top: 100px;">
		<div class="col-md-4"></div>
		   <div class="col-md-4">
		     <div class="panel-group">
             <div class="panel panel-primary">
            	<div class="panel-heading">
          		<h4><center>Login</center></h4>
                </div>
                <div class="panel-body">
            	  <p class="text-warning">Login here</p>
            	    <form method="POST"  >
                    <div class="form-group">
                     <input type="password" class="form-control" name="password" placeholder="Enter Password" required >
                     </div>
                     <div class="form-group">
                     	<a href="#"><button class="btn btn-primary" onclick="check(this.form)" >Login</button></a>
                     </div>
                     </form>
                </div>
          </div>
		</div>
	</div>
	<div class="col-md-4"></div>
	</div>

    <div style="background-color: #000000; margin-bottom: 20px; margin-top: 100px; padding: 10px 10px 10px 10px;">
        <center >
            <h5><p style="color: #FFFFFF;">Government College Of Engineering and Reasearch,Awsari(Khurd)<br>
          Tal.Ambegaon Dist.Pune</p> </h5> 
        </center>
    </div>

</body>
</html>