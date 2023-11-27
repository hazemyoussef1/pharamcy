<?php
session_start();
$id=$_SESSION['idcu'];

include("conn.php");

$sql=" SELECT pharmacist.pharmacy_name , pharmacist.address , pharmacist.phone ,pharmacist.street, medicine.name , medicine.name , medicine.exp , medicine.conc , orders.id
from orders , pharmacist , medicine
WHERE orders.idmed=medicine.id AND orders.idcust='$id' AND medicine.id_pha=pharmacist.id
ORDER BY orders.id ";

$result=mysqli_query($conn,$sql);

$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">

    <title>Document</title>
    <style>
    .navbar{
    display: flex;
    justify-content: space-evenly;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
table{
    text-align:center;
}
table td{
    color:rgb(79, 79, 137);
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
h1{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.myord{
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
</head>
<body>
    <?php include("nav.php"); ?>
    <table class="table table-striped table-hover" >
        <tr>
            <th><i class='fas fa-capsules'></i>Name of Medicines</th>
            <th><i class='fas fa-history'></i>EXP</th>
            <th><i class='fas fa-vial'></i>MG</th>
            <th><i class='fas fa-clinic-medical'></i>PHARMACY Name</th>
            <th><i class="fas fa-map-marker-alt"></i>Address</th>
            <th><i class="fas fa-map-marker-alt"></i>Street</th>
            <th><i class="fas fa-phone"></i>Phone</th>
            <th>Action</th>
                
        </tr>
        <?php foreach($rows as $row){ ?>
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['exp'];?></td>
            <td><?php echo $row['conc'];?></td>
            <td><?php echo $row['pharmacy_name'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['street'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><a href="delet.php?orderid=<?php echo $row['id']; ?>&action=delet" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>