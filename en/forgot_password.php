<?php
session_start();
include_once '../inc/init.php';
if(isset($_SESSION['user_id']))
{
    if(isset($_SESSION['user_type']))
    {
        if(((int)$_SESSION['user_type'])==0)
        {
            header('Location:adminpermission.php','_self');
        }
        else
        {
            header('Location:user_dashboard.php','_self');      
        }
    } 
}
// $root = "../../support/";
// $rpage = '../../support/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .tfont
    {   
        font-family: Arial Black;
        /*letter-spacing: 1px;*/
    }
    .tcenter{
        text-align: center;
        }
    .ycolor
    {
        color:#e8c804;
    }
    .bcolor
    {
        color:black;
    }
    .wcolor
    {
        color:#ffff;
    }
</style>
<nav style="background: #014580; border: 1px solid black;">
    <ul>
        <?php include_once 'imgnav.php';?>
    </ul>
</nav>
<body >
<div class="container-fluid">
  <div class="row content">
      <div class="col-sm-4"></div>
      	<div class="col-sm-4" style="margin-top: 150px;border: 1px solid lightgray; background: lightgray;">
      		<center ><h2>Change Password</h2></center>
      		<br>
			  <form role="form" method="POST" action="">
			    <div class="form-group">
			    	<input type="text" class="form-control" name="uname" placeholder="Enter your User name" />
			    	<br>
			    	<input type="password" class="form-control" name="pass" placeholder="Enter new password" />
                    <br>
                    <input type="password" class="form-control" name="cpass" placeholder="Confirm password" />
			    </div>
                <a href="login.php">have password..?</a>
			    <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
			  </form>
              <br>
      	</div>
      <div class="col-sm-3"></div>
    
  </div>
</div>
</body>
</html>
<?php

// $r = include('connection.php');
if(isset($_POST['uname']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];
  
    if($cpassword == $password)
    {
        if(isset($_POST['uname']))
        {
            $qry="SELECT * FROM `users` WHERE `user_name`='$username';";
            $run=mysqli_query($con,$qry);
            $row = mysqli_num_rows($run);
            if($row<1)
            {
                $qry1="SELECT * FROM `users2login` WHERE `user_name`='$username' ;";
                $run1=mysqli_query($con,$qry1);
                $row1 = mysqli_num_rows($run1);
                if($row1<1)
                {
                    $_SESSION['status'] = "User Name not Found";
                    ?>
                      <script>
                      // window.open('forgot_password.php','_self');
                      </script>
                    <?php
                }else
                {       
                        $has_pass = hash("sha256", $password);
                        $sql = "UPDATE `users2login` SET `user_pass`='$has_pass' WHERE `user_name`='$username';";
                        
                        if ($con->query($sql) === TRUE) 
                        {
                            $_SESSION['status'] = "New password changed Successfully";
                            header("Location:login.php");
                        } 
                        else 
                        { 
                            echo "Error: " . $sql . "<br>" . $con->error;
                        } 
                        $con->close();
                }        
            }
            else
            {
                $has_pass = hash("sha256", $password);
                $sql = "UPDATE `users` SET `user_pass`='$has_pass' WHERE `user_name`='$username';";
                if ($con->query($sql) === TRUE) 
                {
                    $_SESSION['status'] = "New password changed Successfully";
                    header("Location:login.php");
                } 
                else 
                { 
                    echo "Error: " . $sql . "<br>" . $con->error;
                } 
                $con->close();
            }
        }
    }else
    {
        $_SESSION['status'] = "New password and confirm password not matching";
        // header("Location:forgot_password.php");
        
    }
}   
?> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
if(isset($_SESSION['status']))
{ ?>
        <script type="text/javascript">
            swal("<?php echo $_SESSION['status']; ?>");
        </script>
    <?php 
}
unset($_SESSION['status'])
?>
