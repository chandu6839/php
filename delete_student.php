<?php include('dbconnect.php'); ?>
<?php 
    $id = $_GET['id'];
    echo $id;
    $sqld = "DELETE FROM `stdent` where `ID` = $id";
    $result = mysqli_query($connection, $sqld);
    header('location:delete_student.php?msg=deleted student Success');
    if(!$result){
        header('location:delete_student.php?msg=deleted student Success');
        die(mysqli_error());
    }
    else{
        header('location:index.php');
        
    }
?>