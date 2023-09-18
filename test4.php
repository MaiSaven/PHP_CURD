<?php
    include 'Head.php'
?>
</head>
<style>
    .pic{
        width: 400px;
        height: 250px;
        background-color: yellow;
        margin: auto;
    }
    .pic>img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<body>
    <form action="Upload.php" method="post" enctype="multipart/form-data">
        <input type="file" id="photo" name='photo'>
        <input type="submit" name="btnSubmit">
    </form>

    <div class="pic">
        <img src="" alt="" id="picPrw">
    </div>
</body>
<script>
    const picture = document.getElementById('picPrw');
    const fileUpload = document.getElementById('photo');

    fileUpload.addEventListener('change', function(){
        var file = this.files[0];
        var reader = new FileReader();

        reader.addEventListener('load',function(){
            picture.src = reader.result;
        })

        reader.readAsDataURL(file);
    });

</script>
</html>