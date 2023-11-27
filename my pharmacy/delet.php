<?php
if($_GET['action']=='delet'){

$orderid=$_GET['orderid'];

include('conn.php');
$sql="DELETE FROM orders WHERE id='$orderid'";
$result=mysqli_query($conn,$sql);
header("location:myorder.php");
}
?>
