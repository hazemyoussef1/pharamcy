<?php
include("conn.php");

   $sql="SELECT pharmacy_name , pharmacist.address , medicine.name ,customer.firstname , customer.lastename
   FROM orders , pharmacist , medicine , customer
   WHERE orders.idcust=customer.id AND orders.idmed=medicine.id AND medicine.id_pha=pharmacist.id ";

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
        table{
    text-align:center;
}
table td{
    color:rgb(79, 79, 137);
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
    </style>
</head>
<?php include("navbar.php"); ?>
<body>
   
   <table class="table table-striped table-hover">
        <tr>
            <th><i class='fas fa-clinic-medical fa-lg me-3 fa-fw'></i>Pharmacy Name</th>
            <th><i class="fas fa-map-marker-alt fa-lg me-3 fa-fw"></i>Pharmacy Address</th>
            <th><i class='fas fa-capsules fa-lg me-3 fa-fw'></i>Medicine Name</th>
            <th><i class="fas fa-user fa-lg me-3 fa-fw"></i>FirstName Customer</th>
            <th><i class="fas fa-user fa-lg me-3 fa-fw"></i>LasteName Customer</th>

        </tr>
        <?php foreach($rows as $row){ ?>
        <tr>
            <td><?php echo $row['pharmacy_name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastename']; ?></td>
        </tr>
        <?php } ?>
   </table>
   
   
</body>
</html>