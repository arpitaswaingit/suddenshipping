<!DOCTYPE html>
<html lang="en">
<?php 
   // include "include/header.php";
    include "essentials/database.php";
?>

<title>Reset Password for Your Account | Baumalight Password Reset</title>
  <link rel = "icon" href ="admin/images/acufore.png" type = "image/x-icon">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Reset your Baumalight account password effortlessly. Enter your username for a hassle-free password reset and regain access to your account.">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!-- new CDN -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<style>
/*new style starts*/
html,body{
background-image: url('images/bg-image.jpg');
background-repeat: no-repeat;
background-size: cover;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 85%;
align-content: left;
}

.card {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
height: auto;
margin-top: auto;
margin-bottom: auto;
width: 740px;
background-color: rgba(0,0,0,0.5) !important;
box-border: 500px!important;
border-radius: 5px;
}

.card-header h3{
color: white;
font-size: 30px;
text-decoration: underline solid #ecc712;
}

.input-group-prepend span{
width: 35px;
background-color: #ecc712;
color: black;
border:0 !important;
padding-left: 15px;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;
}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: #0a4276;
background-color: #ecc712;
width: 100px;
font-weight: bold;
border-color: #0a4276;
}

.login_btn:hover{
color: #ecc712;
background-color: #0c4274;
border-color: #ecc712;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

.font {
font-size: 14px;
}

.card-body {
    flex: 0 0 auto;
    margin-top: 20px;
}

.instruction {
color: wight;
font-size: 14px;

}

.forgot_pass {
  color: #ecc712!important;
}

.notice {
  padding-top: 15px;
  font-size: 12px;
  margin-left: 2%;
  color: white;
  animation: notice 2s linear infinite; /* Fix: Use 'notice' instead of 'blinker' */
}

.notice:hover {
  color: white;
  animation: notice 2s linear infinite; /* Fix: Use 'notice' instead of 'blinker' */
}

@keyframes notice {
  50% {
    opacity: 0.5;
  }
}


@media only screen and (max-width: 768px) {
 
  .card {
    width: 90%;
    margin: 20% auto;
  }

}
 
  @media only screen and (min-width: 769px) {
    .modal-header {
    border: none;
    }

    .modal-body img {
    width: 850px; 
    height: auto;
    }

    .modal-content {
    width: 700px; 
    height: auto;
    border-radius: 5px;
    }

    .modal {
    margin-left: -100px!important;
    margin-top: 75px!important;
    }
  }

/* link button style starts */
.link_btn {
  color: #0a4276!important;
  background-color: #ecc712;
  font-weight: bold;
  border: 1px solid#0a4276;
  border-radius: 4px;
  width: auto; 
  display: inline-block; 
  padding: 4px;
   cursor: pointer!important;
}

.link_btn:hover {
  color: #ecc712!important;
  background-color: #0c4274;
  border: 1px solid #ecc712;
}


@media only screen and (min-width: 250px) and (max-width: 600px) {
  /* Your styles for screens between 320px and 560px go here */
	.card {
	width: 90%;
	margin-top: 10%;
	}
	.notice {
	font-size: 10px!important;
	padding: 0px 0px 0px 0px!important; 
	}
	.link_btn {
	font-size: 15px!important;
	}
	h3 {
	font-size: 20px!important;
	}
}

@media only screen and (min-width: 600px) and (max-width: 1240px) {
	/* Your styles for screens between 600px and 768px go here */
	
	.card {
	margin-top: 5%;
	}
	.notice {
	font-size: 10px!important;
	padding: 0px!important; /* Adjust padding as needed */
	}
	.link_btn {
	font-size: 15px!important;
	}
	h3 {
	font-size: 25px!important;
	}
}

@media only screen and (min-width: 1400px) {
    html, body {
        background-image: url('images/bg-image.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
}




/* link button style ends */

</style>

<!-- header logo starts-->
  <nav class="navbar navbar-inverse" style="background-color:transparent;border-color:transparent; float: left; margin-top: 10px;">
    <div class="container-fluid bg_clr">
      <div class="navbar-header" >
        <a class="navbar-brand" href="https://baumalight.com/en/">
        <img src="images/Baumalight-yellow-logo.png" alt="Baumalight">
        </a>
      </div>
      
    </div>
  </nav>
<!-- header logo ends-->
</head>

<body>

<div class="container d-flex justify-content-center">
  <div class="d-flex justify-content-center h-100">
    <div class="card">

      <div class="card-header">
        <h3>Further steps required to complete password reset</h3> 
      </div>

    <div class="card-body"> 
       
        <form name="form_master" id="form_master" method="post" action=""> 

          <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control font" name="uname"  id="uname" placeholder="Re-enter username to reset password*" required>
          </div>

          <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="text" class="form-control font" name="mail" id="mail" placeholder="Enter the email associated with this account to reset**" required>
          <input type="hidden" class="form-control font" name="forgot_password" value="forgot_password" id="forgot_password" >     
          </div>

              <div class="form_input button d-flex justify-content-center" >
                <input class="btn float-right login_btn font" id="submit_btn" type="submit" value="Submit">
              </div>
        </form>
    </div>
            <div class="card-footer">
              <div class="signup-link d-flex justify-content-center">
                <a class="link_btn font" onclick="window.location.href = 'login.php'"  ><center>Found your password ?</center></a>
              </div>

            <br>
    
                <p class="notice" ><b>*</b> For customers the username is the customer ID found on your invoices, <a style="cursor:pointer; color: #007bff;" data-toggle="modal" data-target="#myModal1">see example here</a>. If you are a new dealer and have not been invoiced then please contact sales to get your customer ID.
                </p>

                <p class="notice"><b>**</b> If you call in to find out which email is associated with your account then please ask Baumalight Sales for the “Master Dealer Portal Email”.</p>
              
            </div>

        

      </div>
    </div>
  </div>
</div>


<!-- Modal popup Example Invoice start-->
<div class="modal " id="myModal1" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" style="display:inline-block">Example Invoice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <img src="../../img/common/baumalight-invoice-demo.jpg" style="width:100%;"/>
      </div> 

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal popup Example Invoice ends-->

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
