<?php
include "../../inc/init.php";
include "essentials/header_individual.php";
if(!isset($_SESSION['user_id']))
{
    header('Location:login.php','_self');
}
else
{
    if(($_SESSION['user']['user_name'])=="mennobauman")
    {      
    }     
    else
    {    
        // header('Location:user_dashboard.php','_self');    
        echo "<script>window.location.href ='user_dashboard.php';</script>";      
    } 
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	
	$action=trim($_POST['create']);
	if($action=='Create'){
		$username=trim($_POST['username']);
		$email=trim($_POST['email']);
		$password=trim($_POST['password']);
		$permission=1;
		
		$has_pass = hash("sha256", $password);
		
		$confirm_password=trim($_POST['confirm_password']);
		
		if($password==$confirm_password){
			
			$select=mysqli_query($conn,"select * from users2login where user_name='$username'");
			$num_rows=mysqli_num_rows($select);
			if($num_rows>0){
				echo "<script type='text/javascript'>swal('Username Already Exists');</script>";
			}
			else{
			$insert="insert into users2login(user_name,user_email,user_pass,permission)value('$username','$email','$has_pass','$permission')";
			$res=mysqli_query($conn,$insert);
			if($res){
				//$_SESSION['status']="New Account Created Successfully";
				echo "<script type='text/javascript'>swal('New Account Created Successfully');</script>";
				echo "<script>setTimeout(function(){ 
						window.location.href='adminpermission.php' }, 2000);</script>";
			}
			else{
				echo "<script type='text/javascript'>swal('New Account Not Created');</script>";
			}
			}
		}
		else{
			echo "<script type='text/javascript'>swal('Passwords do not match');</script>";
		}
		
	}
	
	
}

?>

 <style>
    .shadow{
        box-shadow: 5px 5px 5px 5px lightgray;
    }
	.form_row label{
		font-weight:bold;
		color:#000;
	}
	table td {
		padding:0px;
	}
	
	table tr th:first-child, table tr td:first-child {
		padding-left:0px;
	}
	
form bi{
    cursor: pointer;
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
		 <div class="panel-body" style="margin-bottom:30px;">
			<div class="col-md-12 single_element" style="padding:30px;">
				<!-- top subbar -->
			
	
	<div class="row" >
				
	<div class="col-md-12">
    <h2 class="h2_heading" style="padding-left:10px;margin-bottom:10px;">Add New User</h2>   
   <form class="submit-form"  method="post" action="" enctype="multipart/form-data">
            
        <div class="col-md-8 shadow form_row" style="padding:10px;">
		<div class="col-md-12">
            <div class="form-group form-group-sm row">
                <label for="inputName" class="control-label col-md-4">Username</label>
                <div class="col-md-8">
                   <input class="form-control input-sm" type="text" name="username" onkeypress="return alpha(event)" required id="username" 
                              value="">
                </div>
            </div>
        </div>
		
	
		
		<div class="col-md-12">
            <div class="form-group form-group-sm row">
                <label for="inputName" class="control-label col-sm-4">Email Id</label>
                <div class="col-sm-8">
				   <input class="form-control input-sm" type="email" name="email" required id="email" value="" >
                </div>
            </div>
        </div>
		
		<div class="col-md-12">
            <div class="form-group form-group-sm row">
                <label for="inputName" class="control-label  col-md-4">Password</label>
                <div class="col-md-8">
				   <input class="form-control input-sm" type="password" required name="password" id="password" 
                              value="" maxlength="15">
                </div>
            </div>
        </div>
		
		<div class="col-md-12">
            <div class="form-group form-group-sm row">
                <label for="inputName" class="control-label  col-md-4">Confirm Password</label>
                <div class="col-md-8">
				   <input class="form-control input-sm" type="password" required readonly name="confirm_password" id="confirm_password" 
                              value="" maxlength="15" >
                </div>
            </div>
        </div>
		
            <div class="col-md-12" >
                <div class="form-group">
                <input type="hidden" name="slno" id="slno" value="" class="form-control"/>
                    <input type="submit" name="create" id="create" value="Create" class="btn btn-success submit_btn"/>
                    <a href="adminpermission.php" style='color:#333;text-decoration:none;'>
					<input type="button" class="btn btn-danger"name="Back" value="Back"></a>
					
                </div>
            </div>
        </div>
    </form>
	</div>
				
				</div>

						
			</div>
 
		</div> <!-- panel-body end -->
			


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

       
    </script>
	
	
<script>
$("#password").keyup(function(){
	var password=$('#password').val();
	if(password.length>0){
		$('#confirm_password').removeAttr('readonly');
	}else{
		$("#confirm_password").attr('readonly','readonly');
	}
})

	$("#confirm_password").change(function () {
            var password = $("#password").val();
            var confirmPassword = $("#confirm_password").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
				$('input[type="submit"]').attr('disabled','disabled');
                return false;
            }
			$('input[type="submit"]').removeAttr('disabled');
            return true;
			
        });

function alpha(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}

</script>
<?php 
  include "essentials/footer.php";
?>

