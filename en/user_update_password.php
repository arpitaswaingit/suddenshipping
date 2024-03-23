<?php
include_once 'essentials/database.php';
include_once 'essentials/session.php';

if(isset($_POST['change_password']))
{
    $username=$_SESSION['uname'];
    $old_pass=$_POST['old_pass'];
    $new_pass=$_POST['new_pass'];
  
    
            $qry="SELECT * FROM `users` WHERE `user_name`='$username';";
            $run=mysqli_query($con,$qry);
            $row = mysqli_num_rows($run);
           
            if($row<1)
            {
                $qry1="SELECT * FROM `users2login` WHERE `user_name`='$username'";
                $run1=mysqli_query($con,$qry1);
                $row1 = mysqli_num_rows($run1);

               if($row1>0){

                $fetch=mysqli_fetch_array($run1);
                $old_password=$fetch['user_pass'];

                $has_pass = hash("sha256", $old_pass);
                
                if($has_pass==$fetch['user_pass'])
                {
                   
                    $new_password = hash("sha256", $new_pass);

                    $update="update users2login set user_pass='$new_password' where user_name='$username'";
                    $res=mysqli_query($con,$update);
                    
                    if($res){
                        $out['status']='success';
                        $out['msg']='Password Updated Successfully..';
                    }
                   
                }
                else{
                    $out['status']='failure';
                    $out['msg']='Old Password does not match';
                }

                }

               else{
                    $out['status']='failure';
                    $out['msg']='User Not Found';
               }

            }
            else{

                $fetch=mysqli_fetch_array($run);

                $old_password=$fetch['user_pass'];

                $has_pass = hash("sha256", $old_pass);

                if($has_pass===$fetch['user_pass'])
                {

                    $new_password = hash("sha256", $new_pass);
                   
                    $update="update users set user_pass='$new_password' where user_name='$username'";
                    $res=mysqli_query($con,$update);
                    
                    if($res){
                        $out['status']='success';
                        $out['msg']='Password Updated Successfully..';
                    }
                }
                else{
                    $out['status']='failure';
                    $out['msg']='Old Password does not match';
                }



            }
           
            echo json_encode($out);

}   
?> 