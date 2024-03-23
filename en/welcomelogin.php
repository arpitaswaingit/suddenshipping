<?php
session_start();

include_once '../inc/init.php';
if(!isset($_SESSION['user_id']))
{
    header('Location:login.php','_self');
}

if(($_SESSION['user']['user_name'])=="mennobauman")
{
	// echo  $_SESSION['lper'];	
	include "admin_dashboard.php";		  
}     
else{	 
	header('Location:user_dashboard.php','_self'); 
// 	include "user_dashboard.php";		
}
?>



