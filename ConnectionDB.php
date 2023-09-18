<?php

    // Connection Database
    $con = new mysqli('localhost','root','1234','db');

    if($con){
        echo "Successfuly";
    }
    else{
        die ("Error");
    }


    // Select Data

    $retrive = "select * from student";

    $result=$con->query($retrive);

    $rows = $result->fetch_assoc();
    echo "\n\nSize of Rows ->".sizeof($rows);

    // while($row = $result->fetch_assoc()){
    //     echo $row['student_id']."+++".$row['student_name'];
    // }
    
    
    



?>