<?php include('dbconnect.php'); ?>
<?php
if(isset($_POST['add_student'])){
    $f_name = $_POST['f_name'];
    $f_id = $_POST['f_id'];
    $f_no = $_POST['f_no'];
    $f_hobbies = $_POST['f_hobbies'];
    if($f_name == "" || empty($f_name) ){
        header('location:index.php?msg=name missing');
        echo $f_name;
    }
    else{
        $query = "insert into `stdent` (`ID`, `RollNum`, `Name`, `hobbies`) values ('$f_id', '$f_no', '$f_name', '$f_hobbies')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            header('location:insert.php?msg=insertion failed');
            die('query failed'.mysqli_error());
        }
        else{
            header('location:index.php?msg=insertion Success');
        }
    }
}
?>