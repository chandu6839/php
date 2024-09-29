<?php include('dbconnect.php'); ?>
<?php 
    $id = $_GET['id'];
    $sqlq = "SELECT * FROM `stdent` where `ID` = $id";
    $result = mysqli_query($connection, $sqlq);
    if(!$result){
        die(mysqli_error());
    }
    $row = mysqli_fetch_assoc($result);
?>
<div class="container">
    <form action="update_php_student.php?id=<?php echo $id?>" method="post">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="f_name" class="form-control" value=<?php echo $row['Name']?>>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="text" name="f_id" class="form-control" placeholder="" value=<?php echo $row['ID']?>>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Roll No</label>
            <div class="col-sm-10">
                <input type="text"  name="f_no" class="form-control" placeholder="" value=<?php echo $row['RollNum']?>>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Hobbies</label>
            <div class="col-sm-10">
                <input type="text"  name="f_hobbies" class="form-control" placeholder="" value=<?php echo $row['hobbies']?>>
                <input type="submit" name="update_php_student" class="form-control"  value="Add">
            </div>
        </div>
    </form>
</div>