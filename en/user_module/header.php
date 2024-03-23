<!DOCTYPE html>
<?php 
include "../essentials/session.php";
include "../essentials/database.php";

if(!isset($_SESSION['user_id']))
{
    header('Location:../logout.php','_self');
}

else
{
    if(isset($_SESSION['user_type']))
    {
        if(((int)$_SESSION['user_type'])==0)
        {
            header('Location:../logout.php','_self');
        }
    } 
}


// $_SESSION['lper'] = "0|5|6|7|8|9|10";
$per = explode("|",$_SESSION['lper']);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Baumalight</title>

    
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="user_css/font-awesome.min.css">
    <link rel="stylesheet" href="user_css/themify-icons.css">
    <link rel="stylesheet" href="user_css/line-icons.css">
    <link rel="stylesheet" href="user_css/bootstrap.min.css">
    <link rel="stylesheet" href="user_css/animate.min.css">
    <link rel="stylesheet" href="user_css/owl.carousel.css">
    <link rel="stylesheet" href="user_css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="user_css/jquery.datepicker.min.css">
    <!-- calander -->
    <link rel="stylesheet" href="user_css/style.css">
    <link rel="stylesheet" href="user_css/color.css">
    <link rel="stylesheet" href="user_css/responsive.css">
    


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
 

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>

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

.side-menus nav>ul>li.dropdown>ul>li>a {
	font-family: "Open Sans", sans-serif;
	padding-left:15px;
}

</style>
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
									<a title="" href="user_dashboard.php">
									<img alt="" src="../images/baumalight_logo.png"></a>
									</div>
                                    <nav class="slide-menu">
                                       
                                        <ul class="parent-menu">
										
                                    <li><a href="user_dashboard.php" title=""><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
									
        <?php 
        for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==5)
            { ?>
                <li><a href="" title=""><i class="fa fa-map-marker"></i><span>Locator</span></a></li>


            <?php }
            if($per[$i]==6)
            { ?>
                 <li><a href="" title=""><i class="fa fa-truck"></i><span>Sudden Shipping</span></a></li>

            <?php }
            if($per[$i]==7)
            { ?>
                
                <li class="dropdown"> 
                    <a title=""><i class="fas fa-file-upload"></i><span>Support</span></a>

                    <ul class="dropdown-menu" style="margin-left:20px">
                        <li class="support-nav"><a href="../../../support/admin/accessory/index.php" style="font-size:13px;">ACCESSORY</a></li>
                        <li class="support-nav"><a href="../../../support/admin/video/view-video.php" style="font-size:13px;">ADD VIDEO</a></li>
                        <li class="support-nav"><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/roughneck/index.php" style="font-size:13px;">AUGERS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL CONNECTORS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/aux_features/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL CONNECTORS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
                        <li class="support-nav"><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/motor_options/index.php" style="font-size:13px;">HYDRAULIC MOTOR TYPES</a></li> 
                        <li class="support-nav"><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEER</a></li> 
                        <li class="support-nav"><a href="../../../support/admin/pto_shaft/index.php" style="font-size:13px;">PTO SHAFT</a></li>
                        <li class="support-nav"><a href="../../../support/admin/brushcutt/index.php" style="font-size:13px;">ROTARY BRUSH MOWERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/woodsplinter/index.php" style="font-size:13px;">SCREW SPLITTERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/skidpro/index.php" style="font-size:13px;">SKID PRO</a></li>
                        <li class="support-nav"><a href="../../../support/admin/stumpgrinders/index.php" style="font-size:13px;">STUMP GRINDERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/undertow/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS</a></li>  
                        <li class="support-nav"><a href="../../../support/admin/undertow_feature/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/dropsaw/index.php" style="font-size:13px;">TREE SAWS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/incisor/index.php" style="font-size:13px;">TREE SHEARS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/treespades/index.php" style="font-size:13px;">TREE SPADES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/trenchers/index.php" style="font-size:13px;">TRENCHERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/valve_info/index.php" style="font-size:13px;">VALVE INFO</a></li>
                        <li class="support-nav"><a href="../../../support/admin/serial_number/available_serial_numbers.php" style="font-size:13px;">AVAILABLE SERIAL NUMBERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/inc/create-account.php" style="font-size:13px;">CREATE ADMIN ACCOUNT</a></li>
                    </ul>

                </li>

            <?php }
            if($per[$i]==8)
            { ?>
                
                <li><a href="" title=""><i class="fa fa-th"></i><span>Free Catalogue</span></a></li>

            <?php }
            if($per[$i]==9)
            { ?>
                
                <li><a href="" title=""><i class="fa fa-dollar"></i><span>Online Price</span></a></li>

            <?php }
            if($per[$i]==10)
            { ?>
            
                <li><a href="" title=""><i class="fa fa-cog"></i><span>Motor Option Admin</span></a></li>

           <?php }
            if($per[$i]==11)
            { ?>
                
                <li><a href="" title=""><i class="fa fa-list"></i><span>Flow Pressure Admin</span></a></li>

            <?php }
           
		   if($per[$i]==12)
            { ?>
                <li><a href="../../../labor_time/admin/index.php" ><i class="fa fa-clock"></i><span>Labor Time Admin</span></a></li>
            <?php }
            if($per[$i]==13)
            { ?>
                <li ><a href="../../../mail-server/admin/index.php" ><i class="fa fa-envelope"></i><span>Support E-mail</span></a></li>
            <?php }
            if($per[$i]==14)
            { ?>
                <li ><a href="../../../teeth-options/admin/index.php" ><i class="fas fa-tools"></i><span>Teeth Option</span></a></li>
            <?php }
			
        }
      ?>

        <li><a href="../logout.php" title=""><i class="fa fa-sign-out"></i><span>Sign Out</span></a></li>


