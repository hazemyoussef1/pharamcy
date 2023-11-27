<?php
if(isset($_GET['submit'])){
    $id=$_GET['id'];
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $address=$_GET['address'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $phone=$_GET['phone'];

    include("conn.php");

     $sql=" UPDATE customer SET firstname ='$fname' , lastename='$lname' , email='$email' , password='$password' ,
      address='$address' , phone='$phone'  WHERE id='$id'";

     $result=mysqli_query($conn,$sql);

    header("location:mypage.php");
        
}
?>