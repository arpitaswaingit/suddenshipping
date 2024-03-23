<?php 
include "header.php";
if(($_SESSION['user']['user_name'])=="mennobauman"){
	echo "<script>window.location.href='change_password.php'</script>";  	
}     
else{		
}
?>
<style>
.box {
 margin-top:5px;
}
.row_border{
	padding:10px;
	font-size:20px;
	box-shadow: 2px 5px 5px 5px lightgrey;
	background-color: #fff;
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
  height: 50px;
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

</style>

                            <!-- responsive header -->
						
                            <div class="panel-body" style="margin-bottom:30px;">
                           

                            <div class="row" style="margin:0px">
                            <div class="col-md-3"></div>
                            <div class="col-md-5 single_element" style="padding:30px;">
                                <div class="wrapper">
                                    <div class="title"><span>Change Password</span></div>
                                    <form name="form_master" id="form_master" method="post" action="#"> 
                                    <div class="row">
                                        <i class="fas fa-key"></i>
                                        <input type="password" required name="old_pass"  id="old_pass" placeholder="Enter Old Password" required maxlength="15">
                                    </div>
                                    <div class="row">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" required name="new_pass" id="new_pass" placeholder="Enter New Password" required maxlength="15">
                                    </div>
                                    
                                    <div class="row button">
                                      <input  type="hidden" name="change_password" value="change_password"/>
                                        <input class="login_btn" type="submit" value="Submit">
                                    </div>

                                    </form>
                                </div>
                            </div>

                            </div>

                            </div> <!-- panel-body end -->
								
<?php 
  include "footer.php";
?>
		

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
 $('#form_master').on('submit', function (e) {

e.preventDefault();

var old_pass=$('#old_pass').val();
var new_pass=$('#new_pass').val();

if(old_pass==""){
    toastr.warning('Enter Old Password', '');
    $('#old_pass').focus();
}

else if(new_pass==""){
    toastr.warning('Enter New Password', '');
    $('#new_pass').focus();
}

else{
    $.ajax({
  type: 'post',
  url: 'user_update_password.php',
  data: $('form').serialize(),
  dataType:'JSON',
  success: function (data) {
   
      if(data.status=='success'){
        swal(data.msg);
        setTimeout(function() {
            window.location.reload();
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
   
</html>