<?php 
include_once '../inc/init.php';
session_start();
if(isset($_SESSION['search']))
{
	$search = $_SESSION['search'];
}else
{
	$search = '';
}
// var_dump($_POST);
$x = implode('|',$_POST);
$y = explode("|", $x);
sort($y);
$x = $y;
foreach ($x as $w) 
{
	$a = $w;
	$t = substr($w, 2,1);//character to identify which table
	$temp1 = substr($w,0,2);//permission number
	if($temp1=="p1"){ $t1 = 5; }
	elseif($temp1=="p2"){ $t1 = 6; }
	elseif($temp1=="p3"){ $t1 = 7; }
	elseif($temp1=="p4"){ $t1 = 8; }
	elseif($temp1=="p5"){ $t1 = 9; }
	elseif($temp1=="p6"){ $t1 = 10; }
	elseif($temp1=="p7"){ $t1 = 11; }
	elseif($temp1=="p8"){ $t1 = 12; }
	elseif($temp1=="p9"){ $t1 = 13; }
	elseif($temp1=="p10"){ $t1 = 14; }
	elseif($temp1=="p11"){ $t1 = 15; }
	elseif($temp1=="p12"){ $t1 = 16; }
	elseif($temp1=="p13"){ $t1 = 17; }
	elseif($temp1=="p14"){ $t1 = 18; }
	else{ $t1 = 0; }
	$id = substr($w,3);//id for perticular row
	$tname = $t;//character to identify which table
	$tid = $id;//id for perticular row
	$t1 = $t1;//permission number

	
	if($tname=="M")
	{
		$sql = "SELECT * FROM `users` WHERE `user_id` = '$tid' ";
		$result = $con->query($sql);
		if ($result->num_rows > 0) 
	  	{
	  		$row = $result->fetch_assoc();
	  		$per = explode("|",$row["access_permission"]);
			for ($i=0; $i <sizeof($per) ; $i++) 
			{
			    if($per[$i]==$t1)
			    {
			      $l = 0;
			    }
			    else
			    {
			      $l = 1;
			    } 
			}
			if($l==1)
			{
			    $ps = array();
			    foreach ($per as $k) 
			    {
			        $ps[] = $k;
			    }  
			    $ps[] = $t1;
			    $per = implode('|', $ps);
			}else
			{
				$per = implode('|', $per);
			}
			$sql = "UPDATE `users` SET `access_permission`='$per' WHERE `user_id`='$tid';";
        	$con->query($sql); 
	  	}
	}
	elseif($tname=="S")
	{
		$sql = "SELECT * FROM `users2login` WHERE `user_id` = '$tid' ";
		$result = $con->query($sql);
		if ($result->num_rows > 0) 
	  	{
	  		$row = $result->fetch_assoc();
	  		$per = explode("|",$row["access_permission"]);
			for ($i=0; $i <sizeof($per) ; $i++) 
			{
			    if($per[$i]==$t1)
			    {
			      $l = 0;
			    }
			    else
			    {
			      $l = 1;
			    } 
			}
			if($l==1)
			{
			    $ps = array();
			    foreach ($per as $k) 
			    {
			        $ps[] = $k;
			    }  
			    $ps[] = $t1;
			    $per = implode('|', $ps);
			}else
			{
				$per = implode('|', $per);
			}
			$sql = "UPDATE `users2login` SET `access_permission`='$per' WHERE `user_id`='$tid';";
        	$con->query($sql); 
	  	}
	}
}




	
	
?>