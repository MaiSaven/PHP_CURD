<?php

    include 'CconfigureConnection.php';
    $id='';

    $PerID = '';
    $PerFirstName = '';
    $PerLastName = '';
    $PerGender = '';
    $PerAddress = '';
    $PerDob = '';
    $Action = '';
    $PerPhoto ='';

    if(isset($_GET['id'])!=null){
        $id=$_GET['id'];
        $Action=$_GET['action'];
        // echo $Action;

        $selectForUpdate = "SELECT `peo_id`, `peo_ftnm`, `peo_ltnm`, `peo_gnd`, `peo_dob`, `peo_address` FROM `person` WHERE peo_id = $id";
    
        $Person = $con->query($selectForUpdate);
        $rows = $Person->fetch_assoc();

        $PerID = $rows['peo_id'];
        $PerFirstName = $rows['peo_ftnm'];
        $PerLastName = $rows['peo_ltnm'];
        $PerGender = $rows['peo_gnd'];
        $PerAddress = $rows['peo_address'];
        $PerDob = $rows['peo_dob'];
        $PerPhoto = $rows['peo_photo'];
    }

?>