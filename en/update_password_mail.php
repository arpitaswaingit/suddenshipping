<?php
include_once 'essentials/database.php';
include_once 'essentials/session.php';

if(isset($_POST['forgot_password']))
{
   
    $username=$_POST['uname'];
    $mail=$_POST['mail'];
    
    $pwd = rand(100000,999999);	
    $to_email=trim($mail);
    $subject="Password for Login";
	
	$body=" ";
	$body .= "<div style='padding:10px;'>";
	$body .= "<h3 class='font-weight:bold;font-size:22px!important'>Your New Password</h3><br/>";
	$body .= "<p style='font-size:16px;'>Username : $username</p>";
	$body .= "<p style='font-size:16px;'>Password : $pwd</p>";
	$body .= "<p style='font-size:16px;'>Please be sure to change your password the next time you login. <a href='https://baumalight.com/login/'>Click here</a> to Login. <br/> Thank you.</p>";
	$body .= "</div>";
	
    //$body .= "Hi, This is your password for login into Baumalight Admin Panel ".$pwd;
	
	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
	
	$from='no-reply@baumalight.com';
	
	// Additional headers 
	$headers .= 'From: <'.$from.'>' . "\r\n"; 


            $qry="SELECT * FROM `users` WHERE `user_name`='$username' and user_email='$mail'";
            $run=mysqli_query($con,$qry);
            $row = mysqli_num_rows($run);
          
            if($row==0)
            {
                $qry1="SELECT * FROM `users2login` WHERE `user_name`='$username' and user_email='$mail'";
                
                $run1=mysqli_query($con,$qry1);
                $row1 = mysqli_num_rows($run1);

               if($row1>0){
        
                    if(mail($to_email,$subject,$body,$headers)){
                        $new_password = hash("sha256", $pwd);

                        $update="update users2login set user_pass='$new_password' where user_name='$username' and user_email='$mail'";
                        $res=mysqli_query($con,$update);
                        
                        if($res){
                            $out['status']='success';
                            $out['msg']='Password sent to your mail Successfully..';
                        }
                    }
                    else{
                        $out['status']='failure';
                        $out['msg']='Error while sending mail';
                    }

                 }

               else{
                    $out['status']='failure';
                    $out['msg']='User Not Found';
               }

            }
            else{

           $fetch=mysqli_fetch_array($run);

            if(mail($to_email,$subject,$body,$headers)){
               
                $new_password = hash("sha256", $pwd);

                $update="update users set user_pass='$new_password' where user_name='$username' and user_email='$mail'";
                $res=mysqli_query($con,$update);
                
                if($res){
                    $out['status']='success';
                    $out['msg']='Password sent to your mail Successfully..';
                }

            }
            else{
                $out['status']='failure';
                $out['msg']='Error while sending mail';
            }

            }
           
            echo json_encode($out);

}   
?> 