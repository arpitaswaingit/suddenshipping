<?php 
    include_once '../inc/init.php';
    session_start();
    
    $lim = $_POST['lim'];
    $lim = (int)$lim;
    if ($lim == 9) {
        $off = $_POST['off'];
        $off = (int)$off;
       
	   //$sql = "SELECT * FROM users WHERE `permission` = '1' ORDER BY user_id DESC LIMIT $lim OFFSET $off";
       //$sql1 = "SELECT * FROM users2login ORDER BY user_id DESC LIMIT $lim OFFSET $off";
	   
	   $sql = "SELECT * FROM users WHERE `permission` = '1' ";
       $sql1 = "SELECT * FROM users2login";
	   
	   
        $result = $con->query($sql);
        $result1 = $con->query($sql1);
    } else{
        $inc = $_POST['inc'];
        $inc = (int)$inc;
        $lim = 9;
        $off = 9 + (9 * $inc);
		
        //$sql = "SELECT * FROM users WHERE `permission` = '1' ORDER BY user_id DESC LIMIT $lim OFFSET $off";
        //$sql1 = "SELECT * FROM users2login ORDER BY user_id DESC LIMIT $lim OFFSET $off";
		
		$sql = "SELECT * FROM users WHERE `permission` = '1' ";
        $sql1 = "SELECT * FROM users2login";
	   
        $result = $con->query($sql);
        $result1 = $con->query($sql1);
    }
    $e = '';
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
              $e .= "<form method='POST' class='unchecked_alert'>
                    <tr onclick='give_alert()'>
                    <td>Name: ".ucwords($row["user_name"])."
                    <br>Email: ".$row["user_email"]."</td>
                    <td>".$display_type."</td>";
                  $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==17)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==16)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";

					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==18)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					$e .= "
                    </tr></form>";
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
                  $e .= "<form method='POST'>
                        <tr onclick='give_alert()'>
                        <td>Name: ".ucwords($row1["user_name"])."<br>Email: ".$row1["user_email"]."</td>
                        <td>".$display_type."</td>";
                         $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==17)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					

                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==16)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";

					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==18)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                        $e .="
                        </tr></form>";
                        $count = $count + 1;
            }
          }
      }else
      {
          
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
                    $display_type = 'Dealer Admin S';
                  }else
                  {
                    $display_type = 'Others';
                  }
                   $per = explode("|",$row["access_permission"]);
                $e .= "<tr onclick='give_alert()'><td>Name: ".ucwords($row["user_name"])."
                <br>Email: ".$row["user_email"]."</td>
                <td>".$display_type."</td>";
                
                 $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==17)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==16)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";

                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==18)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                $e .="</tr>";
            }
          }
      }
      
    }
    else
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
                $per = explode("|",$row1["access_permission"]);
                $e .= "<form method='POST'>
                      <tr onclick='give_alert()'>
                      <td>".ucwords($row1["user_name"])."</td>
                      <td>".$row1["user_email"]."</td>
                      <td>".$display_type."</td>";
                        
                      $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==17)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==16)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";

                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					$e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==18)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                    $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
					
                   $e .= "<td><x class='tooltip_click'><input type='checkbox' class='disabled_click' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></x></td>";
					
                      $e .= "
                      </tr></form>";
                $count = $count + 1;
            }
          }
    }


    
    echo $e;
?>