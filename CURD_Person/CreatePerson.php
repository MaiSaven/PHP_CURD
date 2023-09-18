<?php

    $ftName = '';
    $ltName = '';
    $Gender = '';
    $Dob    = '';
    $Address= '';

    // echo $ftName.$ltName.$Gender.$Dob;
        
    if(isset($ftName) && isset($ltName)) {   
        
        // include 'CconfigureConnection.php';
        $con = new mysqli('localhost', 'root', '1234', 'learnwebside');
        
        $ftName = $_POST['ftname'];
        $ltName = $_POST['ltname'];
        $Gender = $_POST['gender'];
        $Dob    = $_POST['dob'];
        $Address= $_POST['address'];


        // echo $Address;

        $insert = "INSERT INTO `person` VALUES (null,'$ftName','$ltName','$Gender','$Dob','$Address')";

        $result = $con->query($insert);

        if($result){
            echo "Okay";
        }
        else {
            echo "No no";
        }

        header('location:CRUD.php');

    }

?>