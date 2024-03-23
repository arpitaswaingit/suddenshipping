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
	  $check_type = 0;
	  $check_type = (int)$_POST['txts'];
	  if($_SESSION['s_type']==1)
	  {
	      $temp = 0;
	      $search = strtolower($search);
	      if($search=="d")
			{
				$temp=51;
				$sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
				$sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp%' ";
			}
			elseif($search=="tm")
			{
				$temp=52;
				$sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
				$sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp%' ";
			}
			elseif($search=="admin")
			{
				$temp=1;
				$sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
				$sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp%' ";
			}
			elseif($search=="dealer admin")
			{
				$temp = 1;
				$temp1 = '505550550';
				$sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
				$sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp1%' ";
			}
			elseif($search=="support admin")
			{
				$temp = '505550550';
				$temp1 = 1;
				$sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
				$sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp1%' ";
			}else
			{
				$temp = '505550550';
				$temp1 = '505550550';
				$sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
				$sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp1%' ";
			}
	      
	  }else
	  {
	    $sql = "SELECT * FROM `users` WHERE `user_name` LIKE '$search%' AND `permission` = '1'";
	    $sql1 = "SELECT * FROM `users2login` WHERE `user_name` LIKE '$search%'";
	  }
	  $result = $con->query($sql);
	  $result1 = $con->query($sql1);
	  if ($result->num_rows > 0) 
	  {
	      if ($result1->num_rows > 0) 
	      {
	          		while($row = $result->fetch_assoc())
	              {
	              					$l=0;
								    $per = explode("|",$row["access_permission"]);
								    for ($i=0; $i <sizeof($per) ; $i++) 
								    {
								        if($per[$i]==$check_type)
								        {
								          $l = 0;
								          break;
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
								        $ps[] = $check_type;
								        $per = implode('|', $ps);
								    }else
								    {
								    	$per = implode('|', $per);
								    }
								    
	                 	$u = $row["user_id"]; 
	              		$uemail = $row['user_email'];
	              		$sql = "UPDATE `users` SET `access_permission`='$per' WHERE `user_id`='$u';";
                        $con->query($sql); 
                   }     
	              while($row1 = $result1->fetch_assoc())
	              {
	              					$l=0;
								    $per = explode("|",$row1["access_permission"]);
								    for ($i=0; $i <sizeof($per) ; $i++) 
								    {
								        if($per[$i]==$check_type)
								        {
								          $l = 0;
								          break;
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
								        $ps[] = $check_type;
								        $per = implode('|', $ps);
								    }
								    else
								    {
								    	$per = implode('|', $per);
								    }
	                  	$u1 = $row1["user_id"]; 
	              		$uemail1 = $row1['user_email'];
	              		$sql1 = "UPDATE `users2login` SET `access_permission`='$per' WHERE `user_id`='$u1';";
                        $con->query($sql1); 
	              } 
	      }
	      else
	      {
	          while($row = $result->fetch_assoc())
	          {
		            $u = $row["user_id"]; 
	          		$uemail = $row['user_email'];
	          		$per = explode("|",$row["access_permission"]);
	          				$l=0;
						    for ($i=0; $i <sizeof($per) ; $i++) 
						    {
						        if($per[$i]==$check_type)
						        {
						          $l = 0;
						          break;
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
						        $ps[] = $check_type;
						        $per = implode('|', $ps);
						    }else
								    {
								    	$per = implode('|', $per);
								    }
	          		$sql = "UPDATE `users` SET `access_permission`='$per' WHERE `user_id`='$u';";
	                $con->query($sql); 
	          }  
	      }
	  }
	  elseif ($result1->num_rows > 0) 
	  {
          while($row1 = $result1->fetch_assoc())
          {
       			$u1 = $row1["user_id"]; 
          		$uemail1 = $row1['user_email'];
          		$per = explode("|",$row1["access_permission"]);
          					$l=0;
						    for ($i=0; $i <sizeof($per) ; $i++) 
						    {
						        if($per[$i]==$check_type)
						        {
						          $l = 0;
						          break;
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
						        $ps[] = $check_type;
						        $per = implode('|', $ps);
						    }else
								    {
								    	$per = implode('|', $per);
								    }
          		$sql1 = "UPDATE `users2login` SET `access_permission`='$per' WHERE `user_id`='$u1';";
                $con->query($sql1); 
          } 
	  }
    include_once 'user_list_append.php';
?>
