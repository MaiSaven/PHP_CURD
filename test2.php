<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box{
        width: 200px;
        height: 200px;
        background-color: green;
        float: left;
        margin: 20px;
    }

    .menu{
        width: 100%;
        overflow: hidden;
        background-color: red;
        padding: 0;
    }
    .menu ul{
        margin: 0;
    }
    .menu ul li{
        float: left;
        list-style-type: none;
        padding: 20px;
        background-color: blue;
        margin: 0;
    }
</style>
<body>

    <div class="menu">
        <ul>

            <?php
                $menu = array('Home','Product','Feature','About','Support','Contact');
                foreach($menu as $tem){
                    ?>
                         <li><?php echo $tem ?></li>
                    <?php
                }

            ?>
        </ul>
    </div>



    <?php

        for($i=0; $i<5; $i++){
            echo "Hello"."<br>";
            if($i==3){
                $color_red="red";
                echo "<h2 style = "."color:".$color_red.">This is Red Color </h2>";
            }
        }
    ?>

    <?php
        $color = array('red','green','blue');
        $arrLength = count($color);
       for($j=0;$j<3;$j++){
        ?>
            <div class="box" style="background-color: <?php echo $color[$j] ?> ">

            </div>
        <?php
       }
    ?>
    <br>
    <br>
    <br>
    <?php
        $color = array("Name"=>"M.Saven","Gender"=>"Male","Salary"=>"5k");
       foreach($color as $key=>$val){
            echo $key ." = ".$val ."<br>";
       }
    ?>


</body>
</html>