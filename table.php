<?php include('dbconnect.php'); ?>
<div class="container">
<table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    <?php 
    $sqlq = "SELECT * FROM `stdent`";
    $result = mysqli_query($connection, $sqlq);
    if(!$result){
        die(mysqli_error());
    }
    else{
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td scope="col"><?php echo $row['ID']?></td>
                <td scope="col"><?php echo $row['RollNum']?></td>
                <td scope="col"><?php echo $row['Name']?></td>
                <td scope="col"><?php echo $row['hobbies']?></td>
                <td scope="col"><a href="update_student.php?id=<?php echo $row['ID'] ?>" class="btn btn-success" name="update_student">Update</a></td>
                <td scope="col"><a href="delete_student.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger" name="delete_student">Delete</a></td>
            </tr>
            <?php
        }
    }
    ?>
  </tbody>
</table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add
</button>
</div>




