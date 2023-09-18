
<?php
    include 'C:\wamp64\www\PHP\Head.php'
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<style>
    body{
        background-color:  rgba(92, 179, 255, 0.625);
        display: flex;
    }
    .container{
        width: 400px;
        height: 500px;
        background-color: aliceblue;
        margin: auto;
        transform: translateY(130px);
        padding: 30px;
    }
    input{
        margin-top: 20px;
    }
    .btn{
        width: 100%;
        margin-top: 40px;
    }
    .container>h3{
        text-align: center;
        color: aliceblue;
        text-shadow: 2px 2px 2px rgba(164, 196, 255), -1px -1px 4px rgba(103, 103, 103, 0.29);
    }
</style>
<body>
    <div class="container">
        <h3>Login PHP</h3>
        <form action="Login.php" class="form-input" method="post">
            <input type="text" class="form-control is-valid" id="validationServer01" value="" placeholder="Username" name="user" required>
            <input type="password" class="form-control is-valid" id="validationServer01" value="" placeholder="Password"  name="pass" required>
            <input type="submit" class="btn btn-primary" name="login">
        </form>

        <?php

            if(isset($_POST['login'])){

                $UserName = $_POST['user'];
                $Password = $_POST['pass'];
    
                if( $UserName == 'maisaven' && $Password == 'admin' ){
                    ?>
                        <script> alert("ok") </script>
                    <?php

                    header('location:http://localhost:8090/PHP/test3.php');
                }
                else{
                    ?>
                        <script> alert("Invalid User!") </script>
                    <?php
                }

            }

           
        ?>

    </div>
</body>
</html>