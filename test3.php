<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<style>
    .menu{
        width: 100%;
        overflow: hidden;
        background-color: blue;
    }
    .menu>ul{
        margin: 0;
    }
    .menu>ul>li{
        float: left;
        list-style-type: none;
        padding: 20px;
        color: aliceblue;
        
    }
    .menu>ul>li>a{
        text-decoration: none;
        color: aliceblue;
    }
    .menu>ul>li:hover{
        background-color: red;
    }

    .menu2{
        margin-top: 20px;
        width: 100%;
        height: 59px;
        background-color: green;
        position: relative;
    }
    .menu2>ul{
        margin: 0;
    }
    .menu2>ul>li{
        float: left;
        list-style-type: none;
        color: aliceblue;
        /* background-color: red; */
        padding: 20px;
        cursor: pointer;
        
    }
    .menu2>ul>li:hover .sub-menu>ul{
        background-color: red;
        display: block;
    }
    .sub-menu{
        position: absolute;
        margin-top: 20px;
        transform: translateX(-20px);

    }
    .sub-menu>ul{
        background-color: blue;
        padding: 0;
        /* position: absolute; */
        display: none;
    }
    .sub-menu>ul>li{
        list-style-type: none;
        padding: 20px;
    }
    .sub-menu>ul>li>a{
        text-decoration: none;
        color: aliceblue;
    }
    .sub-menu>ul>li:hover{
        background-color: rgb(100, 200, 200);
    }
</style>
<body>
    <div class="menu">
        <!-- <ul>
            <li>homw</li>
            <li>homw</li>
        </ul> -->
        <ul>
            <?php
                $item = array(
                    array('menu'=>'HTML','link'=>'kdfkdfjkd'),
                    array('menu'=>'CSS','link'=>'kdfkdfjkd'),
                    array('menu'=>'SQL','link'=>'kdfkdfjkd'),
                    array('menu'=>'PHP','link'=>'kdfkdfjkd')
                );
                foreach($item as $val){
                    ?>
                        <li><a href="<?php echo $val['link']?>"> <?php echo $val['menu'] ?> </a></li>
                    <?php
                }
            ?>
        </ul>
    </div>

    <!-- menu2 -->

    <div class="menu2">
        <ul>

        <?php
                $menuitem = array(
                    array(
                        'menu'=>'Home', 
                        'submenu'=> array(
                            array(
                                's-menu'=>'Home1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            ),
                            array(
                                's-menu'=>'Home1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            ),
                            array(
                                's-menu'=>'Home1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            )
                        )
                    ),
                    array(
                        'menu'=>'PHP', 
                        'submenu'=> array(
                            array(
                                's-menu'=>'PHP1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            ),
                            array(
                                's-menu'=>'PHP1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            ),
                            array(
                                's-menu'=>'PHP1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            )
                        )
                    ),
                    array(
                        'menu'=>'PHP', 
                        'submenu'=> array(
                            array(
                                's-menu'=>'PHP1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            ),
                            array(
                                's-menu'=>'PHP1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            ),
                            array(
                                's-menu'=>'PHP1',
                                'link'=>'https://fonts.google.com/specimen/Black+Ops+One'
                            )
                        )
                    ),
                );

                foreach($menuitem as $mval){
                    ?>
                        <li><?php echo $mval['menu'] ?>
                            <div class="sub-menu">
                                <ul>
                                    <?php
                                        foreach($mval['submenu'] as $sval){
                                            ?>
                                                <li><a href=" <?php echo $sval['link'] ?> "> <?php echo $sval['s-menu'] ?> </a></li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </li>
                    <?php
                }


            ?>

            <?php
                include 'Hello.php'
            ?>

            <!-- <li>Hello
            <div class="sub-menu">
                <ul>
                    <li><a href="">Haha</a></li>
                    <li><a href="">Haha</a></li>
                    <li><a href="">Haha</a></li>
                </ul>
            </div>
            </li>
            <li>Hello2
            <div class="sub-menu">
                <ul>
                <li><a href="">Haha2</a></li>
                <li><a href="">Haha2</a></li>
                <li><a href="">Haha2</a></li>
                </ul>
            </div>
            </li> -->
            
        </ul>
    </div>

</body>
</html>