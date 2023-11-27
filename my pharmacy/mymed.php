<?php
session_start();
$phid=$_SESSION['id'];
include('conn.php');

$sql="SELECT id,name,exp,conc  
FROM medicine
WHERE medicine.id_pha='$phid'
ORDER BY name
";

$result=mysqli_query($conn,$sql);

$rows=mysqli_fetch_all($result , MYSQLI_ASSOC);

foreach($rows as $row){
$_SESSION['exp']=$row['exp'];
}
if(isset($_GET['submit'])){
    $namem=$_GET['namem'];
    $phid=$_SESSION['id'];
    include('conn.php');

    $sql="SELECT id,name,exp,conc  
    FROM medicine
    WHERE medicine.id_pha='$phid' AND name = '$namem'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_all($result , MYSQLI_ASSOC);

}
?>

<html>
<head>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>medicines</title> 
    <style>
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
padding:10px;
}
h2{
    color:rgb(79, 79, 137);
    text-align: center;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
.mymed{
    color: black;
    background-color: white;
    border-radius: 10px;
}
    </style>
</head>

<body>
<?php include('header.php'); ?>

<div class="search">
  <h2>Search Your Medication</h2>
  <br>
   <form  class="d-flex" role="search">
   <div class="col-md-4">
    <div class="form-outline">
    </div>
   </div>
    <div class="col-md-4">
    <div class="form-outline">
    <input type="text" name="namem" class="form-control" placeholder="Enter Name Of Medicine" ><br>
    <input type="submit" name="submit" class="btn btn-outline-success" value="Search">
</div>
    </div>
    <div class="col-md-4">
    <div class="form-outline">
    
    </div>
    </div>
   </form>
</div>
 </div>
<h2>Your Medicines</h2>
    <table  class="table table-striped table-hover" >
        <tr>
           
            <th><i class='fas fa-capsules'></i>Name</th>
            <th><i class='fas fa-history'></i>EXP</th>
            <th><i class='fas fa-vial'></i>MG</th>
            <th>ACTION</th>
        </tr>
        <?php foreach($rows as $row){ ?>
        <tr>
            
            <td> <?php echo $row['name'] ?> </td>
            <td> <?php echo $row['exp'] ?> </td>
            <td> <?php echo $row['conc'] ?> </td>
            <td><a href="CRUD.php?id=<?php echo $row['id']; ?>&exp=<?php echo $row['exp'] ?>&action=delet" id="btn1" class="btn btn-danger" >Delete</a></td>
            
        </tr>
        <?php } ?>
    </table>
</body>
</html>