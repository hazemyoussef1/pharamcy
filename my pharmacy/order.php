<?php
if($_GET['action']=='add'){
 session_start();
$idcu=$_GET['idcu'];
$idmed= $_GET['idmed'];
include("conn.php");
$sql="INSERT INTO orders(idcust,idmed)
VALUES ('$idcu','$idmed')";
$result=mysqli_query($conn,$sql);
header("location:myorder.php");

}else if($_GET['action']=='delete'){

$orderid=$_GET['orderid'];

include('conn.php');
$sql="DELETE FROM orders WHERE id='$orderid'";
$result=mysqli_query($conn,$sql);
header("location:viewallmed.php");
}


?>