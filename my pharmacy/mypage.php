<?php 
session_start();
$idcust=$_SESSION['idcu'];
include("conn.php");
 $sql="SELECT *
   FROM customer
   WHERE id='$idcust'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result , MYSQLI_ASSOC);
   ?>

 <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <style>
        .navbar{
     display: flex;
     justify-content: space-evenly;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      
}
ul li{
  text-align:center;
}
body{
  position:relative;
}
.list{
  width:500px;
  position:absolute;
  left:50%;
  transform:translate(-50% , -50%);
  margin-top:200px;
}
i{
  float:left;
}
h1{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.myinfo{
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
    </style>
    <?php include("nav.php"); ?>
<?php foreach($rows as $row){ ?>
    <div class="list" >
    <ul class="list-group list-group-flush">
  <li class="list-group-item"><i class="fas fa-user fa-lg me-3 fa-fw"></i><?php echo $row['firstname']; ?></li>
  <li class="list-group-item"><i class="fas fa-user fa-lg me-3 fa-fw"></i><?php echo $row['lastename']; ?></li>
  <li class="list-group-item"><i class="fas fa-envelope fa-lg me-3 fa-fw"></i><?php echo $row['email']; ?></li>
  <li class="list-group-item"><i class="fas fa-lock fa-lg me-3 fa-fw"></i><?php echo $row['password']; ?></li>
  <li class="list-group-item"><i class="fas fa-map-marker-alt fa-lg me-3 fa-fw" style="font-size:24px"></i><?php echo $row['address']; ?></li>
  <li class="list-group-item"><i class="fas fa-phone fa-lg me-3 fa-fw"></i><?php echo $row['phone']; ?></li>
  <li class="list-group-item"><a href="editinfo.php?idcust=<?php echo $idcust; ?>&action=edit" class="btn btn-success">Edit</a></li>

</ul>
</div>


<?php } ?>

