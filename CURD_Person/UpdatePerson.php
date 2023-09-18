<?php

    // include 'CconfigureConnection.php';
    $con = new mysqli('localhost', 'root', '1234', 'learnwebside');

    $id     = '';
    $ftName = '';
    $ltName = '';
    $Gender = '';
    $Dob    = '';
    $Address= '';

    
    if(isset($_POST['id'])){
        
        $id     = $_POST['id'];
        $ftName = $_POST['ftname'];
        $ltName = $_POST['ltname'];
        $Gender = $_POST['gender'];
        $Dob    = $_POST['dob'];
        $Address= $_POST['address'];

        echo $id.$ftName.$ltName.$Gender.$Dob.$Address;

        $Update = "UPDATE `person` SET `peo_ftnm`='$ftName',`peo_ltnm`='$ltName',`peo_gnd`='$Gender',`peo_dob`='$Dob',`peo_address`='$Address' WHERE peo_id = $id ";

        $PerUpdate = $con->query($Update);

        if($PerUpdate){
            echo "Successfully";
        }
        else
            echo "Nono";

        header('location:CRUD.php');
        
    }


?>