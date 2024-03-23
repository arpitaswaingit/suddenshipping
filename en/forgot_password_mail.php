<?php 
    include "include/header.php";
    include "essentials/database.php";
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
  background: rgb(0,0,0,0.4);
}
.container{
  max-width: 800px;
  padding: 0 20px;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 4px 5px 5px 3px rgba(0,0,0,0.2);
}
.wrapper .title{
  height: 50px;
  background-color: rgba(0,0,0,0.4);
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 22px;
  font-weight: 600;
  text-align:center;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}

.wrapper form .form_input{
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

input,
input::placeholder {
    /*font: 1.25rem/3 sans-serif;*/
    font-size:12px;
    //color: red !important;
}

 input::-moz-placeholder {
    color: red !important;
  }
  input:-moz-placeholder {
    color: red !important;
  }
  *::-webkit-input-placeholder {
    color: red !important;
  }
  *:-ms-input-placeholder {
    color: red !important;
  }
  *:-moz-placeholder {
    color: red !important;
  }
  
  .span_warning{
		font-size:11px;
		color:#000;
 }
 
  .blink_me {
  animation: blinker 2s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0.5;
  }
}

.warning{
	padding-top:15px;
}
</style>


	<div class="container">
      <div class="wrapper">
        <div class="title"><span>Further steps required to complete password reset</span></div>
        <form name="form_master" id="form_master" method="post" action=""> 
          <div class="row">
			<div class="col-md-12">
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<div class="form_input">
					<i class="fas fa-user"></i>
					<input type="text" name="uname"  id="uname" placeholder="Re-enter username to reset password*" required>
				</div>
				
				<div class="form_input">
					<i class="fas fa-key"></i>
					<input type="text" name="mail" id="mail" placeholder="Enter the email associated with this account to reset**" required>
					<input type="hidden" name="forgot_password" value="forgot_password" id="forgot_password" >     
				</div>
				
				<div class="form_input button">
					<input class="login_btn" id="submit_btn" type="submit" value="Submit">
				</div>
				<div class="signup-link">
					<a class="" href="login.php" >Have Password...!</a>
				</div>
				</div>
			</div>
		  		  
		  <div class="col-md-12 warning">
			<p class="span_warning blink_me"><b>*</b> For customers the username is the customer ID found on your invoices, <a style="cursor:pointer" data-toggle="modal" data-target="#modal_example">see example here</a>. If you are a new dealer and have not been invoiced then please contact sales to get your customer ID.
			</p>
			
			<p class="span_warning blink_me"><b>**</b> If you call in to find out which email is associated with your account then please ask for the “Dealer Locator Sales Email”.</p>
		  </div>		   
		  </div>
        </form>
      </div>
    </div>


	<div class="modal fade" id="modal_example" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" style="display:inline-block">Example Invoice</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<img src="../../img/common/Baumalight-Invoice-Example.jpg" style="width:100%;"/>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
 $('#form_master').on('submit', function (e) {

e.preventDefault();

var uname=$('#uname').val();
var mail=$('#mail').val();

if(uname==""){
    toastr.warning('Enter User Name', '');
    $('#uname').focus();
}

else if(mail==""){
    toastr.warning('Enter Mail Id', '');
    $('#mail').focus();
}

else{

    $('#submit_btn').attr('disabled','disabled');
    
    swal('Please wait for few minutes');

$.ajax({
  type: 'post',
  url: 'update_password_mail.php',
  data: $('form').serialize(),
  dataType:'JSON',
  success: function (data) {

    $('#submit_btn').removeAttr('disabled');

      if(data.status=='success'){
        swal(data.msg);
        setTimeout(function() {
            window.location.href="login.php";
        }, 2500);
      }
      else{
        swal(data.msg);
        setTimeout(function() {
            window.location.reload();
        }, 2500);
      }
   
  }
});
}

});

  </script>
</body>
</html>
