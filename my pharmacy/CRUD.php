<?php
    session_start();
    if(isset($_GET['submit'])){
    $id_pha=$_GET['id_pha'];
    $namemed=$_GET['namemed'];
    $exp=$_GET['exp'];
    $conc=$_GET['conc'];

    include('conn.php');

    $sql="INSERT INTO medicine(name,id_pha,exp,conc)
            VALUES ('$namemed','$id_pha','$exp','$conc')
    ";
    if(empty($namemed)){
    $_SESSION['errore']='<script>
    alert("Hello!"); </script>
  ';
    }elseif(empty($exp)){
        echo "errore";
    }
    elseif(empty($conc)){
        echo "errore";
    }else
    $result=mysqli_query($conn,$sql);
    header('location:add_medication.php');
    }
    else if($_GET['action']=='delet'){ 
        session_start();
        $id_med= $_GET['id'];
        $phid=$_SESSION['id'];
        $exp=$_GET['exp'];
        include('conn.php');
        $delete="DELETE FROM orders WHERE idmed='$id_med'";
        $result=mysqli_query($conn,$delete);
        $sql=" DELETE FROM medicine WHERE id='$id_med'";
    
        $result=mysqli_query($conn,$sql);
        header("location:mymed.php");

    } else if($_GET['action']=='delete'){
        $id_ph=$_GET['id_pha'];

        include('conn.php');
        $select="SELECT id
        FROM medicine
        WHERE id_pha='$id_ph'";

        $result=mysqli_query($conn,$select);
        $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($rows as $row){
            $idmed=$row['id'];
        }
        $sql="DELETE FROM orders WHERE idmed='$idmed' ";
        $result=mysqli_query($conn,$sql);
        $sql="DELETE FROM medicine WHERE id_pha='$id_ph' ";
        $result=mysqli_query($conn,$sql);
        $sql="DELETE FROM pharmacist WHERE id='$id_ph' ";
        $result=mysqli_query($conn,$sql);
        
        header("location:viewphar.php");

    }else if(isset($_POST['insert'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phname = $_POST['phname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $street = $_POST['street'];
        $phone = $_POST['phone'];
    
    include('conn.php');
    
    $sql="INSERT INTO pharmacist(firstname,lastename,pharmacy_name,email,password,address,street,phone)
            VALUES('$firstname','$lastname','$phname','$email','$password','$address','$street','$phone')
    ";
    
    $result=mysqli_query($conn,$sql);
     header("location:signupph.php");
    }
?>