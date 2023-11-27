<?php
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

include('conn.php');
$sql="INSERT INTO customer(firstname,lastename,email,password,address,phone)
        VALUES('$firstname','$lastname','$email','$password','$address','$phone')
";
$result=mysqli_query($conn,$sql);
header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="css/stylee.css">
    <title>SignUp</title>
    <style>
      body{
        background-color: rgb(228,247,245);";
      }
      h2{
        color:rgb(79, 79, 137);
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      }
    </style>

</head>
<body>
<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
           
              <div class="card-body p-md-5 mx-md-4">
                
                <div class="text-center">
                 
                  <h2 class="mt-1 mb-5 pb-1" > <img src="images/R1.png" height="50px"> My Pharmacy</h2>
                </div>

                <form method="POST" >
                  <p>Please signup </p>
                    <div class="row" >
                    <div class="col-md-6 mb-4">

                  <div class="form-outline mb-4">
                    <input type="text" name="firstname" class="form-control"
                      placeholder="Enter Firstname" />
                    <label class="form-label" for="form2Example11">Firstname</label>
                  </div>
                  </div>
                  <div class="col-md-6 mb-4">

                  <div class="form-outline mb-4">
                    <input type="text" name="lastname" class="form-control"
                      placeholder="Enter lastname" />
                    <label class="form-label" for="form2Example11">Lastname</label>
                  </div>
                  </div>
                    </div>
                    <div class="row" >
                    <div class="col-md-6 mb-4">
                  <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control"
                      placeholder="Enter email address" />
                    <label class="form-label" for="form2Example11">Email</label>
                  </div>
                  </div>
                  <div class="col-md-6 mb-4">

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Enter password" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>
                  </div>
                  </div>
                  <div class="row" >
                    <div class="col-md-6 mb-4">
                  <div class="form-outline mb-4">
                    <input type="number" name="phone" class="form-control"
                      placeholder="Enter Phone" />
                    <label class="form-label" for="form2Example11">Phone</label>
                  </div>
                    </div>
                    <div class="col-md-6 mb-4">
                  <div class="form-outline mb-4">
        <select name="address" class="form-select">
        <option value="Damascus">Damascus</option>
        <option value="lattakia">Lattakia</option>
        <option value="Tartous">Tartous</option>
        <option value="homs">Homs</option>
        <option value="Hama">Hama</option>
        <option value="Aleppo">Aleppo</option>
        <option value="Hasaka">AL Hasakah</option>
        <option value="raqa">Raqa</option>
        <option value="der">DER ALzor</option>
        <option value="daraa">Daraa</option>
    </select>
                    <label class="form-label" for="form2Example11">Address</label>
                  </div>
                    </div>
                  </div>

                  
                  

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit">Sign Up
                    </button>
                    
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
   <!-- <form action="">
        <input type="text" name="firstname" placeholder="Firstname" ><br>
        <input type="text" name="lastname" placeholder="Lastname" ><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password" ><br>
        <input type="text" name="address" placeholder="address" ><br>
        <input type="number" name="phone" placeholder="phone"><br>
        <input type="submit" name="submit"><br>
    </form> -->
</body>
</html>