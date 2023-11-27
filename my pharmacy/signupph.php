<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
        <link rel="stylesheet" href="css/stylee.css">

    <title>Document</title>
    <style>
      .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
      </style>
</head>
<body>
<?php include("navbar.php"); ?>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
          <div class="he" >
      <img src="images/R1.png"  height="50px"  class="d-inline-block align-text-top">
      <h1>My Pharmacy</h1>
    </div>

            <form action="CRUD.php" method="POST" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="firstname" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="lastname" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100 ">
                    <input type="text" name="phname" class="form-control form-control-lg" />
                    <label for="birthdayDate" class="form-label">Pharmacy Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">
              <div class="form-outline">
                <input type="number" name="phone" class="form-control form-control-lg" />
                <label class="form-label">phone</label>
                  </div>
              </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label">Password</label>
                  </div>

                </div>
              </div>

              <div class="row">
              <div class="col-md-6 mb-4 pb-2">

                  <select name="address"  class="form-select form-select-lg mb-3">
                    <option value="1" disabled>Choose Address</option>
                    <option value="Damascus">Damascus</option>
                    <option value="lattakia">Lattakia</option>
                    <option value="Tartous">Tartous</option>
                    <option value="Homs">Homs</option>
                    <option value="Hama">Hama</option>
                    <option value="Aleppo">Aleppo</option>
                    <option value="Hasaka">AL Hasakah</option>
                    <option value="Raqa">Raqa</option>
                    <option value="Der Alzor">DER ALzor</option>
                    <option value="Daraa">Daraa</option>
                  </select>
                  <label class="form-label">Adress</label>
                </div>
                <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                <input type="text" name="street" class="form-control form-control-lg" />
                <label class="form-label">Street</label>
                </div>

                </div>
              </div>
              <div class="row">
              
                
              <div class="col-md-6 mb-4 pb-2">
              <input class="btn btn-primary btn-lg" type="submit" name="insert" value="ADD" />
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
           
              <div class="card-body p-md-5 mx-md-4">
                
                <div class="text-center">
                 
                  <h1 class="mt-1 mb-5 pb-1" > <img src="images/R1.png" height="65px"> My Pharmacy</h1>
                </div>

                <form action="CRUD.php" method="POST">
                  <p>Please signup </p>

                  <div class="form-outline mb-4">
                    <input type="text" name="firstname" class="form-control"
                      placeholder="Enter Firstname" />
                    <label class="form-label" for="form2Example11">Firstname</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="lastname" class="form-control"
                      placeholder="Enter lastname" />
                    <label class="form-label" for="form2Example11">Lastname</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="phname" class="form-control"
                      placeholder="Enter phname" />
                    <label class="form-label" for="form2Example11">pharmacy_name</label>
                  </div>



                  <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control"
                      placeholder="Enter email address" />
                    <label class="form-label" for="form2Example11">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Enter password" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="form-outline mb-4">
                  <select name="address" class="form-select">
        <option value="Damascus">Damascus</option>
        <option value="lattakia">Lattakia</option>
        <option value="Tartous">Tartous</option>
        <option value="Homs">Homs</option>
        <option value="Hama">Hama</option>
        <option value="Aleppo">Aleppo</option>
        <option value="Hasaka">AL Hasaka</option>
        <option value="Raqa">Raqa</option>
        <option value="Der Alzor">DER ALzor</option>
        <option value="Daraa">Daraa</option>
    </select>
                    <label class="form-label" for="form2Example11">Address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="street" class="form-control"
                      placeholder="Enter street" />
                    <label class="form-label" for="form2Example11">street</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="number" name="phone" class="form-control"
                      placeholder="Enter Phone" />
                    <label class="form-label" for="form2Example11">Phone</label>
                  </div>
                  

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="insert">Sign Up
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
    <form>
        <input type="text" name="firstname" placeholder="Firstname" ><br>
        <input type="text" name="lastname" placeholder="Lastname" ><br>
        <input type="text" name="phname" placeholder="phname" ><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password" ><br>
        <input type="text" name="address" placeholder="address" ><br>
        <input type="text" name="street" placeholder="street" ><br>
        <input type="number" name="phone" placeholder="phone"><br>
        <input type="submit" name="submit" ><br>
    </form> -->
</body>
