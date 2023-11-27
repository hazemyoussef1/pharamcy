<?php
if($_GET["action"]=="update"){

$id=$_GET['id_pha'];

include("conn.php");

$sql=" SELECT *
FROM pharmacist
WHERE id='$id'";

$result=mysqli_query($conn,$sql);

$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

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
    <?php foreach($rows as $row){ ?>
   
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
          
            <form  action="up.php" >
            <input type="text" name="id" value="<?php echo $row['id'] ?>" hidden/><br>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">

                    <input type="text" name="pname" value="<?php echo $row['pharmacy_name'] ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="id">Pharmacy Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="number" name="phone" value="<?php echo $row['phone'] ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="phone">Phone</label>
                  </div>

                </div>
              </div>

              

              <div class="row">
                <div class="col-12">

                <select name="address" class="form-select form-select-lg mb-3">
                <option value="<?php echo $row['address'] ?>" ><?php echo $row['address'] ?></option>
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
                  <label class="form-label select-label">Choose option</label>

                </div><br>
                <div class="form-outline">
                    <input type="tel" type="text" name="street" value="<?php echo $row['street'] ?>" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Street</label>
                  </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="edit" value="Edit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


   <!-- <form action="up.php">
        <input type="text" name="id" value="<?php echo $row['id'] ?>"/><br>
        <input type="text" name="pname" value="<?php echo $row['pharmacy_name'] ?>"/><br>
        <input type="number" name="phone" value="<?php echo $row['phone'] ?>"/><br>

        <select name="address"  class="form-select" aria-label="Disabled select example" autofocus>
       <option value="<?php echo $row['address'] ?>" ><?php echo $row['address'] ?></option>
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
    
        <input type="text" name="address" value="<?php echo $row['address'] ?>"/><br>
        <input type="text" name="street" value="<?php echo $row['street'] ?>"/><br>
        <input type="submit" name="edit">
    </form> -->
    <?php } ?>
</body>
</html>