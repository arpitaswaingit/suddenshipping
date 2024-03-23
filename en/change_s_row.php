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
	  
	$tname = $_POST['t'];
	$tid = $_POST['id'];
	$t1 = $_POST['t1'];
	if($tname=="M")
	{
		$sql = "SELECT * FROM `users` WHERE `user_id` = '$tid' ";
		$result = $con->query($sql);
		if ($result->num_rows > 0) 
	  	{
	  		$row = $result->fetch_assoc();
	  		$l=0;
		    $per = explode("|",$row["access_permission"]);
		    for ($i=0; $i <sizeof($per) ; $i++) 
		    {
		        if($per[$i]==$t1)
		        {
		          $l = 1;
		        }
		    }
		    if($l==1)
		    {
		        $ps = array();
		        foreach ($per as $k) 
		        {
		            if($k==$t1)
		            {

		            }else
		            {
		               $ps[] = $k;
		            }
		        }
		        $per = implode('|', $ps);
		    }else
		    {
		        $per = implode('|',$per);
		    }
	  	}
		$sql = "UPDATE `users` SET `access_permission`='$per' WHERE `user_id`='$tid';";
        $con->query($sql); 
	}
	elseif($tname=="S")
	{
		$sql = "SELECT * FROM `users2login` WHERE `user_id` = '$tid' ";
		$result = $con->query($sql);
		if ($result->num_rows > 0) 
	  	{
	  		$row = $result->fetch_assoc();
	  		$l=0;
		    $per = explode("|",$row["access_permission"]);
		    for ($i=0; $i <sizeof($per) ; $i++) 
		    {
		        if($per[$i]==$t1)
		        {
		          $l = 1;
		        }
		    }
		    if($l==1)
		    {
		        $ps = array();
		        foreach ($per as $k) 
		        {
		            if($k==$t1)
		            {

		            }else
		            {
		               $ps[] = $k;
		            }
		        }
		        $per = implode('|', $ps);
		    }else
		    {
		        $per = implode('|',$per);
		    }
	  	}
		$sql = "UPDATE `users2login` SET `access_permission`='$per' WHERE `user_id`='$tid';";
        $con->query($sql); 
	}

	include_once 'user_list_append.php';
?>
