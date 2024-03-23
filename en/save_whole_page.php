<?php 
	include_once '../inc/init.php';
	session_start();
	
	if(isset($_POST['search_input']))
	{
		$search = $_POST['search_input'];
	}else
	{
		$search = '';
	}
	
	
	//select all code
	if(!empty($_POST['txts'])){
	$check_type = 0;
	$check_type = $_POST['txts'];
	$check_type = $check_type."|";

	$p = explode("|",$check_type);
	sort($p);
	$x = '';
	foreach ($p as $k) 
	{
	    if(!empty($k))
	    {
	        $x = $x."|".$k;
	    }
	}
	$check_type = $x; 
    $ct = explode("|", $check_type);
	
	if($_POST['select_type']==1)
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
		$sql = "SELECT * FROM `users` WHERE `permission` = '1'";
		$sql1 = "SELECT * FROM `users2login` ";
	}
	
	
	$result = $con->query($sql);
	$result1 = $con->query($sql1);
	

	if ($result->num_rows > 0) 
	{
	  if ($result1->num_rows > 0) 
	  {
	      	  while($row = $result->fetch_assoc())
	          {
	          					$r = $row["access_permission"];
							    foreach ($ct as $w) 
							    {   
							        $check_type = $w;
							        $l=0;
							        $per = explode("|",$r);
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
							            sort($ps);
							            $r = implode('|', $ps);
							        }else
							        {
							            $r = implode('|', $per);
							        }
							    }
							    $per = $r;
	             	$u = $row["user_id"]; 
	          		$uemail = $row['user_email'];
	          		$sql = "UPDATE `users` SET `access_permission`='$per' WHERE `user_id`='$u';";
	                $con->query($sql); 
	           }     
	          while($row1 = $result1->fetch_assoc())
	          {
						$r = $row1["access_permission"];
				    foreach ($ct as $w) 
				    {   
				        $check_type = $w;
				        $l=0;
				        $per = explode("|",$r);
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
				            sort($ps);
				            $r = implode('|', $ps);
				        }else
				        {
				            $r = implode('|', $per);
				        }
				    }
				    $per = $r;
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
	      		$r = $row["access_permission"];
			    foreach ($ct as $w) 
			    {   
			        $check_type = $w;
			        $l=0;
			        $per = explode("|",$r);
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
			            sort($ps);
			            $r = implode('|', $ps);
			        }else
			        {
			            $r = implode('|', $per);
			        }
			    }
			    $per = $r;
	            $u = $row["user_id"]; 
	      		$uemail = $row['user_email'];
	      		$sql = "UPDATE `users` SET `access_permission`='$per' WHERE `user_id`='$u';";
	            $con->query($sql); 
	      }  
	  }
	}
	elseif ($result1->num_rows > 0) 
	{
	  while($row1 = $result1->fetch_assoc())
	  {
	  		$r = $row1["access_permission"];
		    foreach ($ct as $w) 
		    {   
		        $check_type = $w;
		        $l=0;
		        $per = explode("|",$r);
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
		            sort($ps);
		            $r = implode('|', $ps);
		        }else
		        {
		            $r = implode('|', $per);
		        }
		    }
		    $per = $r;
				$u1 = $row1["user_id"]; 
	  		$uemail1 = $row1['user_email'];
	  		$sql1 = "UPDATE `users2login` SET `access_permission`='$per' WHERE `user_id`='$u1';";
	        $con->query($sql1); 
	  } 
	}
	}
    // deselect all code
	// // dtext details
	
	if(!empty($_POST['dtxts'])){
	$check_type = 0;
	$check_type = $_POST['dtxts'];
	$check_type = $check_type."|";

	$p = explode("|",$check_type);
	sort($p);
	$x = '';
	foreach ($p as $k) 
	{
	    if(!empty($k))
	    {
	        $x = $x."|".$k;
	    }
	}
	$check_type = $x; 
    $ct = explode("|", $check_type);
	
	
    if($_POST['select_type']==1)
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
		$sql = "SELECT * FROM `users` WHERE `permission` = '1'";
		$sql1 = "SELECT * FROM `users2login` ";
		
	}
	$result = $con->query($sql);
	$result1 = $con->query($sql1);
	
	if ($result->num_rows > 0) 
	{
		if ($result1->num_rows > 0) 
		{
	          
			while($row = $result->fetch_assoc())
			{
				$r = $row["access_permission"];
			    foreach ($ct as $w) 
			    {
  					$l=0;
				    $per = explode("|",$r);
				    for ($i=0; $i <sizeof($per) ; $i++) 
				    {
				        if($per[$i]==$w)
				        {
				          $l = 1;
				        }
				    }
				    if($l==1)
				    {
				        $ps = array();
				        foreach ($per as $k) 
				        {
				            if($k==$w)
				            {

				            }else
				            {
				               $ps[] = $k;
				            }
				        }
				        sort($ps);
				        $r = implode('|', $ps);
				    }else
				    {
				        $r = implode('|',$per);
				    }
				}
				$per = $r;
             	$u = $row["user_id"]; 
          		$uemail = $row['user_email'];
          		$sql = "UPDATE `users` SET `access_permission`='$per' WHERE `user_id`='$u';";
                $con->query($sql); 
			}     
			while($row1 = $result1->fetch_assoc())
			{
          		$r = $row1["access_permission"];
			    foreach ($ct as $w) 
			    {
  					$l=0;
				    $per = explode("|",$r);
				    for ($i=0; $i <sizeof($per) ; $i++) 
				    {
				        if($per[$i]==$w)
				        {
				          $l = 1;
				        }
				    }
				    if($l==1)
				    {
				        $ps = array();
				        foreach ($per as $k) 
				        {
				            if($k==$w)
				            {

				            }else
				            {
				               $ps[] = $k;
				            }
				        }
				        sort($ps);
				        $r = implode('|', $ps);
				    }else
				    {
				        $r = implode('|',$per);
				    }
				}
				$per = $r;
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
          		$r = $row["access_permission"];
			    foreach ($ct as $w) 
			    {
  					$l=0;
				    $per = explode("|",$r);
				    for ($i=0; $i <sizeof($per) ; $i++) 
				    {
				        if($per[$i]==$w)
				        {
				          $l = 1;
				        }
				    }
				    if($l==1)
				    {
				        $ps = array();
				        foreach ($per as $k) 
				        {
				            if($k==$w)
				            {

				            }else
				            {
				               $ps[] = $k;
				            }
				        }
				        sort($ps);
				        $r = implode('|', $ps);
				    }else
				    {
				        $r = implode('|',$per);
				    }
				}
				$per = $r;
	            $u = $row["user_id"]; 
          		$uemail = $row['user_email'];
          		$sql = "UPDATE `users` SET `access_permission`='$per' WHERE `user_id`='$u';";
                $con->query($sql); 
			}  
		}
	}
	elseif ($result1->num_rows > 0) 
	{
		while($row1 = $result1->fetch_assoc())
		{
			$r = $row1["access_permission"];
		    foreach ($ct as $w) 
		    {
					$l=0;
			    $per = explode("|",$r);
			    for ($i=0; $i <sizeof($per) ; $i++) 
			    {
			        if($per[$i]==$w)
			        {
			          $l = 1;
			        }
			    }
			    if($l==1)
			    {
			        $ps = array();
			        foreach ($per as $k) 
			        {
			            if($k==$w)
			            {

			            }else
			            {
			               $ps[] = $k;
			            }
			        }
			        sort($ps);
			        $r = implode('|', $ps);
			    }else
			    {
			        $r = implode('|',$per);
			    }
			}
			$per = $r;
   			$u1 = $row1["user_id"]; 
      		$uemail1 = $row1['user_email'];
      		$sql1 = "UPDATE `users2login` SET `access_permission`='$per' WHERE `user_id`='$u1';";
            $con->query($sql1); 
		} 
	}
	}
	
	

	// single check adding permission
    $check_type = 0;
	$check_type = $_POST['stxts'];
	$check_type = $check_type."|";
	$p ='';
	$p = explode("|",$check_type);
	sort($p);
	$x = '';
	$y='';
	foreach ($p as $k) 
	{
	    if(!empty($k))
	    {
	        $x = $x."|".$k;
	    }
	}
	$y = explode("|", $x);
	sort($y);
	$x = $y;
	
	
	//echo $check_type;
	
	
	
	foreach ($x as $w) 
	{
		$id = '';
		$a = $w;
		$aa = $w;
		$tn = '';
		$tn = stripos($w, "S");
		if($tn=='')
		{
		    $tn = stripos($w, "M");
		    $tn ='M';
		    if(!empty($w))
		    {
		    	$df = explode('M', $w);
		    	$id = $df[1];
		    }
		}else
		{
		    $tn ='S';
		    if(!empty($w))
		    {
		    	$df = explode('S', $w);
		    	$id = $df[1];
		    }
		}
		if($tn!='')
		{
		    $t = $tn;
		}
		$temp1 = substr($w,0,3);//permission number
		if($temp1=="p1M" || $temp1=="p1S"){ $t1 = 5; }
		elseif($temp1=="p2M" || $temp1=="p2S"){ $t1 = 6; }
		elseif($temp1=="p3M" || $temp1=="p3S"){ $t1 = 7; }
		elseif($temp1=="p4M" || $temp1=="p4S"){ $t1 = 8; }
		elseif($temp1=="p5M" || $temp1=="p5S"){ $t1 = 9; }
		elseif($temp1=="p6M" || $temp1=="p6S"){ $t1 = 10; }
		elseif($temp1=="p7M" || $temp1=="p7S"){ $t1 = 11; }
		elseif($temp1=="p8M" || $temp1=="p8S"){ $t1 = 12; }
		elseif($temp1=="p9M" || $temp1=="p9S"){ $t1 = 13; }
		elseif($temp1=="p10"){ $t1 = 14; }
		elseif($temp1=="p11"){ $t1 = 15; }
		elseif($temp1=="p12"){ $t1 = 16; }
		elseif($temp1=="p13"){ $t1 = 17; }
		elseif($temp1=="p14"){ $t1 = 18; }
		else
		{
			$t1 = 0;	
		}
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




	// single check deleting permission

	$check_type = 0;
	$t1='';
	$check_type = $_POST['sdtxts'];
	$check_type = $check_type."|";
	$p ='';
	$p = explode("|",$check_type);
	sort($p);
	$x = '';
	$y='';
	
	
	foreach ($p as $k) 
	{
	    if(!empty($k))
	    {
	        $x = $x."|".$k;
	    }
	}
	$y = explode("|", $x);
	sort($y);
	$x = $y;
	foreach ($x as $w) 
	{
		$id = '';//id for perticular row
		$a = $w;
		// $t = substr($w, 2,1);//character to identify which table
		$tn = '';
		$tn = stripos($w, "S");
		if($tn=='')
		{
		    $tn = stripos($w, "M");
		    $tn ='M';
		    if(!empty($w))
		    {
		    	$df = explode('M', $w);
		    	$id = $df[1];
		    }
		}else
		{
		    $tn ='S';
		    if(!empty($w))
		    {
		    	$df = explode('S', $w);
		    	$id = $df[1];
		    }
		}
		if($tn!='')
		{
		    $t = $tn;
		}
		$temp1 = substr($w,0,3);//permission number
		if($temp1=="p1M" || $temp1=="p1S"){ $t1 = 5; }
		elseif($temp1=="p2M" || $temp1=="p2S"){ $t1 = 6; }
		elseif($temp1=="p3M" || $temp1=="p3S"){ $t1 = 7; }
		elseif($temp1=="p4M" || $temp1=="p4S"){ $t1 = 8; }
		elseif($temp1=="p5M" || $temp1=="p5S"){ $t1 = 9; }
		elseif($temp1=="p6M" || $temp1=="p6S"){ $t1 = 10; }
		elseif($temp1=="p7M" || $temp1=="p7S"){ $t1 = 11; }
		elseif($temp1=="p8M" || $temp1=="p8S"){ $t1 = 12; }
		elseif($temp1=="p9M" || $temp1=="p9S"){ $t1 = 13; }
		elseif($temp1=="p10"){ $t1 = 14; }
		elseif($temp1=="p11"){ $t1 = 15; }
		elseif($temp1=="p12"){ $t1 = 16; }
		elseif($temp1=="p13"){ $t1 = 17; }
		elseif($temp1=="p14"){ $t1 = 18; }
		else
		{
			$t1 = 0;	
			
		}
		
		$tname = $t;//character to identify which table
		$tid = $id;//id for perticular row
		$t1 = $t1;//permission number
		if($tname=="M")
		{
			$sql = "SELECT * FROM `users` WHERE `user_id` = '$tid' ";
			$result = $con->query($sql);
			$per='';
			
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
	}
	
	
	
    //include_once 'user_list_append.php';
?>
