<?php
   include 'connect/config.php';
    
    $user=$_POST['txtuser'];
    $pass=$_POST['txtpass'];

    if(isset($_POST['btnAdd'])){
        $insert="INSERT INTO tbl_user VALUES(null,'$user','$pass','')";
        $res=$con->query($insert);
    }

    if(isset($_POST['btnUpdate'])){
        $id=$_POST['txtID'];
        $update="UPDATE tbl_user SET username='$user',password='$pass' where id=$id";
        $rs=$con->query($update);
    }
    if(isset($_GET['action'])=="Delete"){
        $id=$_GET['id'];
        $delete="DELETE from tbl_user where id='$id'";
        $res=$con->query($delete);
    }
   
    header('location:test7.php');

?>