<?php
session_start();
$idph= $_SESSION['id'];
include("conn.php");
$sql="SELECT name,exp,conc,firstname,lastename,email,address,phone,orders.id
FROM orders , customer , medicine 
WHERE orders.idcust=customer.id AND orders.idmed= medicine.id AND medicine.id_pha=$idph
ORDER BY orders.id "
;
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
$_SESSION['order']=count($rows);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/stylee.css">
    <title>Orders</title>
    <style>
        table{
    text-align:center;
}
h1{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
table td{
    color:rgb(79, 79, 137);
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
header a{
    text-decoration: none;
    color: rgb(79, 79, 137);
    font-size: 20px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.myord{
    color: black;
    background-color: white;
    border-radius: 10px;
}
    </style>
</head>
<body>
<?php include('header.php'); ?>

<table class="table table-striped table-hover" >
        <tr>
           
            <th><i class="fas fa-user fa-lg me-3 fa-fw"></i>FirstName</th>
            <th><i class="fas fa-user fa-lg me-3 fa-fw"></i>LastName</th>
            <th><i class="fas fa-envelope fa-lg me-3 fa-fw"></i>Email</th>
            <th><i class="fas fa-map-marker-alt  fa-lg me-3 fa-fw"></i>Address</th>
            <th><i class="fas fa-phone  fa-lg me-3 fa-fw"></i>Phone</th>
            <th><i class='fas fa-capsules  fa-lg me-3 fa-fw'></i>Name of Medicines</th>
            <th><i class='fas fa-history  fa-lg me-3 fa-fw'></i>Exp</th>
            <th><i class='fas fa-vial  fa-lg me-3 fa-fw'></i>MG</th>
            <th>ACtion</th>
            
        </tr>
        <?php foreach($rows as $row){ ?>
        <tr>
        
        <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastename']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['exp']; ?></td>
            <td><?php echo $row['conc']; ?></td>
            <td><a href="order.php?orderid=<?php echo $row['id']; ?>&action=delete" class="btn btn-danger">Delete</a></td>
           
        </tr>
        <?php } ?>
    </table>

    
</body>
</html>