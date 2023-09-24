<?php
    include 'head.php';
    include 'configure.php';

    ?>
    <style>
        .header{
            width: 100%;
            overflow: hidden;
        }
        .header ul{
            background-color: red;
            display: flex;
            /* padding: 0; */
            
        }
        li{
            list-style: none;
            padding: 20px;
            background-color: blue;
        }
        li:hover{
            background-color: gold;
        }
        .header ul li:hover .sub_menu ul{
            display: block;
        }



        .sub_menu{
            width: 100%;
            overflow: hidden;
            background-color: yellow;
            
        }
        .sub_menu ul{
            display: none;
            padding: 0;
            position: absolute;
            margin-top: 20px;
            transform: translateX(-20px);
        }
        .sub_menu ul li{
            background-color: green;
            margin: 0;
        }
    </style>
    <div class="header">
        <ul>
            <?php
                $select= "select * from menu";
                $result = $con->query($select);

                while( $rows = $result->fetch_assoc() ){
                    ?>
                        <li><?php 
                            echo $rows['me_nm'];
                            $menu_id = $rows['me_id'];
                        ?>
                        <div class="sub_menu">
                            <ul>
                                <?php
                                    $sql_sub = "SELECT * FROM `sub_menu` WHERE sbm_me = $menu_id";
                                    $execute = $con->query($sql_sub);
                                    while($sub = $execute->fetch_assoc()){
                                        ?>
                                            <li><?php echo $sub['sbm_nm'] ?></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        </li>
                    <?php
                }
            ?>
        </ul>
    </div>
    <?php

?>
