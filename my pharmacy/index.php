<?php
session_start();
if(isset($_GET['submit'])){
    $email = $_GET['email'];
    $password =$_GET['password'];
    include('conn.php');
   $sql="SELECT *
   FROM customer
   WHERE email='$email' and password='$password'
   ";
   $result=mysqli_query($conn,$sql);
   
   if(mysqli_num_rows($result)==1){
    header('location:search_medication.php');
    $rows=mysqli_fetch_all($result , MYSQLI_ASSOC);
    foreach($rows as $row){
      $_SESSION['idcu']=$row['id'];
      $_SESSION['firstname']=$row['firstname'];
      $_SESSION['lastename']=$row['lastename'];
      $_SESSION['email']=$row['email'];
      $_SESSION['address']=$row['address'];
      $_SESSION['password']=$row['password'];
      $_SESSION['phone']=$row['phone'];
    }
   }else{
    $error = '<div class="alert alert-danger">Incorrect email or Password</div>';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Pharmacy</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
   <style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
h1{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
    </style>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/AMR.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form >
          
        <div class="text-center">
                 
                 <h1 class="mt-1 mb-5 pb-1"> <img src="images/R1.png" height="50px"> My Pharmacy</h1>
               </div>
        <?php if(isset($error)){echo $error;}?>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email " />
            <label class="form-label" for="form3Example3">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
<!--<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
           
              <div class="card-body p-md-5 mx-md-4">
                
                <div class="text-center">
                 
                  <h1 class="mt-1 mb-5 pb-1"> <img src="images/R1.png" height="50px"> My Pharmacy</h1>
                </div>
                  <br>
                  <br>
                <form>
                  <p>Please login to your account</p>
                  <?php if(isset($error)){echo $error;}?>
                  <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control"
                      placeholder="Enter email address" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Enter password" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit">Log
                      in</button>
                    
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                   <a href="signup.php" > <button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>

                </form>

              </div>
            </div>
            
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
</section>

      </form>
    <form action="">
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password" ><br>
        <input type="submit" name="submit" >
    </form>
    <a href="signup.php">signup</a> -->
</body>
<?php 
  if(isset($_GET['logout'])){
    session_destroy();
  }
 
 ?>
</html>