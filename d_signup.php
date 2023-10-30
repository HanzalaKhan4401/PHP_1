<?php

include ('navebar1.php');
include ('config.php');




if(isset($_POST['register'])){
  $name = $_POST['d_username'];
  $email = $_POST['d_email'];
  $Password = $_POST['d_password'];


   
  $hashPass = password_hash($Password, PASSWORD_BCRYPT);

      $check_email = "SELECT * from `doctor` where email = '$d_email' ";
      $run_email = mysqli_query($connection, $check_email);
      if(mysqli_num_rows($run_email) > 0){
          echo "Email already exist";   
        
      }else{
          $insert = "INSERT INTO `doctor` (`name`, `email`, `password`) VALUES ('$name', '$email','$hashPass')";
      $connect_insert = mysqli_query($connection, $insert);
      }
      header("location:login.php"); 
}





?>
<style>
  #form{
    margin-bottom: 10%
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">
 
 <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

 <!-- Icon Font Stylesheet -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

 <!-- Libraries Stylesheet -->
 <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 <link href="lib/animate/animate.min.css" rel="stylesheet">
 <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

 <!-- Customized Bootstrap Stylesheet -->
 <link href="css/bootstrap.min.css" rel="stylesheet">

 <!-- Template Stylesheet -->
 <link href="css/style.css" rel="stylesheet">
</head>
<body>
<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
			<form action="" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5" id="form">
				<h3 class="mb-4 billing-heading"> Please register Yourself</h3>
	          	<div class="row align-items-end">
                 <div class="col-md-12 py-2 ">
                        <div class="form-group">
                            <label for="Username">Username</label>
                          <input type="text" class="form-control" name= "d_username" placeholder="Username">
                        </div>
                 </div>
	          	  <div class="col-md-12 py-2">
	                <div class="form-group">
	                	<label for="Email">Email</label>
	                  <input type="text" class="form-control" name= "d_email" placeholder="Email" required>
	                </div>
	              </div>
                 
	              <div class="col-md-12 py-3">
	                <div class="form-group">
	                	<label for="Password">Password</label>
	                    <input type="password" class="form-control" name= "d_password" placeholder="Password">
	                </div>

                </div>
                <div class="col-md-12 py-2">
                	<div class="form-group mt-4">
							<div class="radio">
                                <button name= "register" class="btn btn-primary py-3 px-4">Register</button>
                                
						    </div>
					</div>
                </div>

               
	          </form><!-- END -->
          </div> <!-- .col-md-8 -->
          </div>
        </div>
      </div>
    </section> <!-- .section -->

<?php 

include('footer.php');


?>



</body>
</html>