<!--
    //for dropdown or popup

    <li class="dropdown"> 
        <a title=""><i class="fa fa-laptop"></i><span>1st layouts</span></a>
        <ul class="dropdown-menu" style="margin-left:20px">
            <li><a href="">Boxed Layout</a></li>
            <li><a href="">Overlap Sliderbar</a></li>
        </ul>
    </li>
    -->
    <!--
        <li class="menu-item-has-children">
        <a title="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
            <ul style="mega">
                <li><a href="" title="">Dashboard 1</a></li>
                <li><a href="" title="">Dashboard 2</a></li>
            </ul>
        </li>
        
        -->
											

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
                                        <div class="logo"><a href="user_dashboard.php" title="">
										<img src="../images/baumalight_logo.png" alt=""></a></div>
                                    </div>
                                    <div class="col-lg-8">
                                        <ul class="notify-area">
										<li></li>
										<li class="messages nav-icon3 open_nav">
											<a href="#" title="" onclick="openNav()" style="text-transform: capitalize;"><i class="fa fa-close"></i> &nbsp;Menu
											</a>
										</li>
										
										<li class="messages nav-icon3 close_nav" style="display:none">
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
									
									 <div class="col-lg-1" style="text-align:center">
										<li class="messages" style="color:#fff;text-decoration:none;list-style-type:none">
											<a href="#" title="" style="text-transform: capitalize;"><i class="fa fa-user"></i> 
											&nbsp;<?php echo isset($_SESSION['uname'])?$_SESSION['uname']:'';?>
											</a>
										</li>
									</div>
									
                                    <div class="col-lg-1" style="text-align:center;">
                                    <li class="messages" style="color:#fff;text-decoration:none;list-style-type:none">
											<a href="../logout.php" title="" style="text-transform: capitalize;"><i class="fa fa-sign-out"></i> &nbsp;Sign Out
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
                                       <li class="messages nav-icon3 open_nav" style="display:none">
											<a href="#" title="" onclick="openNav()" style="text-transform: capitalize;"><i class="fa fa-close"></i> &nbsp;Menu
											</a>
										</li>
										
										<li class="messages nav-icon3 close_nav" >
											<a href="#" title="" onclick="closeNav()" style="text-transform: capitalize;"><i class="fa fa-bars"></i> &nbsp;Menu
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
							</script>