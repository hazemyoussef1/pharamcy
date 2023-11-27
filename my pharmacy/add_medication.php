<?php
session_start();
if(isset($_GET['submit'])){
    $namem = $_GET['namem'];
    include('conn.php');
    $sql="SELECT id
    FROM medicine
    <!--WHERE name = '$namem'-->
";
$result=mysqli_query($conn,$sql);

$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach($rows as $row){
    $_SESSION['idmed']=$row['id'];
}
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
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Home Page</title>
    <style>
    .body{
      background-color:rgb(94, 123, 148);
    }
    header{
        position:sticky;
        top:0px;
    }
    h1{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
    footer{
    position:relative;
    top:100%;
}
table{
    text-align:center;

}
table td{
    color:rgb(79, 79, 137);
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.search{
text-align:center;
padding:20px;
border: 1px solid black;
margin-top: 60px;
background-color:rgb(94, 123, 148);
}
    h2{
      color:rgb(79, 79, 137);
      font-family: 'Times New Roman', Times, serif;
    }
    h3{
      font-family: 'Times New Roman', Times, serif;
      color: white;
    }
    header a{
    text-decoration: none;
    color: rgb(79, 79, 137);
    font-size: 20px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.home{
  color: black;
    background-color: white;
    border-radius: 10px;
}
</style>
</head>
<body>
    <div>
<?php include('header.php'); ?>


    <!--<form>
        <input type="text" name="namem"/>
        <input type="submit" name="submit" />
    </form> -->

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

        <table class="table table-striped table-hover">
            <tr align="center">
                <td colspan="4" ><h2> Welcome Ph. <?php echo $_SESSION['firstname'].' ' .$_SESSION['lastename']; ?> </h2></td>
            </tr>
            <tr >
                <th><i class='fas fa-clinic-medical '>Pharmacy Name</th>
                <th><i class="fas fa-phone "></i>Phone</th>
                <th><i class="fas fa-map-marker-alt "></i>Address</th>
                <th><i class="fas fa-map-marker-alt "></i>Street</th>
            </tr>
            <tr>
                <td> <?php echo $_SESSION['pharmacy_name']; ?> </td>
                <td> <?php echo $_SESSION['phone']; ?> </td>
                <td> <?php echo $_SESSION['address']; ?> </td>
                <td> <?php echo $_SESSION['street']; ?> </td>
            </tr>
            
            </table>
            <div class="search">
                <h3>Enter Your Medicines</h3>
        <form action="CRUD.php" class="d-flex" role="search">
        <div class="col-md-4">
    <div class="form-outline">
    </div>
   </div>
            <div class="col-md-4">
            <div class="form-outline">
            <input type="text" class="form-control"  name="namemed" placeholder="Enter Name Of Medicines" aria-label="Recipient's username" aria-describedby="button-addon2"><br>
            <input type="text" class="form-control" name="id_pha" value="<?php echo $_SESSION['id']; ?> " placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" hidden>
            <input type="date" class="form-control" name="exp"  aria-label="Recipient's username" aria-describedby="button-addon2"><br>
            <input type="text" class="form-control"  name="conc" placeholder="Enter MG" aria-label="Recipient's username" aria-describedby="button-addon2"><br>
            <button class="btn btn-primary" type="submit"  name="submit">ADD</button>
            </div>
            </div>
        </form>
        
</div>

<div>
<br>
<br>
</body>
<script src="bootstrap5/js/bootstrap.js">const carousel = new bootstrap.Carousel('#myCarousel')</script>
</html>