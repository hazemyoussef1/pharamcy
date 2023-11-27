<?php
session_start();

include("conn.php");

$sql ="SELECT *
        FROM pharmacist
      ";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_GET['submit'])){
    $address=$_GET['address'];
    $nameph=$_GET['nameph'];
    include("conn.php");

$sql ="SELECT *
        FROM pharmacist
        WHERE address='$address' or pharmacy_name='$nameph'
      ";

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
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <title>Document</title>
    <style>
      table{
    text-align:center;
}

.search{
padding:10px;
text-align: center;
}
h3{
  color:rgb(79, 79, 137);
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
h1{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
table td{
    color:rgb(79, 79, 137);
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

    </style>
</head>

<body>
  <?php include("navbar.php"); ?>
  <div class="search" >
  <form class="d-flex"  role="search" >
  <div class="col-md-4">
    <div class="form-outline">
    </div>
   </div>
  <div class="col-md-4">
    <div class="form-outline">
      <h3>View By Address</h3>
  <select name="address" class="form-select">
       <option selected>City</option>
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
    </select><br>
    <h3>Or By Name</h3>
    <input type="text" name="nameph" class="form-control" /><br>
    <input type="submit" name="submit" value="View" class="btn btn-outline-success" />
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
    
    </div>
  </div>
</form>
  </div>
    <table class="table table-striped table-hover">
        <tr>
            <th><i class="fas fa-user fa-lg me-3 fa-fw"></i>FirstName</th>
            <th><i class="fas fa-user fa-lg me-3 fa-fw"></i>LasteName</th>
            <th><i class='fas fa-clinic-medical fa-lg me-3 fa-fw'></i>Pharmacy Name</th>
            <th><i class="fas fa-envelope fa-lg me-3 fa-fw"></i>Email</th>
            <th><i class="fas fa-lock fa-lg me-3 fa-fw"></i>Password</th>
            <th><i class="fas fa-map-marker-alt fa-lg me-3 fa-fw"></i>Address</th>
            <th><i class="fas fa-map-marker-alt fa-lg me-3 fa-fw"></i>Street</th>
            <th><i class="fas fa-phone fa-lg me-3 fa-fw"></i>Phone</th>
            <th>Action</th>
            <th><a href="signupph.php" class="btn btn-primary">Add</a></th>
        </tr>
        <?php foreach($rows as $row){ ?>
        <tr>
            
            <td><?php echo $row['firstname'] ?></td>
            <td><?php echo $row['lastename'] ?></td>
            <td><?php echo $row['pharmacy_name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['street'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td colspan="2" ><a href="deletphar.php?id_pha=<?php echo $row['id'];?>&action=delette" class="btn btn-danger">Delete</a>
            <a href="update.php?id_pha=<?php echo $row['id'];?>&action=update" class="btn btn-success">Edit</a>
        </td>

            


        </tr>
        <?php } ?>
    </table>

</body>
</html>