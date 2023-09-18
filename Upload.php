<?php
    $file = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];
    $path = 'Image/';

    $res = move_uploaded_file($temp,$path.$file );
    if($res){
        ?>
            <script>alert('Successfully!')</script>
        <?php
    }
?>