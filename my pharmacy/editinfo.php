<?php
if($_GET['action']=='edit'){
$idcust=$_GET['idcust'];
include("conn.php");
$sql="SELECT *
FROM customer WHERE id='$idcust'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
?>
<html>
  <head>
<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
<link rel="stylesheet" href="css/stylee.css">
<link rel="stylesheet" href="fontawesome/css/all.css">
<style>
    ul li{
  text-align:center;
}
.list{
  width:600px;
  position:absolute;
  left:50%;
  transform:translate(-50% , -50%);
  margin-top:300px;
}
i{
  float:left;
}
h1{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
header a{
    text-decoration: none;
    color: rgb(79, 79, 137);
    font-size: 20px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
    </style>
  </head>
    <body>
    <?php include("nav.php"); ?>
    <?php foreach($rows as $row){ ?>
      <div class="list" >
        <form action="updateinfo.php">
        <ul class="list-group list-group-flush">
        <input type="text" name="id" value = "<?php echo $row['id']; ?>" hidden/>
        <li class="list-group-item"><i class="fas fa-user fa-lg me-3 fa-fw"></i> <input type="text" name="fname" class="form-control" value = "<?php echo $row['firstname']; ?>"/></li>
        <li class="list-group-item"><i class="fas fa-user fa-lg me-3 fa-fw"></i><input type="text" name="lname" class="form-control" value = "<?php echo $row['lastename']; ?>"/></li>
        <li class="list-group-item"><i class="fas fa-envelope fa-lg me-3 fa-fw"></i><input type="email" name="email" class="form-control" value = "<?php echo $row['email']; ?>"/></li>
        <li class="list-group-item"><i class="fas fa-lock fa-lg me-3 fa-fw"></i><input type="password" name="password" class="form-control" value = "<?php echo $row['password']; ?>"/></li>
        <li class="list-group-item"><i class="fas fa-map-marker-alt fa-lg me-3 fa-fw" style="font-size:24px"></i><select name="address" class="form-select form-select-lg mb-3"></li>
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
      <li class="list-group-item"><i class="fas fa-phone fa-lg me-3 fa-fw"></i><input type="phone" name="phone"class="form-control" value = "<?php echo $row['phone']; ?>"/></li>
      <li class="list-group-item"><input type="submit" name="submit" value="Edit" class="btn btn-success" /></li>
      </ul>
        </form></div>
    <?php } ?>
</table>
    </body>
</html>