<?php 
  if($_SESSION['s_type']==1)
  {
	  // ($search=="d") || ($search == "tm") || ($search == "admin")
      $temp = '';
      $temp1 = '';
      $search = strtolower(trim($search));
      $word = strtolower(trim($search));

      if(empty($word) || $word==''){
        $sql = "SELECT * FROM `users` WHERE `permission` = '1' ORDER BY user_id DESC";
        $sql1 = "SELECT * FROM `users2login` ORDER BY user_id DESC";
      }
      else{
    
      $dealer="dealer";
      $support="support";
      $others="others";

      $mystring = "dealer admin";
      $mystring2 = "support admin";
      
      // Test if string contains the word 
      if((strpos($mystring, $word) !== false) && (strpos($mystring2, $word) !== false) ){
        $temp=1;
        $sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
        $sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp%' ";
      }
      else if((strpos($mystring, $word) !== false) || (strpos($dealer, $word) !== false) ){
        $temp = 1;
        $temp1 = '505550550';
        $sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
        $sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp1%' ";
      }
      else if((strpos($mystring2, $word) !== false) || (strpos($support, $word) !== false)){
        $temp = '505550550';
        $temp1 = 1;
        $sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
        $sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp1%' ";
      }
      else if((strpos($others, $word) !== false)){
        $sql = "SELECT * FROM `users` WHERE `permission`<>1 and `permission`<>51 and `permission`<>52 and `permission`<>2";
        $sql1 = "SELECT * FROM `users2login` WHERE `permission`<>1 and `permission`<>51 and `permission`<>52";
      }
      else
        {
          $temp = '505550550';
          $temp1 = '505550550';

          $sql = "SELECT * FROM `users` WHERE `permission` = '$temp%' AND `permission` = '1'";
          $sql1 = "SELECT * FROM `users2login` WHERE `permission` = '$temp1%' ";
        }

      }
  }
  else if(!empty($search))
  {
	  $sql = "SELECT * FROM `users` WHERE `user_name` LIKE '$search%' AND `permission` = '1'";
	  $sql1 = "SELECT * FROM `users2login` WHERE `user_name` LIKE '$search%' ";
  }
  else if(empty($search))
  {
	  $sql = "SELECT * FROM `users` WHERE `permission` = '1' ORDER BY user_id DESC";
	  $sql1 = "SELECT * FROM `users2login` ORDER BY user_id DESC";
  }
  else
  {
    $sql = "SELECT * FROM `users` WHERE `permission` = '1' ORDER BY user_id DESC";
    $sql1 = "SELECT * FROM `users2login` ORDER BY user_id DESC";
  }
  
    $result = $con->query($sql);
    $result1 = $con->query($sql1); 

	
    $e = '';
    // $e .="<tr onclick='give_alert()' >
    //         <th></th><th></th>
    //         <th><x class='tooltip_click'><input type='checkbox' name='chk' onclick='select_all()' id='cbox'/></th>
    //     </tr>";
    if ($result->num_rows > 0) 
    {
      if ($result1->num_rows > 0) 
      {
          
          $count =0;
          while($row = $result->fetch_assoc())
          {
                
            if($row['user_name']=='mennobauman')
            {

            }else
            {  
              $display_type = '';
              if($row["permission"]==51)
              {
                $display_type = 'D';
              }elseif($row["permission"]==52)
              {
                $display_type = 'TM';
              }elseif($row["permission"]==1 || $row["permission"]==0)
              {
                $display_type = 'Dealer Admin';
              }else
              {
                $display_type = 'Others';
              }
              $per = explode("|",$row["access_permission"]);
              $e .= "
                    <tr onclick='give_alert()' >
                    <td>Name: ".ucwords($row["user_name"])."<br>Email: ".$row["user_email"]."</td>
                    <td>".$display_type."</td>";
					
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p11'  name = 'p11M".$row["user_id"]."' id = 'p11M".$row["user_id"]."' value = 'p11M".$row["user_id"]."'></x></td>";
					
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p1'  name = 'p1M".$row["user_id"]."' id = 'p1M".$row["user_id"]."' value = 'p1M".$row["user_id"]."'></x></td>";
					
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==17)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p13'  name = 'p13M".$row["user_id"]."' id = 'p13M".$row["user_id"]."' value = 'p13M".$row["user_id"]."'></x></td>";
					
					
					
					
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p7' name = 'p7M".$row["user_id"]."' id = 'p7M".$row["user_id"]."' value = 'p7M".$row["user_id"]."'></x></td>";
                    
				
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p4' name = 'p4M".$row["user_id"]."' id = 'p4M".$row["user_id"]."' value = 'p4M".$row["user_id"]."'></x></td>";
                     
					 
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p8' name = 'p8M".$row["user_id"]."' id = 'p8M".$row["user_id"]."' value = 'p8M".$row["user_id"]."'></x></td>";
                   
            $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==16)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p12'  name = 'p12M".$row["user_id"]."' id = 'p12M".$row["user_id"]."' value = 'p12M".$row["user_id"]."'></x></td>";

					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p6'  name = 'p6M".$row["user_id"]."' id = 'p6M".$row["user_id"]."' value = 'p6M".$row["user_id"]."'></x></td>";
					
                    
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p5'  name = 'p5M".$row["user_id"]."' id = 'p5M".$row["user_id"]."' value = 'p5M".$row["user_id"]."'></x></td>";
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==18)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= "  disabled class='p14'  name = 'p14M".$row["user_id"]."' id = 'p14M".$row["user_id"]."' value = 'p14M".$row["user_id"]."'></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= "  disabled class='p2'  name = 'p2M".$row["user_id"]."' id = 'p2M".$row["user_id"]."' value = 'p2M".$row["user_id"]."'></x></td>";
					
                     $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p3' name = 'p3M".$row["user_id"]."' id = 'p3M".$row["user_id"]."' value = 'p3M".$row["user_id"]."'></x></td>";
                    
					 

				   $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p9'  name = 'p9M".$row["user_id"]."' id = 'p9M".$row["user_id"]."' value = 'p9M".$row["user_id"]."'></x></td>";
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
					
                    $e .= " disabled  class='p10'  name = 'p10M".$row["user_id"]."' id = 'p10M".$row["user_id"]."' value = 'p10M".$row["user_id"]."'></x></td>";
					
                    $e .= "
                    </tr>";
              $count = $count + 1;
            }
          }
          while($row1 = $result1->fetch_assoc())
          {
            if($row1['user_name']=='mennobauman')
            {

            }else
            {
               $display_type = '';
              if($row1["permission"]==1 || $row1["permission"]==0)
              {
                $display_type = 'Support Admin';
              }
              else
              {
                $display_type = 'Others';
              }
              $per = explode("|",$row1["access_permission"]);
              $e .= "
                     <tr onclick='give_alert()' >
                      <td>Name: ".ucwords($row1["user_name"])."<br>Email: ".$row1["user_email"]."</td>
                      <td>".$display_type."</td>";
                    
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p11' name = 'p11S".$row1["user_id"]."' id = 'p11S".$row1["user_id"]."' value = 'p11S".$row1["user_id"]."'></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p1'  name = 'p1S".$row1["user_id"]."' id = 'p1S".$row1["user_id"]."' value = 'p1S".$row1["user_id"]."'></x></td>";
					
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==17)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p13'  name = 'p13S".$row1["user_id"]."' id = 'p13S".$row1["user_id"]."' value = 'p13S".$row1["user_id"]."'></x></td>";
					
					
					
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p7' name = 'p7S".$row1["user_id"]."' id = 'p7S".$row1["user_id"]."' value = 'p7S".$row1["user_id"]."'></x></td>";
					
					
					  $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p4' name = 'p4S".$row1["user_id"]."' id = 'p4S".$row1["user_id"]."' value = 'p4S".$row1["user_id"]."'></x></td>";
                    
					
					  $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p8' name = 'p8S".$row1["user_id"]."' id = 'p8S".$row1["user_id"]."' value = 'p8S".$row1["user_id"]."'></x></td>";
					

            $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==16)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p12' name = 'p12S".$row1["user_id"]."' id = 'p12S".$row1["user_id"]."' value = 'p12S".$row1["user_id"]."'></x></td>";

					
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p6' name = 'p6S".$row1["user_id"]."' id = 'p6S".$row1["user_id"]."' value = 'p6S".$row1["user_id"]."'></x></td>";
                    
                   
				   
				   $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p5'  name = 'p5S".$row1["user_id"]."' id = 'p5S".$row1["user_id"]."' value = 'p5S".$row1["user_id"]."'></x></td>";
                    
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==18)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p14'  name = 'p14S".$row1["user_id"]."' id = 'p14S".$row1["user_id"]."' value = 'p14S".$row1["user_id"]."'></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p2'  name = 'p2S".$row1["user_id"]."' id = 'p2S".$row1["user_id"]."' value = 'p2S".$row1["user_id"]."'></x></td>";
					
                     $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p3'  name = 'p3S".$row1["user_id"]."' id = 'p3S".$row1["user_id"]."' value = 'p3S".$row1["user_id"]."'></x></td>";
					
                   
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p9' name = 'p9S".$row1["user_id"]."' id = 'p9S".$row1["user_id"]."' value = 'p9S".$row1["user_id"]."'></x></td>";
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
					
                     $e .= " disabled  class='p10' name = 'p10S".$row1["user_id"]."' id = 'p10S".$row1["user_id"]."' value = 'p10S".$row1["user_id"]."'></x></td>";
                   
                      $e .= "
                      </tr></form>";
                $count = $count + 1;
            }
          }
          
      }else
      {
          $count =0;
          while($row = $result->fetch_assoc())
          {
            if($row['user_name']=='mennobauman')
            {

            }else
            {
                $display_type = '';
                if($row["permission"]==51)
                {
                    $display_type = 'D';
                }elseif($row["permission"]==52)
                {
                    $display_type = 'TM';
                }elseif($row["permission"]==1 || $row["permission"]==0)
                {
                    $display_type = 'Dealer Admin';
                }else
                {
                    $display_type = 'Others';
                }
                $e .= "<form method='POST'>
                    <tr onclick='give_alert()' >
                    <td>Name: ".ucwords($row["user_name"])."<br>Email: ".$row["user_email"]."</td>
                    <td>".$display_type."</td>";
                    $per = explode("|",$row["access_permission"]);
                    
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p11' name = 'p11M".$row["user_id"]."' id = 'p11M".$row["user_id"]."' value = 'p11M".$row["user_id"]."'></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p1' name = 'p1M".$row["user_id"]."' id = 'p1M".$row["user_id"]."' value = 'p1M".$row["user_id"]."'></x></td>";
                    
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==17)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p13' name = 'p13M".$row["user_id"]."' id = 'p13M".$row["user_id"]."' value = 'p13M".$row["user_id"]."'></x></td>";
                    
					
					
					
					
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p7' name = 'p7M".$row["user_id"]."' id = 'p7M".$row["user_id"]."' value = 'p7M".$row["user_id"]."'></x></td>";
                     
					 
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p4' name = 'p4M".$row["user_id"]."' id = 'p4M".$row["user_id"]."' value = 'p4M".$row["user_id"]."'></x></td>";
                     
					  $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p8' name = 'p8M".$row["user_id"]."' id = 'p8M".$row["user_id"]."' value = 'p8M".$row["user_id"]."'></x></td>";
               
                $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==16)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= "  disabled class='p12' name = 'p12M".$row["user_id"]."' id = 'p12M".$row["user_id"]."' value = 'p12M".$row["user_id"]."'></x></td>";


					  $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= "  disabled class='p6' name = 'p6M".$row["user_id"]."' id = 'p6M".$row["user_id"]."' value = 'p6M".$row["user_id"]."'></x></td>";
                    
					 
					  $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p5' name = 'p5M".$row["user_id"]."' id = 'p5M".$row["user_id"]."' value = 'p5M".$row["user_id"]."'></x></td>";
                    
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==18)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p14' name = 'p14M".$row["user_id"]."' id = 'p14M".$row["user_id"]."' value = 'p14M".$row["user_id"]."'></x></td>";
					
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p2' name = 'p2M".$row["user_id"]."' id = 'p2M".$row["user_id"]."' value = 'p2M".$row["user_id"]."'></x></td>";
                     $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p3' name = 'p3M".$row["user_id"]."' id = 'p3M".$row["user_id"]."' value = 'p3M".$row["user_id"]."'></x></td>";
                     
					

				   $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p9' name = 'p9M".$row["user_id"]."' id = 'p9M".$row["user_id"]."' value = 'p9M".$row["user_id"]."'></x></td>";
                    
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
                     $e .= " disabled  class='p10' name = 'p10M".$row["user_id"]."' id = 'p10M".$row["user_id"]."' value = 'p10M".$row["user_id"]."'></x></td>";
                   
                    $e .= "
                    </tr></form>";
              $count = $count + 1;
            }
        }
      }
    }else
    {
        $count=0;
        while($row1 = $result1->fetch_assoc())
        {
            if($row1['user_name']=='mennobauman')
            {

            }else
            {
               $display_type = '';
              if($row1["permission"]==1 || $row1["permission"]==0)
              {
                $display_type = 'Support Admin';
              }
              else
              {
                $display_type = 'Others';
              }
              $e .= "<form method='POST'>
                      <tr onclick='give_alert()' >
                      <td>Name: ".ucwords($row1["user_name"])."<br>Email: ".$row1["user_email"]."</td>
                      <td>".$display_type."</td>";

                      $per = explode("|",$row1["access_permission"]);
                     
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p11' name = 'p11S".$row1["user_id"]."' id = 'p11S".$row1["user_id"]."' value = 'p11S".$row1["user_id"]."'></x></td>";
                    
					
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p1' name = 'p1S".$row1["user_id"]."' id = 'p1S".$row1["user_id"]."' value = 'p1S".$row1["user_id"]."'></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==17)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p13' name = 'p13S".$row1["user_id"]."' id = 'p13S".$row1["user_id"]."' value = 'p13S".$row1["user_id"]."'></x></td>";
					
					
					
					  $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p7'  name = 'p7S".$row1["user_id"]."' id = 'p7S".$row1["user_id"]."' value = 'p7S".$row1["user_id"]."'></x></td>";
					
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p4' name = 'p4S".$row1["user_id"]."' id = 'p4S".$row1["user_id"]."' value = 'p4S".$row1["user_id"]."'></x></td>";
					
					
                     $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p8'  name = 'p8S".$row1["user_id"]."' id = 'p8S".$row1["user_id"]."' value = 'p8S".$row1["user_id"]."'></x></td>";
					
					
              $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==16)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p12' name = 'p12S".$row1["user_id"]."' id = 'p12S".$row1["user_id"]."' value = 'p12S".$row1["user_id"]."'></x></td>";

					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p6' name = 'p6S".$row1["user_id"]."' id = 'p6S".$row1["user_id"]."' value = 'p6S".$row1["user_id"]."'></x></td>";
                   
					
					 $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p5'  name = 'p5S".$row1["user_id"]."' id = 'p5S".$row1["user_id"]."' value = 'p5S".$row1["user_id"]."'></x></td>";
                    
					$e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==18)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p14'  name = 'p14S".$row1["user_id"]."' id = 'p14S".$row1["user_id"]."' value = 'p14S".$row1["user_id"]."'></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p2' name = 'p2S".$row1["user_id"]."' id = 'p2S".$row1["user_id"]."' value = 'p2S".$row1["user_id"]."'></x></td>";
                     $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p3' name = 'p3S".$row1["user_id"]."' id = 'p3S".$row1["user_id"]."' value = 'p3S".$row1["user_id"]."'></x></td>";
                     
                    
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled  class='p9'  name = 'p9S".$row1["user_id"]."' id = 'p9S".$row1["user_id"]."' value = 'p9S".$row1["user_id"]."'></x></td>";
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
					
                    $e .= " disabled  class='p10' name = 'p10S".$row1["user_id"]."' id = 'p10S".$row1["user_id"]."' value = 'p10S".$row1["user_id"]."'></x></td>";
                    
                      $e .= "
                      </tr></form>";
                $count = $count + 1;
            }
          }
    }
    // var_dump($result);
    echo $e;
  ?>