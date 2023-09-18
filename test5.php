<?php
    include 'Head.php'
?>
</head>
<style>

    body{
        background-color: rgb(242, 247, 255);
    }

    .input-div {
  position: relative;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 2px solid rgb(1, 235, 252);
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
  animation: flicker 2s linear infinite;
}

.icon {
  color: rgb(1, 235, 252);
  font-size: 2rem;
  cursor: pointer;
  animation: iconflicker 2s linear infinite;
}

.input {
  position: absolute;
  opacity: 0;
  width: 100%;
  height: 100%;
  cursor: pointer !important;
}
/* 
@keyframes flicker {
  0% {
    border: 2px solid rgb(1, 235, 252);
    box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
  }

  5% {
    border: none;
    box-shadow: none;
  }

  10% {
    border: 2px solid rgb(1, 235, 252);
    box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
  }

  25% {
    border: none;
    box-shadow: none;
  }

  30% {
    border: 2px solid rgb(1, 235, 252);
    box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
  }

  100% {
    border: 2px solid rgb(1, 235, 252);
    box-shadow: 0px 0px 100px rgb(1, 235, 252) , inset 0px 0px 10px rgb(1, 235, 252),0px 0px 5px rgb(255, 255, 255);
  }
} */
/* 
@keyframes iconflicker {
  0% {
    opacity: 1;
  }

  5% {
    opacity: 0.2;
  }

  10% {
    opacity: 1;
  }

  25% {
    opacity: 0.2;
  }

  30% {
    opacity: 1;
  }

  100% {
    opacity: 1;
  }


} */

    .container{
        margin: auto;
        /* background-color: rgb(242, 247, 255); */
        width: 700px;
        height: 700px;
        padding: 50px;
        box-sizing: border-box;
        
    }
    .input-div{
        margin: auto;
        margin-top: 30px;
    }
    .pic{
        width: 400px;
        height: 250px;
        /* background-color: yellow; */
        margin: auto;
        border: 2px solid  rgb(1, 235, 252);
    }
    .pic>img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .inputForm{
      width: 100%;
      margin: auto;
      overflow: hidden;
      background-color: blue;
    }
    .input{
      float: left;
    }


</style>
<body>
    <div class="container">

        <div class="pic">
            <img id="picPrw" src="" alt="" >
        </div>
        <div class="input-div">
            <form action="Upload.php" method="post" enctype="multipart/form-data">
                <input class="input" id="photo" name="filePic" type="file">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon"><polyline points="16 16 12 12 8 16"></polyline><line y2="21" x2="12" y1="12" x1="12"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
                
            </form>
        </div>
        <div class="inputForm">
            <form action="Upload2.php" method="post" enctype="multipart/form-data" >
              <input type="file" name="photo" id="photo">
              <input type="submit" name="submitForm" value="Submit">
            </form>
        </div>
        
    </div>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1234";
      $dbname = "db";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";





            
      $sql = "SELECT id, firstname, lastname FROM student";
      $result = $conn->query($sql);

      // if ($result->num_rows > 0) {
      if ($result > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["student_id"]. " - Name: " . $row["student_name"]."<br>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
    ?>

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