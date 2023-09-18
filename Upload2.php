<?php
    $file = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];

    $patch = 'Image/';

    $res = move_uploaded_file($temp,$patch.$file);
    if($res){
        ?>
            <script>alert('Success!!!!!!!!')</script>
        <?php
    }
?>