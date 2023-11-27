<?php
session_start();

if($_GET['action']=='show'){
    $idph=$_GET['idph'];
    $idcu=$_SESSION['idcu'];

    include("conn.php");
    $sql="SELECT *
    FROM medicine
    WHERE id_pha='$idph'";
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
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    
    <style>
    .card{
        float:right;
        
      }
      body{
        color:rgb(79, 79, 137);
      }
      .navbar{
     display: flex;
     justify-content: space-evenly;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      
}
.card{
        text-align: center;
        margin: 2px 0px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      }
      header a{
    text-decoration: none;
    color: rgb(79, 79, 137);
    font-size: 20px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
      </style>

    <title>Document</title>
</head>
<body>
    <?php include("nav.php"); ?>

<?php foreach($rows as $row){ ?>
<div  class="card w-50">
  <div class="card-body">
    <h5 class="card-title"><i class='fas fa-capsules'></i><?php echo $row['name']; ?></h5>
    <p class="card-text"><i class='fas fa-history'></i>EXP : <?php echo $row['exp'] ?><br>
    <i class='fas fa-vial'></i> MG : <?php echo $row['conc'] ?></p>
      <a href="order.php?idcu=<?php echo $idcu;?>&idmed=<?php echo $row['id'];?>&action=add" class="btn btn-primary">ADD</a>
  </div>
</div>
<?php } ?>
</body>
</html>