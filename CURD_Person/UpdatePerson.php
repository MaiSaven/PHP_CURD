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
        

        $file_photo = $_FILES['upload_photo']['name'];
        $temp = $_FILES['upload_photo']['tmp_name'];
        $path = 'Img/';
        $Photo = "Photo_".$file_photo;
    
        $res = move_uploaded_file($temp, $path.$Photo );
        if($res){
            ?>
                <script>alert('Successfully!')</script>
            <?php
        }
        echo "ID = ".$id."FN".$ftName."LN".$ltName."GN".$Gender."D".$Dob."A".$Address."File".$file_photo."Photo".$Photo;

        $Update = "UPDATE `person` SET `peo_ftnm`='$ftName',`peo_ltnm`='$ltName',`peo_gnd`='$Gender',`peo_dob`='$Dob',`peo_address`='$Address',`peo_photo`='$Photo' WHERE peo_id = $id ";

        $PerUpdate = $con->query($Update);

        if($PerUpdate){
            echo "Successfully";
        }
        else
            echo "Nono";

        header('location:CRUD.php');
        
    }


?>