<?php
    include 'RetrieveFroUpdate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>
<style>
    body{
        width: 80%;
        margin: auto;
    }
    .in-form{
        display: flex;
        align-items: center;
    }

</style>
<body>

    <form action=" <?php if($Action === "Update") echo 'UpdatePerson.php';else if($Action === "Delete") echo 'DeletePerson.php'; else echo 'CreatePerson.php' ?> " class="formPerson m-3" method="post">
        <div class="in-form"  style="float: left;">
            <input type="text" name="id" value="<?php echo $PerID ?>" hidden>
            <label for="">First Name</label> 
            <input class="form-control form-control-sm m-2 w-auto" type="text" placeholder="First Name" aria-label="last name" name="ftname" value="<?php echo $PerFirstName ?>">
        </div>

        <div class="in-form">
            <label for="" style="margin-right: 11px;">Gender </label>
            <select class="form-select form-control-sm m-2 w-25 p-1" aria-label="Default select example" name="gender" >
                <!-- <option value="" hidden disabled selected></option> -->
                <option value="" hidden></option>
                <option value="M" <?php if($PerGender === 'M') echo 'selected' ?>>Male</option>
                <option value="F" <?php if($PerGender === 'F') echo 'selected' ?>>Female</option>
            </select>
        </div>

        <div class="in-form"  style="float: left;">
            <label for="" style="margin-right: 2px;">Last Name</label> 
            <input class="form-control form-control-sm m-2 w-auto" type="text" placeholder="Last Name" aria-label="first name" name="ltname" value="<?php echo $PerLastName ?>">
        </div>
        <div class="in-form">
            <label for="">Birth Day</label>
            <input class="form-control p-1 m-2 w-25" type="date" name="dob" value="<?php echo $PerDob ?>">
        </div>
        <div class="in-form">
            <label for="" style="margin-right: 20px;">Address</label>
            <input class="form-control m-2 w-50 p-1" type="text" name="address" value="<?php echo $PerAddress ?>" >
            <input class="btn btn-danger w-25 m-2" id="btnSubmit" type="submit" name="btnsubmit">
        </div>
    </form>
    <div class="tb-info">
        <table class="table table-striped table-hover table-bordered"  id="tblPerson" style="width:100%" >
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
                <!-- <th scope="col">Address</th> -->
              </tr>
            </thead>
            <tbody class="table-group-divider" >
               <?php
                  include 'RetrievePerson.php';
               ?>
            </tbody>
          </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#tblPerson');
</script>
<script>
    // document.querySelector('select[name="gender"]').value = '<php echo $PerGender ?>';
    // document.getElementById('btnSubmit').addEventListener('click',()=>{
    //     alert("deleted");
    // })
    // var act = document.querySelector('.formPerson').getAttribute('action');
    // console.log(act);

    onDelete();
    console.log(<?php echo $Action ?>)
    function onDelete(){
        if("Delete"=== "<?php echo $Action ?>" ){

            document.getElementById('btnSubmit').addEventListener('click',()=>{
                alert('Are you sure to delete the Person?');
            })
        }
    }
</script>
</html>