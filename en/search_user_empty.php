<?php 
    include_once '../inc/init.php';
    session_start();
    
    $lim = $_POST['lim'];
    $lim = (int)$lim;
    if ($lim == 9) {
        $off = $_POST['off'];
        $off = (int)$off;
        $sql = "SELECT * FROM users WHERE `permission` = '1' ORDER BY user_id DESC LIMIT $lim OFFSET $off";
        $sql1 = "SELECT * FROM users2login ORDER BY user_id DESC LIMIT $lim OFFSET $off";
        $result = $con->query($sql);
        $result1 = $con->query($sql1);
    } else {
        $inc = $_POST['inc'];
        $inc = (int)$inc;
        $lim = 9;
        $off = 9 + (9 * $inc);
        $sql = "SELECT * FROM users WHERE `permission` = '1' ORDER BY user_id DESC LIMIT $lim OFFSET $off";
        $sql1 = "SELECT * FROM users2login  ORDER BY user_id DESC LIMIT $lim OFFSET $off";
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
              $e .= "<form method='POST'>
                    <tr>
                    <td>Name: ".ucwords($row["user_name"])."
                    <br>Email: ".$row["user_email"]."</td>
                    <td>".$display_type."</td>";
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					$e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					/*
                    $e .= "<td><ul>"; 
                            for ($i=0; $i <sizeof($per) ; $i++) 
                              {
                                if($per[$i]==5)
                                {
                                  $e .="<li>Locator Admin</li>";
                                }
                                if($per[$i]==6)
                                {
                                  $e .="<li>Sudden Shipping Admin</li>";
                                }
                                if($per[$i]==7)
                                {
                                  $e .="<li>Support Admin</li>";
                                }
                                if($per[$i]==8)
                                {
                                  $e .="<li>Free Catalogue Admin</li>";
                                }
                                if($per[$i]==9)
                                {
                                  $e .="<li>Online Price Admin</li>";
                                }
                                if($per[$i]==10)
                                {
                                  $e .="<li>Motor Option Admin</li>";
                                }
                                if($per[$i]==11)
                                {
                                  $e .="<li>Flow Pressure Admin</li>";
                                }
                                if($per[$i]==12)
                                {
                                  $e .="<li>Labor Time Admin</li>";
                                }
                                if($per[$i]==13)
                                {
                                  $e .="<li>Mail Server Admin</li>";
                                }
                                if($per[$i]==14)
                                {
                                  $e .="<li>Teeth Option Admin</li>";
                                }
								if($per[$i]==15)
                                {
                                  $e .="<li>Contact</li>";
                                }
                              } 
                    $e .= "</ul></td>";
					*/
					
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
                        <tr>
                        <td>Name: ".ucwords($row1["user_name"])."<br>Email: ".$row1["user_email"]."</td>
                        <td>".$display_type."</td>";
                         $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					$e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
					
						/*
                        $e .= "<td><ul>"; 
                                for ($i=0; $i <sizeof($per) ; $i++) 
                                  {
                                    if($per[$i]==5)
                                    {
                                      $e .="<li>Locator Admin</li>";
                                    }
                                    if($per[$i]==6)
                                    {
                                      $e .="<li>Sudden Shipping Admin</li>";
                                    }
                                    if($per[$i]==7)
                                    {
                                      $e .="<li>Support Admin</li>";
                                    }
                                    if($per[$i]==8)
                                    {
                                      $e .="<li>Free Catalogue Admin</li>";
                                    }
                                    if($per[$i]==9)
                                    {
                                      $e .="<li>Online Price Admin</li>";
                                    }
                                    if($per[$i]==10)
                                    {
                                      $e .="<li>Motor Option Admin</li>";
                                    }
                                    if($per[$i]==11)
                                    {
                                      $e .="<li>Flow Pressure Admin</li>";
                                    }
                                    if($per[$i]==12)
                                    {
                                      $e .="<li>Labor Time Admin</li>";
                                    }
                                    if($per[$i]==13)
                                    {
                                      $e .="<li>Mail Server Admin</li>";
                                    }
                                    if($per[$i]==14)
                                    {
                                      $e .="<li>Teeth Option Admin</li>";
                                    }
                                  } 
                        $e .= "</ul></td>";
*/

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
                    $display_type = 'Dealer Admin';
                  }else
                  {
                    $display_type = 'Others';
                  }
                   $per = explode("|",$row["access_permission"]);
                $e .= "<tr><td>Name: ".ucwords($row["user_name"])."
                <br>Email: ".$row["user_email"]."</td>
                <td>".$display_type."</td>";
                
                 $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					$e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                    $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
					
                   $e .= "<td><input type='checkbox' ";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==15)
                      {
                        $e .="checked";
                      }
                    }
                    $e .= " disabled /></td>";
					
				/*
                $e .= "<td><ul>"; 
                        for ($i=0; $i <sizeof($per) ; $i++) 
                          {
                            if($per[$i]==5)
                            {
                              $e .="<li>Locator Admin</li>";
                            }
                            if($per[$i]==6)
                            {
                              $e .="<li>Sudden Shipping Admin</li>";
                            }
                            if($per[$i]==7)
                            {
                              $e .="<li>Support Admin</li>";
                            }
                            if($per[$i]==8)
                            {
                              $e .="<li>Free Catalogue Admin</li>";
                            }
                            if($per[$i]==9)
                            {
                              $e .="<li>Online Price Admin</li>";
                            }
                            if($per[$i]==10)
                            {
                              $e .="<li>Motor Option Admin</li>";
                            }
                            if($per[$i]==11)
                            {
                              $e .="<li>Flow Pressure Admin</li>";
                            }
                            if($per[$i]==12)
                            {
                              $e .="<li>Labor Time Admin</li>";
                            }
                            if($per[$i]==13)
                            {
                              $e .="<li>Mail Server Admin</li>";
                            }
                            if($per[$i]==14)
                            {
                              $e .="<li>Teeth Option Admin</li>";
                            }
                          } 
                $e .= "</ul></td>";
				*/
				
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
                      <tr>
                      <td>".ucwords($row1["user_name"])."</td>
                      <td>".$row1["user_email"]."</td>
                      <td>".$display_type."</td>";
                        
                      $e .= "<td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==5)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==6)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==7)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==8)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==9)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==10)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==11)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==12)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==13)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    $e .= "</td><td>";
                    for ($i=0; $i <sizeof($per) ; $i++) 
                    {
                      if($per[$i]==14)
                      {
                        $e .="<h4>✓</h4>";
                      }
                    }
                    
					$e .= "</td><td>";
					for ($i=0; $i <sizeof($per) ; $i++) 
					{
					  if($per[$i]==15)
					  {
						$e .="<h4>✓</h4>";
					  }
					}
					$e .= "</td>";
                    /*
                    $e .= "<td><ul>"; 
                            for ($i=0; $i <sizeof($per) ; $i++) 
                              {
                                if($per[$i]==5)
                                {
                                  $e .="<li>Locator Admin</li>";
                                }
                                if($per[$i]==6)
                                {
                                  $e .="<li>Sudden Shipping Admin</li>";
                                }
                                if($per[$i]==7)
                                {
                                  $e .="<li>Support Admin</li>";
                                }
                                if($per[$i]==8)
                                {
                                  $e .="<li>Free Catalogue Admin</li>";
                                }
                                if($per[$i]==9)
                                {
                                  $e .="<li>Online Price Admin</li>";
                                }
                                if($per[$i]==10)
                                {
                                  $e .="<li>Motor Option Admin</li>";
                                }
                                if($per[$i]==11)
                                {
                                  $e .="<li>Flow Pressure Admin</li>";
                                }
                                if($per[$i]==12)
                                {
                                  $e .="<li>Labor Time Admin</li>";
                                }
                                if($per[$i]==13)
                                {
                                  $e .="<li>Mail Server Admin</li>";
                                }
                                if($per[$i]==14)
                                {
                                  $e .="<li>Teeth Option Admin</li>";
                                }
                              } 
                    $e .= "</ul></td>";
					*/
					
                      $e .= "
                      </tr></form>";
                $count = $count + 1;
            }
          }
    }
    echo $e;
?>