<?php
    session_start();
   $address = $_GET['address'];
   $namem = $_GET['namem'];
   $idcu=$_SESSION['idcu'];
   include('conn.php');
   
   $sql="SELECT pharmacy_name , address , street ,name , exp , phone , conc , medicine.id
   FROM pharmacist , medicine 
   WHERE medicine.id_pha = pharmacist.id AND pharmacist.address = '$address' AND medicine.name ='$namem' ";

   $result=mysqli_query($conn , $sql);

   $rows = mysqli_fetch_all($result , MYSQLI_ASSOC);
   foreach($rows as $row){
    $_SESSION['idmed']=$row['id'];
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
        <style>
            .card{
        float:right;
        
      }
      label{
        font-weight: bold;
      }
      .card{
        text-align: center;
        margin: 2px 0px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      }
      body{
        color:rgb(79, 79, 137);
      }
        </style>


        <title>Document</title>
    </head>
    <body>
    <?php include("nav.php"); ?>
    
    <?php foreach($rows as $row){ ?>

        <div class="card w-50">
  <div class="card-body">
    <h5 class="card-title"><i class='fas fa-clinic-medical'></i><?php echo $row['pharmacy_name']; ?></h5>
    <p class="card-text"><label>Street : </label><?php echo $row['street'] ?><br>
    <hr>
    <label> <i class='fas fa-capsules'></i> Name Of Medication :</label> <?php echo $row['name'] ?><br>
    <label><i class='fas fa-vial'></i> MG :</label> <?php echo $row['conc'] ?><br>
    <label> <i class='fas fa-history'></i> Exp :</label> <?php echo $row['exp'] ?><br>
    <label><i class="fas fa-phone"></i> phone :</label> <?php echo $row['phone'] ?><br></p>
<a href="order.php?idcu=<?php echo $idcu;?>&idmed=<?php echo $row['id'];?>&action=add" class="btn btn-primary">ADD</a>
   </div>
</div>
        <?php } ?>
      
    </body>
    </html>