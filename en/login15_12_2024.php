<?php
   include_once '../inc/init.php'; 
   include "include/header.php";
   ?>
<?php
if(isset($_SESSION['user_id']))
{
    
    if($_SESSION['user']['user_name'] == 'mennobauman')
    {
        // header('Location:welcomelogin.php','_self');
        echo "<script>window.location.href ='admin_dashboard.php';</script>"; 
    }
    else
    {
        // header('Location:user_dashboard.php','_self');  
        echo "<script>window.location.href ='user_dashboard.php';</script>"; 
    }
     
}
?>


 <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: #fff;
  overflow: hidden;
}
::selection{
  background: rgb(174, 106, 186);
}
.container{
  max-width: 440px;
  padding: 0 20px;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background-color: rgba(0,0,0,0.4);
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}

.wrapper form{
  padding: 30px 25px 25px 25px;
}

.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}

.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: rgba(0,0,0,0.4);
  box-shadow: inset 0px 0px 2px 2px rgba(0,0,0,0.6);;
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: rgba(0,0,0,0.4);
  border: 1px solid rgba(0,0,0,0.6);;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #fff;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: rgba(0,0,0,0.4);
  border: 1px solid rgba(0,0,0,0.6);
  cursor: pointer;
}
form .button input:hover{
  background: #28a745;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: rgba(0,0,0,0.4);
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
.login_btn:hover{
  background-color: green;
  border-color: green;
}
.instruction{
	height:0px!important;
	padding-top:12px;
}
 .blink_me {
  animation: blinker 2s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0.5;
  }
}
</style>
<br>
<div class="container">
 <div class="row">
      <div class="col-md-6 col-lg-6 col-xs-12 wrapper">
        <div class="title"><span>Login</span></div>
        <form name="form_login" id="form_login" method="post" action="verify_login.php"> 
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="uname"  id="login_email" placeholder="User Name" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass" id="login_password" placeholder="Password" required>
          </div>
        
          <div class="row button">
          <input  type="hidden" name="login_save" value="LOGIN"/>
            <input class="login_btn" type="submit" value="Submit">
          </div>

          <div class="signup-link">
            <a class="" href="forgot_password_mail.php" >Forgot Password..?</a>
          </div>
		  
		  <div class="row instruction" >
            <a class="blink_me" href="../../pdf/Steps-to-access-the-Baumalight-portal.pdf" target="_blank" >Click here to instructions for first-time users.</a>
          </div>

        </form>
      </div>
	  
	  </div>
    </div>

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
