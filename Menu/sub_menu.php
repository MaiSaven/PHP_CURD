
<?php
    include 'configure.php';

    $sql_Sub = `SELECT sb.sbm_nm as 'sub_menu_name' FROM sub_menu sb
                INNER JOIN menu me
                ON sb.sbm_me = me.me_id`;
    
    $execute = $con->query($sql_Sub);
        ?>
            <div class="sub_menu">
                <ul>
                    <?php
                        while ($rows = $execute->fetch_assoc()){
                            ?>
                                <li><?php echo $rows['sub_menu_name'] ?></li>
                            <?php          
                        }
                    ?>
                </ul>
            </div>
        <?php
    

?>