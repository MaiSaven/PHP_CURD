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

        //Upload Photo
        // $file_photo = $_FILES['upload_photo']['name'];
        // $temp = $temp['upload_photo']['tmp_name'];

        // $patch = "Img/";
        // $res_upload = move_uploaded_file($temp , $patch, $file_photo);

        $file_photo = $_FILES['upload_photo']['name'];
        $temp = $_FILES['upload_photo']['tmp_name'];
        $path = 'Img/';
    
        $res = move_uploaded_file($temp,$path.$file_photo );
        if($res){
            ?>
                <script>alert('Successfully!')</script>
            <?php
        }
        echo "path:".$path." " ."temp:".$temp." "."File:".$file_photo;


        // echo $Address;

        $insert = "INSERT INTO `person` VALUES (null,'$ftName','$ltName','$Gender','$Dob','$Address','$file_photo')";

        $result = $con->query($insert);

        if($result){
            echo "Okay";
        }
        else {
            echo "No no";
        }

        // header('location:CRUD.php');

    }

?>