<?php
include_once '../inc/init.php';
$root = "../../support/";
// $rpage = $_POST['rtype'];
$rpage = '';
$e ='';
session_start();
if(isset($_SESSION['sn']))
{
    $presearch = '?model='.$_SESSION['model'].'&data='.$_SESSION['sn'].'&submit=search';
}else
{
    $presearch ='';
}
if(isset($_POST['uname']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
  
    if(isset($_POST['uname']))
    {
        $qry="SELECT * FROM `users` WHERE `user_name`='$username';";
        $run=mysqli_query($con,$qry);
        $row = mysqli_num_rows($run);
        if($row<1)
        {
            $qry1="SELECT * FROM `users2login` WHERE `user_name`='$username';";
            $run1=mysqli_query($con,$qry1);
            $row1 = mysqli_num_rows($run1);
            if($row1<1)
            {
                
                $e .= "user name not found";
                
            }
            else
            {
                  
                  $data1 = mysqli_fetch_assoc($run1);
                  // $x = password_verify($password, $data1['user_pass']);
                  $has_pass = hash("sha256", $password);
                  if($has_pass===$data1['user_pass'])
                  {
                    $x=1;
                  }
                  else
                  {
                    $x=0;
                  }
                  if($x==true)
                  {    
                        $id1=$data1['user_id'];
                        $_SESSION['uname']=$data1['user_name'];
                        $usname1=$data1['user_email'];
                        $type = $data1['type'];
                        $_SESSION['user_type'] = $type;
                        $_SESSION['uid']=$id1;
                        $_SESSION['user_id']=$id1;
                        $_SESSION['usname']=$usname1;
                        $_SESSION['ltype']= "login sub division";
                        $all_per = $data1['access_permission'];
                        $mper = $data1['permission'];
                        $per = explode("|",$all_per);
                        
                        if($mper == '51' || $mper == '52')
                        {   
                            $temp = 0;
                            for ($i=0; $i <sizeof($per); $i++) 
                            {
                                if($per[$i]==5 || $per[$i]==6 || $per[$i]==7 || $per[$i]==8 || $per[$i]==9 || $per[$i]==10 || $per[$i]==11 || $per[$i]==12 || $per[$i]==13)
                                {
                                    $temp =1;
                                }
                            }
                            if($temp == 1)
                            {
                                $_SESSION['lper'] =  $all_per;
                                // header('location:user_dashboard.php');
                                // header("Location:".$root.$rpage."index.php".$presearch."");
                                $e = 1;
                            }else
                            {
                                // header("Location:".$root.$rpage."index.php".$presearch."");
                                $e = 1;
                            }
                        }
                        else if($mper=='1')
                        {
                            // header('location:adminpermission.php'); 
                            // header("Location:".$root.$rpage."index.php".$presearch."");
                            $e = 1;
                        }
                        else
                        {
                            $e = 1;
                        }
                  }else
                  {
                        $e = "username and password not matching";
                        // header("Location:".$root.$rpage."index.php".$presearch."");
                  }
            }        
        }
        else
        {
            $data = mysqli_fetch_assoc($run);
            // $x = password_verify($password, $data['user_pass']);
            
              $has_pass = hash("sha256", $password);
              if($has_pass===$data['user_pass'])
              {
                $x=1;
              }
              else
              {
                $x=0;
              }

            if($x==true)
            {    
                $id=$data['user_id'];
                $_SESSION['uname']=$data['user_name'];
                $usname = $data['user_email'];
                $type = 1;
                $_SESSION['user_type'] = $type;
                $_SESSION['uid']=$id;
                $_SESSION['user_id']=$id;
                $_SESSION['usname']=$usname;
                $_SESSION['ltype']= "login main division";
                $per = 0;
                $mper = $data['permission'];
                
                $all_per = $data['access_permission'];
                $per = explode("|",$all_per);
                
                if($mper == '51' || $mper == '52')
                {   
                    $temp = 0;
                    for ($i=0; $i <sizeof($per); $i++) 
                    {
                        if($per[$i]==5 || $per[$i]==6 || $per[$i]==7 || $per[$i]==8 || $per[$i]==9 || $per[$i]==10 || $per[$i]==11 || $per[$i]==12 || $per[$i]==13)
                        {
                            $temp =1;
                        }
                    }
                    if($temp == 1)
                    {
                        $_SESSION['lper'] =  $all_per;
                        // header('location:user_dashboard.php');
                        // header("Location:".$root.$rpage."index.php".$presearch."");
                        $e = 1;
                    }else
                    {
                        // header("Location:".$root.$rpage."index.php".$presearch."");
                        $e = 1;
                    }
                }
                else if($mper=='1')
                {
                    // header('location:adminpermission.php'); 
                    // header("Location:".$root.$rpage."index.php".$presearch."");
                    $e =1;
                }
                
                
            }else
            {
               
                $e = 'username and password not matching';
                // header("Location:".$root.$rpage."index.php".$presearch."");   
               
            }
        }
    }
}  
echo $e; 
?>