<?php

    include 'CconfigureConnection.php';
    // $con = new mysqli('localhost', 'root', '1234', 'learnwebside');

    $id     = '';

    if(isset($_POST['id'])){
        
        $id  = $_POST['id'];

        echo $id;

        $Delete = "DELETE FROM `person` WHERE peo_id = $id";

        $PerDeleted = $con->query($Delete);

        if($PerDeleted){
            echo "Successfully";
        }
        else
            echo "Nono";

        header('location:CRUD.php');
        
    }


?>