<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "student");
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if(!$connection){
    echo 'failed';
}
else{
    echo 'db connected';
}
?>