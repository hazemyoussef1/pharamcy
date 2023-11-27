<?php
session_start();
$address= $_SESSION['address'];

include("conn.php");
$sql="SELECT * FROM pharmacist WHERE address='$address'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
    <style>
      .card{
        float:right;
        margin: 2px 0px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        
        text-align: center;
        
      }
    .body{
      background-color:rgb(94, 123, 148);
    }
    body{
        color:rgb(79, 79, 137);
      }
    .navbar{
     display: flex;
     justify-content: space-evenly;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      
}
h1{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
h2{
    color:rgb(79, 79, 137);
    text-align: center;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.home{
  color: black;
    background-color: white;
    border-radius: 10px;
}
header a{
    text-decoration: none;
    color: rgb(79, 79, 137);
    font-size: 20px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

.search{
text-align:center;
padding:10px;
background-color: rgb(228,247,245);
}

      </style>
</head>

<body>
  
<?php include("nav.php"); ?>
<div class="body" >
<div class="container" >
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/Image.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="background-color: rgb(228,247,245);">Find Your Medication</h5>
        <p style="font-size: 25px;background-color:rgb(228,247,245);">This Website Will Help You Find The Pharmacy Which Have Your Medicines</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/image3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5  style="background-color: rgb(228,247,245);" >Order Your Medication</h5>
        <p style="font-size: 25px;background-color:rgb(228,247,245);">It Helps You Look Up For Medicines</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="background-color:rgb(228,247,245);">Discover More Pharmacies</h5>
        <p style="font-size: 25px;background-color:rgb(228,247,245);">It Helps You Find More Pharmacies In Your Area</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>

<div class="search">
  <h2 >Search Your Medication</h2>
  <br>
   <form action="viewmed.php" class="d-flex" role="search">
   <div class="col-md-4">
    <div class="form-outline">
    </div>
   </div>
    <div class="col-md-4">
    <div class="form-outline">
      <select name="address" class="form-select">
    <option value="Damascus">Select City</option>
        <option value="Damascus">Damascus</option>
        <option value="lattakia">Lattakia</option>
        <option value="Tartous">Tartous</option>
        <option value="homs">Homs</option>
        <option value="Hama">Hama</option>
        <option value="Aleppo">Aleppo</option>
        <option value="Hasaka">AL Hasakah</option>
        <option value="raqa">Raqa</option>
        <option value="der">Der ALzor</option>
        <option value="daraa">Daraa</option>
    </select><br>
    <input type="text" name="namem" class="form-control" placeholder="Enter Name Of Medicine" ><br>
    <input type="submit" name="submit" class="btn btn-outline-success" value="Search">
</div>
    </div>
    <div class="col-md-4">
    <div class="form-outline">
    
    </div>
    </div>
   </form>
</div>
 </div>
 <h2  >Pharmacies In Your Area</h2>

  <?php foreach($rows as $row){ ?>
    
   <div class="card w-50">
  <div class="card-body">
    <h5 class="card-title"><i class='fas fa-clinic-medical'></i><?php echo $row['pharmacy_name']; ?></h5>
    
    <p class="card-text"><i class="fas fa-map-marker-alt"></i>Street : <?php echo $row['street'] ?><br>
    <i class="fas fa-phone"></i> Phone : <?php echo $row['phone'] ?></p>
    <a href="showmed.php?idph=<?php echo $row['id']?>&action=show" class="btn btn-primary">View Medicine</a>
   </div>
</div>
<?php } ?>
</body>

<script src="bootstrap5/js/bootstrap.js">const carousel = new bootstrap.Carousel('#myCarousel')</script>
</html>