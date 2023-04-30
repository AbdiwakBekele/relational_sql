<?php 

$server_name = 'localhost';
$username = 'root';
$password = '';
$database = 'school';

$con = mysqli_connect($server_name, $username, $password, $database);

if($con){
    echo "Connected";
}else{
    echo "Not connected";
}

?>