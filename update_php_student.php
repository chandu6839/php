<?php include('dbconnect.php'); ?>
<?php
if(isset($_POST['update_php_student'])){
    $id = $_GET['id'];
    $f_name = $_POST['f_name'];
    $f_id = $_POST['f_id'];
    $f_no = $_POST['f_no'];
    $f_hobbies = $_POST['f_hobbies'];

    echo $id;
    if($f_name == "" || empty($f_name) ){
        header('location:index.php?msg=name missing');
        echo $f_name;
    }
    else{
        echo $id;
        $query = "UPDATE `stdent` SET `ID` = '$f_id', `RollNum` = '$f_no', `Name` = '$f_name', `hobbies` = '$f_hobbies' where `ID` = $id";
        //UPDATE table_name SET column1 = value1, column2 = value2,… WHERE condition;   
        $result = mysqli_query($connection,$query);
        if(!$result){
            header('location:index.php?msg=UPDATE failed');
            die('query failed'.mysqli_error());
        }
        else{
            header('location:index.php?msg=UPDATE Success');
        }
    }
}
?>