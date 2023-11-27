<?php
   session_start();
if($_GET['action']=='delette'){
        $id_ph=$_GET['id_pha'];
        include("conn.php");
        $sql="SELECT id
        FROM medicine WHERE id_pha='$id_ph' ";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($rows as $row){
            $idmed=$row['id'];
            $sql="DELETE FROM orders WHERE idmed='$idmed' ";
        $result=mysqli_query($conn,$sql);
        $sql="DELETE FROM medicine WHERE id_pha='$id_ph' ";
        $result=mysqli_query($conn,$sql);
        $sql="DELETE FROM pharmacist WHERE id='$id_ph' ";
        $result=mysqli_query($conn,$sql);
        }
        header("location:viewphar.php");
       
    }
?>