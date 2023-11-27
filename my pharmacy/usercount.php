<?php
include("conn.php");
$sql="SELECT *
FROM customer";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$pharmacy=count($rows);
$prog= $pharmacy * 100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Damascus' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$Damascus=count($rows);
$phdam= $Damascus*100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Lattakia' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$lattakia=count($rows);
$phlatt= $lattakia*100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Tartous' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$tartous=count($rows);
$phtar= $tartous*100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Homs' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$Homs=count($rows);
$phhoms= $Homs*100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Hama' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$Hama=count($rows);
$phHama= $Hama*100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Aleppo' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$Aleppo=count($rows);
$phaleppo= $Aleppo*100/$pharmacy;


$sql="SELECT *
FROM customer
WHERE address='Hasaka' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$Hasaka=count($rows);
$phHasaka= $Hasaka*100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Raqa' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$Raqa=count($rows);
$phRaqa= $Raqa*100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Der Alzor' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$DerAlzor=count($rows);
$phder= $DerAlzor*100/$pharmacy;

$sql="SELECT *
FROM customer
WHERE address='Daraa' ";

$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$Daraa=count($rows);
$phdaraa= $Daraa*100/$pharmacy;
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
        h3{
            text-align: center;
          color:rgb(79, 79, 137);
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        body{
          position:relative;
        }
        .pharmacy{
          position:absolute;
          left: 50%;
          transform:translate(-50% , -50%);
          width: 700px;
          margin-top:700px;
        }
        .breadcrumb{
          text-align:center;
        }
    </style>
</head>
<body>
    <?php include("navbar.php"); ?>

    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="statistics.php">Pharmacy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="usercount.php">Users</a>
  </li>
</ul>
    <div class="pharmacy" >
    <h3>All Users</h3>
    <div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $prog; ?>%;" aria-valuenow="<?php echo $pharmacy; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $pharmacy; ?></div>
</div><br><hr>
<h3>In Damascus</h3>

<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phdam; ?>%" aria-valuenow="<?php echo $Damascus; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $Damascus.' '.'('.$phdam.'.%)'; ?></div>
</div><br><hr>

<h3>In Lattakia</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phlatt; ?>%" aria-valuenow="<?php echo $Damascus; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $lattakia.' '.'('.$phlatt.'.%)'; ?></div>
</div><br><hr>

<h3>In Tartous</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phtar; ?>%" aria-valuenow="<?php echo $tartous; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $tartous.' '.'('.$phtar.'.%)'; ?></div>
</div><br><hr>

<h3>In Homs</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phhoms; ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><?php echo $Homs.' '.'('.$phhoms.'.%)'; ?></div>
</div><br><hr>

<h3>In Hama</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phHama; ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><?php echo $Hama.' '.'('.$phHama.'.%)'; ?></div>
</div><br><hr>

<h3>In Aleppo</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phaleppo; ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><?php echo $Aleppo.' '.'('.$phaleppo.'.%)'; ?></div>
</div><br><hr>

<h3>In AL Hasakah</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phHasaka; ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><?php echo $Hasaka.' '.'('.$phHasaka.'.%)'; ?></div>
</div><br><hr>

<h3>In AL Raqa</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phRaqa; ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><?php echo $Raqa.' '.'('.$phRaqa.'.%)'; ?></div>
</div><br><hr>

<h3>In Der Alzor</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phder; ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><?php echo $DerAlzor.' '.'('.$phder.'.%)'; ?></div>
</div><br><hr>

<h3>In Daraa</h3>
<div class="progress" style="height: 20px;">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $phdaraa; ?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><?php echo $Daraa.' '.'('.$phdaraa.'.%)'; ?></div>
</div><br><hr>
    </div>
    
</body>
</html>