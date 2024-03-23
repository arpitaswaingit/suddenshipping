<?php 
include "essentials/database.php";

if(!isset($_SESSION)){
	session_start();
}
else{
	//session_start();
}

if(!isset($_SESSION['user_id']))
{
    header('Location:logout.php','_self');
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Baumalight</title>
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="css/jquery.datepicker.min.css">
    <!-- calander -->
    <link rel="stylesheet" href="css/style_admin.css?2">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
 

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
.side-menus nav>ul>li>a {
	font-size:16px;
}

.side-menus nav>ul>li>a>i {
	font-size:17px;
}

.notify-area>li>a {
	font-size:17px;
}

.logo-area{
	padding-top:10px;
	padding-bottom:20px;
	padding-right:10px;
	padding-left:10px;
}
.logo{
	margin-top:6px;
}

.heading_style{
	text-shadow: 3px 2px lightgrey;color:#0b497b;
	font-size:24px;
	}
	
.fafa_arrow_style{
	font-size:30px;
	color:#31B0D5	
}
.div_margin{
	margin-bottom:10px;
}

@media only screen and (min-width: 766px) and (max-width: 1366px) {
	table td, table td input,table td textarea,table td p{
		font-size:13px!important;
	}
	table td a,table td .btn-link{
		font-size:small!important;
	}
	table th{
		font-size:14px;
	}
	
	.card h5{
		font-size:14px!important;
	}
	
	.heading_style{
		font-size:22px;
	}
	
	.h2_heading{
		font-size:20px;
	}
	.fafa_arrow_style{
		font-size:20px;
	}

}
table.dataTable thead th, table.dataTable thead td {
    padding: 5px 12px!important;
}
table.dataTable tbody th, table.dataTable tbody td {
    padding: 5px 3px!important;
}
.table>tbody>tr>td{
	padding:5px!important;
}
</style>
</head>

<body>
   
	
    <div class="panel-layout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-page">
                        <header>
                            <div class="side-menus">
                                <div class="side-header">
                                    <div class="logo">
									<a title="" href="welcomelogin.php">
									<img alt="" src="images/baumalight_logo.png"></a>
									</div>
                                    <nav class="slide-menu">
                                       
                                        <ul class="parent-menu">
										<!--
                                            <li class="menu-item-has-children">
											<a title="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                                <ul style="mega">
                                                    <li><a href="" title="">Dashboard 1</a></li>
                                                    <li><a href="" title="">Dashboard 2</a></li>
                                                </ul>
                                            </li>
											
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>layouts</span></a>
                                                <ul class="mega">
                                                    <li><a href="" title="">boxed layout</a></li>
                                                    <li><a href="">overlap sliderbar</a></li>
                                                </ul>
                                            </li>
											-->
											<li><a href="welcomelogin.php" title=""><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
											
                                            <li><a href="my_profile.php" title=""><i class="fa fa-user"></i><span>My Profile</span></a></li>
											
                                            <li><a href="change_password.php" title=""><i class="fa fa-key"></i><span>Update Password</span></a></li>
											
                                            <li><a href="logout.php" title=""><i class="fa fa-sign-out"></i><span>Sign Out</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </header>
                        <!-- side header -->
                        <div class="topbar">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-2" style="margin-top:3px;">
                                        <div class="logo"><a href="welcomelogin.php" title="">
										<img src="images/baumalight_logo.png" alt=""></a></div>
                                    </div>
                                    <div class="col-lg-7">
                                        <ul class="notify-area">
										
										<li class="messages nav-icon3 open_nav" style="margin-top:16px">
											<a href="#" title="" onclick="openNav()" style="text-transform: capitalize;"><i class="fa fa-close"></i> &nbsp;Menu
											</a>
										</li>
										
										<li class="messages nav-icon3 close_nav" style="display:none;margin-top:16px">
											<a href="#" title="" onclick="closeNav()" style="text-transform: capitalize;"><i class="fa fa-bars"></i> &nbsp;Menu
											</a>
										</li>
										
										<!--
										<a href="index.php" class="messages" style="color:#fff"><i class="fa fa-home"></i> Home
											</a>
                                            -->
										
											<!--
                                            <li>
                                                <div class="nav-icon3"> 
                                                    <a><i class="fa fa-bars" style="font-size:22px"></i></a>
                                                </div>
                                                
                                            </li>
                                           -->
                                            
                                        </ul>
                                        
                                        
                                    </div>
									
									
                                    <div class="col-lg-2">

										<li class="messages" style="color:#fff;text-decoration:none;list-style-type:none;float:right;margin-right:15px">
											<i class="fa fa-user"></i> &nbsp;<?php echo $_SESSION['uname']?>
										</li>
										</div>
										 <div class="col-lg-1">
                                    <li class="messages" style="color:#fff;text-decoration:none;list-style-type:none">
											<a href="logout.php" title="" style="text-transform: capitalize;"><i class="fa fa-sign-out"></i> &nbsp;Sign Out
											</a>
										</li>


                                        <!--
                                        <div class="user-head">
                                            <div class="admin">
                                                <div class="admin-avatar">
													<img src="images/user.png" alt="" style="width:50px;height:50px;border-radius:50%"> <i class="online"></i> 
												</div>
                                            </div>
                                            <div class="drop setting"> <span class="drop-head">Sushma</span>
                                               
                                                <span class="drop-bottom"><a href="#" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
                                        </div>
                                        -->

                                    </div>
                                </div>
                            </div>
                        </div>
						
                        <div class="main-content">
                            <div class="responsive-header">
                                <div class="logo-area">
                                    <ul class="notify-area">
                                       <li class="messages nav-icon3 open_nav" >
											<a href="#" title="" onclick="openNav()" style="text-transform: capitalize;"><i class="fa fa-bars"></i> &nbsp;Menu
											</a>
										</li>
										
										<li class="messages nav-icon3 close_nav" style="display:none">
											<a href="#" title="" onclick="closeNav()" style="text-transform: capitalize;"><i class="fa fa-close"></i> &nbsp;Menu
											</a>
										</li>
										
										<!--
										<a href="index.php" class="messages" style="color:#fff"><i class="fa fa-home"></i> Home
											</a>
                                            -->
                                    </ul>
                                </div>
								
                                
                            </div>
							
							
							<script>
							
							function openNav() {
							  $('.close_nav').show();
							  $('.open_nav').hide();
							  //document.getElementById("open_nav").style.visibility = "hidden";						  
							}

							function closeNav() {
							
							  $('.close_nav').hide();
							  $('.open_nav').show();
							  //document.getElementById("open_nav").style.visibility = "visible";
							  
							}
							
							
							window.onload = function() {

							  //to hide sidebar
							  /*
							  $('.close_nav').show();  //to show close icon
							  $('.open_nav').hide();  //to hide bars icon
							  
							  $('.menu-options').toggleClass('active');
							  $('.side-header').toggleClass('slide-out');
							  $('a.closed').removeClass('slide-out');
							  $('.main-content').toggleClass('menu-slide');
							  */
							  
							}
							
							
							
							</script>