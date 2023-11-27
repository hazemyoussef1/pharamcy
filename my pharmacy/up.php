<?php
session_start();
if(isset($_GET['edit'])){
    $id=$_GET['id'];
    $phname=$_GET['pname'];
    $phone=$_GET['phone'];
    $address=$_GET['address'];
    $street=$_GET['street'];

    include("conn.php");

     $sql=" UPDATE pharmacist SET pharmacy_name ='$phname' , phone='$phone' , address='$address' , street='$street' WHERE id='$id'";

     $result=mysqli_query($conn,$sql);
     if($result){
        $_SESSION['msg']='<div class="alert alert-success" role="alert">
        Edit Success
      </div>';
        }else{
            echo 'errore';
        }
    header("location:viewphar.php");
    
}
?>