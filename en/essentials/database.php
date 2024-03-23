<?php 
include_once '../../inc/init.php';
$host="localhost";
$username="root";
$password="root";
$db="bauma_quarx";

$con=mysqli_connect($host,$username,$password,$db);

if(!$con){
    echo "DB not connected";
}
else{
    
}



