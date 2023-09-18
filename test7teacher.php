<?php
    include 'connect/config.php';
    $id='';
    $username='';
    $pass='';
    $action='';
    if(isset($_GET['code'])!=null){
        $id=$_GET['code'];
        $action=$_GET['action'];
        $select='SELECT * FROM tbl_user where id="'.$id.'" ' ;
        $res=$con->query($select);
        $data=$res->fetch_assoc();
        $id= $data['id'];
        $username= $data['username'];
        $pass= $data['password'];
        echo $action;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert date from Form</title>
</head>
<body>
    <form action="actionCreatepass.php" method="post">
        <input type="text" name="txtID" id="txtID" value="<?php echo $id?>">
        <input type="text" name="txtuser" id="txtuser"  value="<?php echo $username ?>">
        <input type="text" name="txtpass" id="txtpass"  value="<?php echo $pass?>">
        <input type="submit" value="Add" name="btnAdd">
        <input type="submit" value="Update" name="btnUpdate">
    </form>


    <table border="1">
        <tr>
            <th style="width: 100px;">id</th>
            <th style="width: 100px;">username</th>
            <th style="width: 100px;">Password</th>
            <th style="width: 100px;">Status</th>
            <th style="width: 100px;">Action</th>
        </tr>
        <?php
            $select='SELECT * FROM `tbl_user`';
            $res=$con->query($select);
           while( $rowdata=$res->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $rowdata['id']?></td>
                        <td><?php echo $rowdata['username']?></td>
                        <td><?php echo $rowdata['password']?></td>
                        <td></td>
                        <td>
                            <a href="test7.php?code=<?php echo $rowdata['id']?>&& action=Update">Edit</a>
                            <a href="actionCreatepass.php?id=<?php echo $rowdata['id']?> && action=Delete">delete</a>
                        </td>
                        
                    </tr>
                <?php

           }
        ?>
        
    </table>
</body>
</html>