<?php
$con = new mysqli('localhost', 'root', '1234', 'learnwebside');

$retrieve = "SELECT peo_id, peo_ftnm, peo_ltnm, peo_gnd, peo_dob, peo_address FROM Person";





    $result = $con->query($retrieve);


    while ($rows = $result->fetch_assoc()) {
        ?>
            <tr>
                <th scope="row"><?php echo $rows['peo_id'] ?></th>
                <td><?php echo $rows['peo_ftnm'] ?></td>
                <td><?php echo $rows['peo_ltnm'] ?></td>
                <td>
                    <?php
                    if ($rows['peo_gnd'] == 'M') {
                        echo "Male";
                    } else if ($rows['peo_gnd'] == 'F') {
                        echo "Female";
                    }
                    ?>
                </td>
                <td><?php echo $rows['peo_dob'] ?></td>
                <td><?php echo $rows['peo_address'] ?></td>
                <td>
                    <a class="btn btn-primary" id="edit" href="CRUD.php?id=<?php echo $rows['peo_id']?> && action=Update">Edit</a>
                    <a class="btn btn-danger"  id="delete" href="CRUD.php?id=<?php echo $rows['peo_id']?> && action=Delete">Delete</a>
                </td>
            </tr>
        <?php
    }

?>