<?php 
//error_reporting(0);
include_once '../../inc/init.php';
if(!isset($_SESSION)){
	session_start();
}
else{
	//session_start();
}
if(!isset($_SESSION['user_id']))
{
    header('Location:../../../login/en/logout.php','_self');
}

if(isset($_SESSION['lper'])){
$per = explode("|",$_SESSION['lper']);
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
    <link rel="stylesheet" href="../../../login/en/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../login/en/css/themify-icons.css">
    <link rel="stylesheet" href="../../../login/en/css/line-icons.css">
	<!--
    <link rel="stylesheet" href="../../../login/en/css/bootstrap.min.css">
	-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
    <link rel="stylesheet" href="../../../login/en/css/animate.min.css">
    <link rel="stylesheet" href="../../../login/en/css/owl.carousel.css">
    <link rel="stylesheet" href="../../../login/en/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="../../../login/en/css/jquery.datepicker.min.css">
	
    <!-- calander -->
	
    <link rel="stylesheet" href="../../../login/en/css/style.css?5">
    <link rel="stylesheet" href="../../../login/en/css/color.css">
    <link rel="stylesheet" href="../../../login/en/css/responsive.css">
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
	/*style for support folder add and edit files chckboxes*/
		.checkbox-inline{
			margin-left:10px;
		}
		.checkbox-inline{
			padding-right:10px;
			padding-left:10px;
		}

	/*style for support folder back button */
	.backbutton {
	    height: 25px;
	    font-size: 12px !important;
	    background-color: #b2b7ad;
	    border-color: #b2b7ad;
	    padding: 3px 5px;
	    margin-top: 5px;
	    font-weight: bold;
	    font-style: italic;
		font-size:25px;
		float:right;
		text-transform: uppercase;
	}


		/*style for flowpressure folder files */
		.padding_style_flow{
			padding-left:0px;
			padding-right:0px;
		}

		#search_form .form-group{
			margin-bottom:5px!important;
		}
		.container .pagination{
			margin:0px!important;
			padding-bottom:3px;
		}
.panel-body{
	margin-bottom:5px!important;
}

.padding_top_5{
	padding-top:5px!important;
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


@media only screen and (min-width: 300px) and (max-width: 380px) {
	table td, table td input,table td textarea,table td p{
		font-size:12px!important;
	}
	table td a,table td .btn-link{
		font-size:small!important;
	}
	table th{
		font-size:12px;
	}
	
	.card h5{
		font-size:10px!important;
	}
	
	.heading_style{
		font-size:14px;
	}
	
	.h2_heading{
		font-size:14px;
		margin-top:3px!important;
	}
	.fafa_arrow_style{
		font-size:14px;
	}

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
		margin-top:0px!important;
	}
	.fafa_arrow_style{
		font-size:20px;
	}

}

@media only screen and (min-width: 1370px) and (max-width: 4500px) {
	table td, table td input,table td textarea,table td p{
		font-size:14px!important;
	}
	table td a,table td .btn-link{
		font-size:medium!important;
	}
	table th{
		font-size:14px;
	}
	
	.card h5{
		font-size:14px!important;
	}
	
	.heading_style{
		font-size:23px;
		
	}
	
	.h2_heading{
		font-size:22px;
		margin-top:3px!important;
	}
	.fafa_arrow_style{
		font-size:22px;
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

@media only screen and (min-width: 960px) and (max-width: 3099px) {
   .tab_items{
	position:sticky;
	top:55px;
	z-index:1000;
	background-color:#fff;
	width:100%;
}
.table{
	margin-bottom:0px;
}
.tab_items tr td{
	padding:0px!important;
}
}


.dataTables_filter {
   //float: left !important;
   margin-top:-30px;
}
.panel-body .single_element{
	padding-top:0px!important;
	margin-top:8px;
	padding-bottom:5px!important;
}
.mt-2{
	margin-top:10px!important;
}

.card{
	box-shadow: 0px 4px 4px 2px rgba(0, 0, 0, 0.50)!important;
}
.side-menus nav>ul>li>a {
	font-size:16px;
}

.side-menus nav>ul>li>a>i {
	font-size:17px;
}

.notify-area>li>a {
	font-size:17px;
}
.table th{
	font-weight:bold;
	color:#000;
}
.bold{
	color:black;
	font-weight:bold;
}
</style>

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
.shadow{
        box-shadow: 2px 5px 5px 5px lightgray!important;
    }
	
.table_area{
	box-shadow: 2px 5px 5px 5px lightgrey;
}
.tfont .sfont{
	font-size:11px;
	color:rgba(0,0,0,0.4);
}
.tfont th{
	color:#000;
}
tbody{
	text-align:left;
}
table tr th:first-child, table tr td:first-child {
    padding-left:5px!important;
}
.table th{
	font-weight:bold;
	color:#000;
}
.table tbody input, .table textarea{
	/*background-color:transparent!important;*/
	border:1px solid lightgray;
}
table tbody tr td:last-child {
	padding-right:10px;
}

.dropdown-menu{
	width: -webkit-fill-available;
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

.dropdown-menu li a{
	font-family: Open Sans!important;
}


/*customise scrollbar */

/* width */
::-webkit-scrollbar {
  width: 10px!important;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
  width: 30px!important;
}


.dropdown-menu{
	position:absolute;
	right:-20px;
}

table td{
	vertical-align: top!important;
}

a,
a .btn {
    cursor: pointer!important;
}
.checkbox-inline{
	font-size:14px!important;
}

h2{
	font-size:21px!important;
	//margin-top:0px!important;
}
.p_bottom{
	padding-bottom:10px;
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
                            <div class="side-menus" >
                                <div class="side-header" >
                                    <div class="logo">
									<a title="" href="welcomelogin.php">
									<img alt="" src="../../../img/baumalight_logo.png"></a>
									</div>
                                    <nav class="slide-menu" >
                                       
									   <?php 
									   if(($_SESSION['user']['user_name'])=="mennobauman"){
									   
									   ?>
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
				
				<!--
				<li class="nav-item drop_m">
					<a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#"><i class="fa fa-tachometer"></i><span>Submenu links </span> </a>
					<ul id="menu_item1" class="submenu collapse drop_m1" data-bs-parent="#nav_accordion">
						<li><a class="nav-link" class="nav-link" href="#">Submenu item 1 </a></li>
						<li><a class="nav-link" class="nav-link" href="#">Submenu item 2 </a></li>
						<li><a class="nav-link" class="nav-link" href="#">Submenu item 3 </a> </li>
						
						<li><a class="nav-link" class="nav-link" href="../../../labor_time/admin/augers/" style="font-size:13px;text-transform: uppercase;">AUGERS</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/skid_wing/" style="font-size:13px;text-transform:uppercase">Boom Mower – Skidsteer</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/mulchers/" style="font-size:13px;text-transform:uppercase">Brush Mulchers</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/feller_buncher/" style="font-size:13px;text-transform:uppercase">Feller  Buncher</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/generators/" style="font-size:13px;text-transform:uppercase">Generators</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/mini_skidsteer/" style="font-size:13px;text-transform:uppercase">Mini Skidsteers</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/brushcutt/" style="font-size:13px;text-transform:uppercase">Rotary Brush Cutter</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/woodsplinter/" style="font-size:13px;text-transform:uppercase">Screw Splitters</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/stump_grinders/" style="font-size:13px;text-transform:uppercase">Stump Grinders</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/undertow/" style="font-size:13px;text-transform:uppercase">Tile Drainage Plows</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/dropsaw/" style="font-size:13px;text-transform:uppercase">Tree Saws</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/incisor/" style="font-size:13px;text-transform:uppercase">Tree Shears</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/treespades/" style="font-size:13px;text-transform:uppercase">Tree Spades</a></li>
						<li><a class="nav-link" href="../../../labor_time/admin/trenchers/" style="font-size:13px;text-transform:uppercase">Trenchers</a></li>
									
					</ul>

				</li>
	
	
	-->
		
			
  
				<li><a href="../../../login/en/welcomelogin.php" title=""><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
				<li><a href="../../../login/en/my_profile.php" title=""><i class="fa fa-user"></i><span>My Profile</span></a></li>
				<li><a href="../../../login/en/change_password.php" title=""><i class="fa fa-key"></i><span>Update Password</span></a></li>	
				
				<li><a href="../../../en/contact/admin/addresslist.php" title=""><i class="fa fa-phone"></i><span>Corporate Contact</span></a></li>
				
				<li><a href="../../../admin/" title=""><i class="fa fa-map-marker"></i><span>Dealer Admin</span></a></li>
				
				<!--
				<li class="dropdown">
					<a href="../../../en/contact/admin" title=""><i class="fa fa-phone"></i><span>Contact</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						 
						 <li ><a href="../../../en/contact/admin/addresslist.php" style="font-size:13px;">ADDRESS</a></li>
						 <li><a href="../../../en/contact/admin/region_list.php" style="font-size:13px;">REGION</a></li>
					
					</ul> 
				</li>
				-->
				
				<li class="dropdown"><a href="" title=""><i class="fa fa-list"></i><span>Flow Pressure Admin</span></a>
				
				<ul class="dropdown-menu" style="margin-left:20px">
						 
					 <li><a href="../../../flow-pressure/admin/backhoes/" style="font-size:13px;">
					 BACKHOES</a></li>
					 
					 <li><a href="../../../flow-pressure/admin/excavator/" style="font-size:13px;">
					 EXCAVATORS</a></li>
					 
					 <li><a href="../../../flow-pressure/admin/mini_skidsteer/" style="font-size:13px;">
					 MINI SKIDSTEER</a></li>
					 
					 <li><a href="../../../flow-pressure/admin/skidsteer/" style="font-size:13px;">
					 SKIDSTEER</a></li>
					 
					 <li><a href="../../../flow-pressure/admin/wheel_loader/" style="font-size:13px;">
					 WHEEL LOADER</a></li>
					 
					</ul> 
				</li>

				<li class="dropdown">
					<a href="../../../free_catalogue/admin/" title=""><i class="fa fa-th"></i><span>Free Catalog</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						 
					 <li ><a href="../../../free_catalogue/admin/free_catalog_enquiry.php" style="font-size:13px;">FREE CATALOG ENQUIERY</a></li>
					 <li><a href="../../../free_catalogue/admin/change_emailid.php" style="font-size:13px;">CHANGE EMAIL ID</a></li>
					
					</ul> 
				</li>
				
				
				<li class="dropdown">
					<a href="../../../labor_time/admin/index.php" title=""><i class="fas fa-clock-o"></i><span>Labor Time Admin</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						<li><a href="../../../labor_time/admin/augers/" style="font-size:13px;text-transform: uppercase;">AUGERS</a></li>
						<li><a href="../../../labor_time/admin/skid_wing/" style="font-size:13px;text-transform:uppercase">Boom Mower – Skidsteer</a></li>
						<li ><a href="../../../labor_time/admin/brushfox/" style="font-size:13px;text-transform:uppercase">Brush Fox</a></li>
						<li><a href="../../../labor_time/admin/mulchers/" style="font-size:13px;text-transform:uppercase">Brush Mulchers</a></li>
						<li><a href="../../../labor_time/admin/feller_buncher/" style="font-size:13px;text-transform:uppercase">Feller  Buncher</a></li>
						<li><a href="../../../labor_time/admin/flail_mowers/" style="font-size:13px;text-transform:uppercase">Flail Mowers</a></li>
						<li><a href="../../../labor_time/admin/generators/" style="font-size:13px;text-transform:uppercase">Generators</a></li>
						<li><a href="../../../labor_time/admin/hydraulic_power_pack/" style="font-size:13px;text-transform:uppercase">Hydraulic Power Pack</a></li>
						<li><a href="../../../labor_time/admin/manitou/" style="font-size:13px;text-transform:uppercase">Manitou</a></li>
						<li ><a href="../../../labor_time/admin/mini_skidsteer/" style="font-size:13px;text-transform:uppercase">Mini Skidsteers</a></li>
						<li ><a href="../../../labor_time/admin/brushcutt/" style="font-size:13px;text-transform:uppercase">Rotary Brush Cutter</a></li>
						<li ><a href="../../../labor_time/admin/woodsplinter/" style="font-size:13px;text-transform:uppercase">Screw Splitters</a></li>
						<li ><a href="../../../labor_time/admin/stump_grinders/" style="font-size:13px;text-transform:uppercase">Stump Grinders</a></li>
						<li ><a href="../../../labor_time/admin/undertow/" style="font-size:13px;text-transform:uppercase">Tile Drainage Plows</a></li>
						<li ><a href="../../../labor_time/admin/dropsaw/" style="font-size:13px;text-transform:uppercase">Tree Saws</a></li>
						<li ><a href="../../../labor_time/admin/incisor/" style="font-size:13px;text-transform:uppercase">Tree Shears</a></li>
						<li ><a href="../../../labor_time/admin/treespades/" style="font-size:13px;text-transform:uppercase">Tree Spades</a></li>
						<li ><a href="../../../labor_time/admin/trenchers/" style="font-size:13px;text-transform:uppercase">Trenchers</a></li>
					</ul> 
				</li>

                <li class="dropdown">
				<a href="../../../tools-dashboard/admin/" title=""><i class="fa fa-cogs"></i><span>Mini Skidsteer Tool Searches</span></a>
			
					<ul class="dropdown-menu" style="margin-left:20px">
					<li ><a href="../../../tools-dashboard/admin/all_keyword.php" style="font-size:13px;text-transform:uppercase">All Keywords</a></li>
					<!--	
					<li ><a href="../../../tools-dashboard/admin/country_wise_keyword.php" style="font-size:13px;text-transform:uppercase">Country wise Keywords</a></li>-->

					<li><a href="../../../tools-dashboard/admin/high_ranked_keyword.php" style="font-size:13px;text-transform:uppercase">High Ranked Keywords</a></li>
					
					<li><a href="../../../tools-dashboard/admin/ip_wise_keyword.php" style="font-size:13px;text-transform:uppercase">IP wise Keywords</a></li>
					<li><a href="../../../tools-dashboard/admin/location_wise_keyword.php" style="font-size:13px;text-transform:uppercase">
					Location wise Keywords</a></li>
					<li><a href="../../../tools-dashboard/admin/new_keyword.php" style="font-size:13px;text-transform:uppercase">New Keywords</a></li>

					</ul>

			</li>
                
				<li class="dropdown">
					<a href="../../../motor-option-calculator/admin/" title=""><i class="fa fa-cog"></i><span>Motor Option Admin</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						 <li ><a href="../../../motor-option-calculator/admin/mulchers/" style="font-size:13px;">PRODUCT MODELS</a></li>
						 <li><a href="../../../motor-option-calculator/admin/brush_sizes/" style="font-size:13px;">BRUSH SIZES</a></li>
					
					</ul> 
				</li>
		<li><a onclick="online_order('<?php echo $_SESSION['E_EID']?>','<?php echo $_SESSION['user_id']?>')"><i class="fa fa-shopping-cart"></i><span>Online Order</span></a></li>
		
	            <li><a href="../../../product_registration/admin/" title=""><i class="fas fa-file-alt"></i><span>Online Product Registration</span></a></li>
	            
				<li><a href="../../../online-price/" title=""><i class="fa fa-dollar"></i><span>Price Administration</span></a></li>
				
				<li class="dropdown">
				<a href="../../../suddenshipping/admin/" title=""><i class="fa fa-truck"></i><span>Sudden Shipping</span></a>
				<ul class="dropdown-menu" style="margin-left:20px">
					<li><a href="../../../suddenshipping/admin/augerdrives/leadtime-av.php">AUGERS</a></li>
					<li><a href="../../../suddenshipping/admin/skidwing/leadtime-av.php">BOOM MOWERS – SKIDSTEER</a></li>
					<li><a href="../../../suddenshipping/admin/packwing/leadtime-av.php">BOOM MOWERS – TRACTOR</a></li>
					<li><a href="../../../suddenshipping/admin/mulchercutters/leadtime-av.php">BRUSH MULCHERS</a></li>
					<li><a href="../../../suddenshipping/admin/excavator-adaptor/master_list.php">EXCAVATOR MOUNTING</a></li>
					<li><a href="../../../suddenshipping/admin/factorydiscounts/specialdiscounts-av.php">FACTORY DISCOUNTS</a></li>
					<li><a href="../../../suddenshipping/admin/feller-buncher/leadtime-av.php">FELLER BUNCHER</a></li>
					<li><a href="../../../suddenshipping/admin/flail-mowers/leadtime-av.php">FLAIL MOWERS</a></li>
					<li><a href="../../../suddenshipping/admin/generators/leadtime-av.php">GENERATORS</a></li>
					<li><a href="../../../suddenshipping/admin/hydraulic-power-pack/leadtime-av.php">PTO HYDRAULIC POWER PACK</a></li>
					<li><a href="../../../suddenshipping/admin/holt/index.php">HOLT</a></li>
					<li><a href="../../../suddenshipping/admin/miniskidsteer/leadtime-av.php">MINI SKIDSTEERS</a></li>
					<li><a href="../../../suddenshipping/admin/oem/leadtime-av.php">OEM</a></li>
					<li><a href="../../../suddenshipping/admin/public_holidays/leadtime-av.php">PUBLIC HOLIDAYS</a></li>
					<li><a href="../../../suddenshipping/admin/brushcutt/leadtime-av.php">ROTARY BRUSH MOWERS</a></li>
					<li><a href="../../../suddenshipping/admin/woodsplinter/leadtime-av.php">SCREW SPLITTERS</a></li>
					<li><a href="../../../suddenshipping/admin/shop-days/leadtime-shopdays.php">SHOP DAYS</a></li>
					<li><a href="../../../suddenshipping/admin/stumpgrinders/leadtime-av.php">STUMP GRINDERS</a></li>
					<li><a href="../../../suddenshipping/admin/undertow/leadtime-av.php">TILE DRAINAGE PLOWS</a></li>
					<li><a href="../../../suddenshipping/admin/dropsaw/leadtime-av.php">TREE SAWS</a></li>
					<li><a href="../../../suddenshipping/admin/incisorshear/leadtime-av.php">TREE SHEARS</a></li>
					<li><a href="../../../suddenshipping/admin/treespades/leadtime-av.php">TREE SPADES</a></li>
					<li><a href="../../../suddenshipping/admin/trenchaxe/leadtime-av.php">TRENCHERS</a></li>
				</ul> 
				</li>
				
				<li class="dropdown"> 
                    <a title=""><i class="fas fa-file-upload"></i><span>Support Document</span></a>
					<?php
					$permission ='';
					
					$permission = $_SESSION['user']['permission'];
						
					?>
                    <ul class="dropdown-menu" style="margin-left:20px">
					<?php 
					if ($_SESSION['user']['user_name'] == 'mennobauman') {
					?>
                        <li class="support-nav"><a href="../../../support/admin/accessory/index.php" style="font-size:13px;">ACCESSORY</a></li>
                        <li class="support-nav"><a href="../../../support/admin/video/view-video.php" style="font-size:13px;">ADD VIDEO</a></li>
                        <li class="support-nav"><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/roughneck/index.php" style="font-size:13px;">AUGERS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/aux_features/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
                        <li class="support-nav"><a href="../../../support/admin/brushfox/admin-index.php" style="font-size:13px;">BRUSH FOX</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
						<li class="support-nav"><a href="../../../support/admin/case_drain_protection/index.php" style="font-size:13px;">CASE DRAIN PROTECTION</a></li>
                        <li class="support-nav"><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
                        <li class="support-nav"><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/flail_mowers/admin-index.php" style="font-size:13px;">FLAIL MOWERS</a></li>
                        
                        <li class="support-nav"><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
                        <li class="support-nav"><a href="../../../support/admin/motor_options/index.php" style="font-size:13px;">HYDRAULIC MOTOR TYPES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/manitou/index.php" style="font-size:13px;">MANITOU</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
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
					<?php } else if($permission==1){?>
					
					<li class="support-nav"><a href="../../../support/admin/accessory/index.php" style="font-size:13px;">ACCESSORY</a></li>
                        <li class="support-nav"><a href="../../../support/admin/video/view-video.php" style="font-size:13px;">ADD VIDEO</a></li>
                        <li class="support-nav"><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/roughneck/index.php" style="font-size:13px;">AUGERS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/aux_features/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
                        <li class="support-nav"><a href="../../../support/admin/brushfox/admin-index.php" style="font-size:13px;">BRUSH FOX</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
						<li class="support-nav"><a href="../../../support/admin/case_drain_protection/index.php" style="font-size:13px;">CASE DRAIN PROTECTION</a></li>
                        <li class="support-nav"><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
                        <li class="support-nav"><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/flail_mowers/admin-index.php" style="font-size:13px;">FLAIL MOWERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
                         <li class="support-nav"><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
                        <li class="support-nav"><a href="../../../support/admin/motor_options/index.php" style="font-size:13px;">HYDRAULIC MOTOR TYPES</a></li> 
                        <li class="support-nav"><a href="../../../support/admin/manitou/index.php" style="font-size:13px;">MANITOU</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
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
						
					<?php } 
					else if ($permission == '2' OR $permission == '50') {
					?>
					
					 <li class="support-nav"><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
					 
					 <li class="support-nav"><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
					 
					  <li class="support-nav"><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
					  <li class="support-nav"><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
					  <li class="support-nav"><a href="../../../support/admin/brushfox/admin-index.php" style="font-size:13px;">BRUSH FOX</a></li>
					  <li class="support-nav"><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
					  <li class="support-nav"><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
					  <li class="support-nav"><a href="../../../support/admin/flail_mowers/admin-index.php" style="font-size:13px;">FLAIL MOWERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
					  <li class="support-nav"><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
					  <li class="support-nav"><a href="../../../support/admin/brushcutt/index.php" style="font-size:13px;">ROTARY BRUSH MOWERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/woodsplinter/index.php" style="font-size:13px;">SCREW SPLITTERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/stumpgrinders/index.php" style="font-size:13px;">STUMP GRINDERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/undertow/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS</a></li>  
					  <li class="support-nav"><a href="../../../support/admin/dropsaw/index.php" style="font-size:13px;">TREE SAWS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/incisor/index.php" style="font-size:13px;">TREE SHEARS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/treespades/index.php" style="font-size:13px;">TREE SPADES</a></li>
					  <li class="support-nav"><a href="../../../support/admin/trenchers/index.php" style="font-size:13px;">TRENCHERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/serial_number/all_available_serial_numbers.php" style="font-size:13px;">AVAILABLE SERIAL NUMBERS</a></li>
					<?php } ?>
                    </ul>
                </li>

				<li class="dropdown">
					<a href="../../../mail-server/admin/index.php" title=""><i class="fa fa-envelope"></i><span>Support E-mail</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						 <li ><a href="../../../mail-server/admin/admin-email.php" style="font-size:13px;">ADMIN SUPPORT E-MAIL</a></li>
						 <li><a href="../../../mail-server/admin/public-email.php" style="font-size:13px;">PUBLIC SUPPORT E-MAIL</a></li>
						 
						 <li><a href="../../../mail-server/admin/add_mailid.php" style="font-size:13px;">EMAIL IDS FOR DAILY REPORT</a></li>
						 
						 
						 
					</ul> 
				</li>
            
				
				<li><a href="../../../teeth-options/admin/index.php" title=""><i class="fas fa-tools"></i><span>Teeth Option</span></a></li>
            
				<li><a href="../../../login/en/adminpermission.php" title=""><i class="fa fa-users"></i><span>User List</span></a></li>	
          
                <li><a href="../../../login/en/logout.php" title=""><i class="fa fa-sign-out"></i><span>Sign Out</span></a></li>

				</ul>
				
			   <?php } 
			   else{
				   
				   $per = explode("|",$_SESSION['lper']);
				   
					?>
											
	<ul class="parent-menu">

		<li><a href="../../../login/en/user_dashboard.php" title=""><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		<li><a href="../../../login/en/user_my_profile.php" title=""><i class="fa fa-user"></i><span>My Profile</span></a></li>
		<li><a href="../../../login/en/user_change_password.php" title=""><i class="fa fa-key"></i><span>Update Password</span></a></li>	
		<?php 
	   for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==15)
            { 
			?>
                <li><a href="../../../en/contact/admin/addresslist.php" title=""><i class="fa fa-phone"></i><span>Corporate Contact</span></a></li>
		<?php }
		}
		
        for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==5)
            { ?>
                <li><a href="../../../admin/" title=""><i class="fa fa-map-marker"></i><span>Dealer Admin</span></a></li>


            <?php }
		}
		
		for ($i=0; $i <sizeof($per); $i++) 
        {
			 if($per[$i]==11)
            { ?>
                
                <li class="dropdown"><a href="" title=""><i class="fa fa-list"></i><span>Flow Pressure Admin</span></a>
				
				<ul class="dropdown-menu" style="margin-left:20px">
						 
					 <li ><a href="../../../flow-pressure/admin/backhoes/" style="font-size:13px;">
					 BACKHOES</a></li>
					 
					 <li><a href="../../../flow-pressure/admin/excavator/" style="font-size:13px;">
					 EXCAVATORS</a></li>
					 
					 <li><a href="../../../flow-pressure/admin/mini_skidsteer/" style="font-size:13px;">
					 MINI SKIDSTEER</a></li>
					 
					 <li><a href="../../../flow-pressure/admin/skidsteer/" style="font-size:13px;">
					 SKIDSTEER</a></li>
					 
					 <li><a href="../../../flow-pressure/admin/wheel_loader/" style="font-size:13px;">
					 WHEEL LOADER</a></li>
					 
					</ul> 
					
				</li>

            <?php }
		}
		for ($i=0; $i <sizeof($per); $i++) 
        {
			 if($per[$i]==8)
            { ?>
                
                <li class="dropdown">
					<a href="../../../free_catalogue/admin/" title=""><i class="fa fa-th"></i><span>Free Catalog</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						 
					 <li ><a href="../../../free_catalogue/admin/free_catalog_enquiry.php" style="font-size:13px;">FREE CATALOG ENQUIERY</a></li>
					 <li><a href="../../../free_catalogue/admin/change_emailid.php" style="font-size:13px;">CHANGE EMAIL ID</a></li>
					
					</ul> 
				</li>
				
            <?php }
		}
		for ($i=0; $i <sizeof($per); $i++) 
        {
			
		   if($per[$i]==12)
            { ?>
              <li class="dropdown">
					<a href="../../../labor_time/admin/index.php" title=""><i class="fas fa-clock-o"></i><span>Labor Time Admin</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						<li><a href="../../../labor_time/admin/augers/" style="font-size:13px;text-transform: uppercase;">AUGERS</a></li>
						<li><a href="../../../labor_time/admin/skid_wing/" style="font-size:13px;text-transform:uppercase">Boom Mower – Skidsteer</a></li>
						<li ><a href="../../../labor_time/admin/brushfox/" style="font-size:13px;text-transform:uppercase">Brush Fox</a></li>
						<li><a href="../../../labor_time/admin/mulchers/" style="font-size:13px;text-transform:uppercase">Brush Mulchers</a></li>
						<li><a href="../../../labor_time/admin/feller_buncher/" style="font-size:13px;text-transform:uppercase">Feller  Buncher</a></li>
						<li><a href="../../../labor_time/admin/flail_mowers/" style="font-size:13px;text-transform:uppercase">Flail Mowers</a></li>
						<li><a href="../../../labor_time/admin/generators/" style="font-size:13px;text-transform:uppercase">Generators</a></li>
						<li><a href="../../../labor_time/admin/hydraulic_power_pack/" style="font-size:13px;text-transform:uppercase">Hydraulic Power Pack</a></li>
						<li><a href="../../../labor_time/admin/manitou/" style="font-size:13px;text-transform:uppercase">Manitou</a></li>
						<li ><a href="../../../labor_time/admin/mini_skidsteer/" style="font-size:13px;text-transform:uppercase">Mini Skidsteers</a></li>
						<li ><a href="../../../labor_time/admin/brushcutt/" style="font-size:13px;text-transform:uppercase">Rotary Brush Cutter</a></li>
						<li ><a href="../../../labor_time/admin/woodsplinter/" style="font-size:13px;text-transform:uppercase">Screw Splitters</a></li>
						<li ><a href="../../../labor_time/admin/stump_grinders/" style="font-size:13px;text-transform:uppercase">Stump Grinders</a></li>
						<li ><a href="../../../labor_time/admin/undertow/" style="font-size:13px;text-transform:uppercase">Tile Drainage Plows</a></li>
						<li ><a href="../../../labor_time/admin/dropsaw/" style="font-size:13px;text-transform:uppercase">Tree Saws</a></li>
						<li ><a href="../../../labor_time/admin/incisor/" style="font-size:13px;text-transform:uppercase">Tree Shears</a></li>
						<li ><a href="../../../labor_time/admin/treespades/" style="font-size:13px;text-transform:uppercase">Tree Spades</a></li>
						<li ><a href="../../../labor_time/admin/trenchers/" style="font-size:13px;text-transform:uppercase">Trenchers</a></li>
					</ul> 
				</li>
            <?php }
		}
		
		for ($i=0; $i <sizeof($per); $i++) 
        {
			 if($per[$i]==16)
            { ?>
            
               <li class="dropdown">
				<a href="../../../tools-dashboard/admin/" title=""><i class="fa fa-cogs"></i><span>Mini Skidsteer Tool Searches</span></a>
			
					<ul class="dropdown-menu" style="margin-left:20px">
					<li ><a href="../../../tools-dashboard/admin/all_keyword.php" style="font-size:13px;text-transform:uppercase">All Keywords</a></li>
					<!--	
					<li ><a href="../../../tools-dashboard/admin/country_wise_keyword.php" style="font-size:13px;text-transform:uppercase">Country wise Keywords</a></li>-->

					<li><a href="../../../tools-dashboard/admin/high_ranked_keyword.php" style="font-size:13px;text-transform:uppercase">High Ranked Keywords</a></li>
					
					<li><a href="../../../tools-dashboard/admin/ip_wise_keyword.php" style="font-size:13px;text-transform:uppercase">IP wise Keywords</a></li>
					<li><a href="../../../tools-dashboard/admin/location_wise_keyword.php" style="font-size:13px;text-transform:uppercase">
					Location wise Keywords</a></li>
					<li><a href="../../../tools-dashboard/admin/new_keyword.php" style="font-size:13px;text-transform:uppercase">New Keywords</a></li>

					</ul>

			</li>
           <?php }
		}
		
		for ($i=0; $i <sizeof($per); $i++) 
        {
			 if($per[$i]==10)
            { ?>
            
                <li class="dropdown">
					<a href="../../../motor-option-calculator/admin/" title=""><i class="fa fa-cog"></i><span>Motor Option Admin</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						 
						 <li ><a href="../../../motor-option-calculator/admin/mulchers/" style="font-size:13px;">PRODUCT MODELS</a></li>
						 <li><a href="../../../motor-option-calculator/admin/brush_sizes/" style="font-size:13px;">BRUSH SIZES</a></li>
					
					</ul> 
				</li>
           <?php }
		}
		for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==5)
            { ?>
                <li><a onclick="online_order('<?php echo $_SESSION['E_EID']?>','<?php echo $_SESSION['user_id']?>')"><i class="fa fa-shopping-cart"></i><span>Online Order</span></a></li>
            <?php }
		}
		?>
		<li><a href="../../../product_registration/admin/" title=""><i class="fas fa-file-alt"></i><span>Online Product Registration</span></a></li>
		<?php
		for ($i=0; $i <sizeof($per); $i++) 
        {
		   
            if($per[$i]==9)
            { ?>
                
               <li><a href="../../../online-price/" title=""><i class="fa fa-dollar"></i><span>Price Administration</span></a></li>
            
            <?php }
			
		}
		for ($i=0; $i <sizeof($per); $i++) 
        {
			 if($per[$i]==6)
            { ?>
                <li class="dropdown">
				<a href="../../../suddenshipping/admin/" title=""><i class="fa fa-truck"></i><span>Sudden Shipping</span></a>
				<ul class="dropdown-menu" style="margin-left:20px">
					<li><a href="../../../suddenshipping/admin/augerdrives/leadtime-av.php">AUGERS</a></li>
					<li><a href="../../../suddenshipping/admin/skidwing/leadtime-av.php">BOOM MOWERS – SKIDSTEER</a></li>
					<li><a href="../../../suddenshipping/admin/packwing/leadtime-av.php">BOOM MOWERS – TRACTOR</a></li>
					<li><a href="../../../suddenshipping/admin/mulchercutters/leadtime-av.php">BRUSH MULCHERS</a></li>
					<li><a href="../../../suddenshipping/admin/excavator-adaptor/master_list.php">EXCAVATOR MOUNTING</a></li>
					<li><a href="../../../suddenshipping/admin/factorydiscounts/specialdiscounts-av.php">FACTORY DISCOUNTS</a></li>
					<li><a href="../../../suddenshipping/admin/feller-buncher/leadtime-av.php">FELLER BUNCHER</a></li>
					<li><a href="../../../suddenshipping/admin/flail-mowers/leadtime-av.php">FLAIL MOWERS</a></li>
					<li><a href="../../../suddenshipping/admin/generators/leadtime-av.php">GENERATORS</a></li>
					<li><a href="../../../suddenshipping/admin/hydraulic-power-pack/leadtime-av.php">PTO HYDRAULIC POWER PACK</a></li>
					<li><a href="../../../suddenshipping/admin/holt/index.php">HOLT</a></li>
					<li><a href="../../../suddenshipping/admin/miniskidsteer/leadtime-av.php">MINI SKIDSTEERS</a></li>
					<li><a href="../../../suddenshipping/admin/oem/leadtime-av.php">OEM</a></li>
					<li><a href="../../../suddenshipping/admin/public_holidays/leadtime-av.php">PUBLIC HOLIDAYS</a></li>
					<li><a href="../../../suddenshipping/admin/brushcutt/leadtime-av.php">ROTARY BRUSH MOWERS</a></li>
					<li><a href="../../../suddenshipping/admin/woodsplinter/leadtime-av.php">SCREW SPLITTERS</a></li>
					<li><a href="../../../suddenshipping/admin/shop-days/leadtime-shopdays.php">SHOP DAYS</a></li>
					<li><a href="../../../suddenshipping/admin/stumpgrinders/leadtime-av.php">STUMP GRINDERS</a></li>
					<li><a href="../../../suddenshipping/admin/undertow/leadtime-av.php">TILE DRAINAGE PLOWS</a></li>
					<li><a href="../../../suddenshipping/admin/dropsaw/leadtime-av.php">TREE SAWS</a></li>
					<li><a href="../../../suddenshipping/admin/incisorshear/leadtime-av.php">TREE SHEARS</a></li>
					<li><a href="../../../suddenshipping/admin/treespades/leadtime-av.php">TREE SPADES</a></li>
					<li><a href="../../../suddenshipping/admin/trenchaxe/leadtime-av.php">TRENCHERS</a></li>
										
				</ul> 
				</li>
            <?php }
		}
		for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==7)
            { ?>
                
                <li class="dropdown"> 
                    <a title=""><i class="fas fa-file-upload"></i><span>Support Document</span></a>
					
					<?php
					$permission ='';
					
					$permission = $_SESSION['user']['permission'];
						
					?>
                    <ul class="dropdown-menu" style="margin-left:20px">
					<?php 
					if ($_SESSION['user']['user_name'] == 'mennobauman') {
					?>
                        <li class="support-nav"><a href="../../../support/admin/accessory/index.php" style="font-size:13px;">ACCESSORY</a></li>
                        <li class="support-nav"><a href="../../../support/admin/video/view-video.php" style="font-size:13px;">ADD VIDEO</a></li>
                        <li class="support-nav"><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/roughneck/index.php" style="font-size:13px;">AUGERS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/aux_features/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
						<li class="support-nav"><a href="../../../support/admin/case_drain_protection/index.php" style="font-size:13px;">CASE DRAIN PROTECTION</a></li>
                        <li class="support-nav"><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
                        <li class="support-nav"><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/flail_mowers/admin-index.php" style="font-size:13px;">FLAIL MOWERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
                         <li class="support-nav"><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
                        <li class="support-nav"><a href="../../../support/admin/motor_options/index.php" style="font-size:13px;">HYDRAULIC MOTOR TYPES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/manitou/index.php" style="font-size:13px;">MANITOU</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
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
					<?php } else if($permission==1){?>
					
					<li class="support-nav"><a href="../../../support/admin/accessory/index.php" style="font-size:13px;">ACCESSORY</a></li>
                        <li class="support-nav"><a href="../../../support/admin/video/view-video.php" style="font-size:13px;">ADD VIDEO</a></li>
                        <li class="support-nav"><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/roughneck/index.php" style="font-size:13px;">AUGERS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/aux_features/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS FEATURES</a></li>
                        <li class="support-nav"><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
						<li class="support-nav"><a href="../../../support/admin/case_drain_protection/index.php" style="font-size:13px;">CASE DRAIN PROTECTION</a></li>
                        <li class="support-nav"><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
                        <li class="support-nav"><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
                        <li class="support-nav"><a href="../../../support/admin/flail_mowers/admin-index.php" style="font-size:13px;">FLAIL MOWERS</a></li>
                        <li class="support-nav"><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
                         <li class="support-nav"><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
                        <li class="support-nav"><a href="../../../support/admin/motor_options/index.php" style="font-size:13px;">HYDRAULIC MOTOR TYPES</a></li> 
                        <li class="support-nav"><a href="../../../support/admin/manitou/index.php" style="font-size:13px;">MANITOU</a></li>
                        <li class="support-nav"><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
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
						
					<?php } 
					else if ($permission == '2' OR $permission == '50') {
					?>
					
					<li class="support-nav"><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
					 <li class="support-nav"><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
					 
					  <li class="support-nav"><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
					  <li class="support-nav"><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
					  <li class="support-nav"><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
					 
					  <li class="support-nav"><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
					  <li class="support-nav"><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
					  <li class="support-nav"><a href="../../../support/admin/flail_mowers/admin-index.php" style="font-size:13px;">FLAIL MOWERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
					   <li class="support-nav"><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
					  <li class="support-nav"><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
					  <li class="support-nav"><a href="../../../support/admin/brushcutt/index.php" style="font-size:13px;">ROTARY BRUSH MOWERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/woodsplinter/index.php" style="font-size:13px;">SCREW SPLITTERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/stumpgrinders/index.php" style="font-size:13px;">STUMP GRINDERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/undertow/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS</a></li>  
					  <li class="support-nav"><a href="../../../support/admin/dropsaw/index.php" style="font-size:13px;">TREE SAWS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/incisor/index.php" style="font-size:13px;">TREE SHEARS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/treespades/index.php" style="font-size:13px;">TREE SPADES</a></li>
					  <li class="support-nav"><a href="../../../support/admin/trenchers/index.php" style="font-size:13px;">TRENCHERS</a></li>
					  <li class="support-nav"><a href="../../../support/admin/serial_number/all_available_serial_numbers.php" style="font-size:13px;">AVAILABLE SERIAL NUMBERS</a></li>
					<?php } ?>
                    </ul>
					
                </li>

            <?php }
           
		}
		for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==13)
            { ?>
                <li class="dropdown">
					<a href="../../../mail-server/admin/index.php" title=""><i class="fa fa-envelope"></i><span>Support E-mail</span></a>
					<ul class="dropdown-menu" style="margin-left:20px">
						 <li ><a href="../../../mail-server/admin/admin-email.php" style="font-size:13px;">ADMIN SUPPORT E-MAIL</a></li>
						 <li><a href="../../../mail-server/admin/public-email.php" style="font-size:13px;">PUBLIC SUPPORT E-MAIL</a></li>
						 
						 <li><a href="../../../mail-server/admin/add_mailid.php" style="font-size:13px;">EMAIL IDS FOR DAILY REPORT</a></li>
						 
					</ul> 
				</li>
            <?php }
		}
		for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==14)
            { ?>
               <li><a href="../../../teeth-options/admin/index.php" title=""><i class="fas fa-tools"></i><span>Teeth Option</span></a></li>
            <?php }
		
        }
      ?>
	  
         <li><a href="../../../login/en/logout.php" title=""><i class="fa fa-sign-out"></i><span>Sign Out</span></a></li>

						

                                        </ul>
										
									   <?php } ?>
                                    </nav>
                               
									
							   </div>
								
								
								
								
                            </div>
                        </header>
						
						
						
						
						
                        <!-- side header -->
                        <div class="topbar">
                            <div class="container-fluid">
								
                                <div class="row">
                                    <div class="col-lg-2" style="margin-top:3px;">
                                        <div class="logo"><a href="../../../login/en/welcomelogin.php" title="">
										<img src="../../../img/baumalight_logo.png" alt=""></a></div>
                                    </div>
                                    <div class="col-lg-7">
                                        <ul class="notify-area">
										
										<li class="messages nav-icon3_menu open_nav" style="margin-top:16px">
											<a href="#" title="" onclick="openNav()" style="text-transform: capitalize;"><i class="fa fa-bars"></i> &nbsp;Menu
											</a>
										</li>
										
										<li class="messages nav-icon3_menu close_nav" style="display:none;margin-top:16px" >
											<a href="#" title="" onclick="closeNav()" style="text-transform: capitalize;"><i class="fa fa-close"></i> &nbsp;Menu
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
											<a href="../../../login/en/logout.php" title="" style="text-transform: capitalize;"><i class="fa fa-sign-out"></i> &nbsp;Sign Out
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
										
										<li class="messages nav-icon3 close_nav" style="display:none;">
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
				document.addEventListener("DOMContentLoaded", function(){
			  document.querySelectorAll('.parent-menu .nav-link').forEach(function(element){
				
				element.addEventListener('click', function (e) {

				  let nextEl = element.nextElementSibling;
				  let parentEl  = element.parentElement;	

					if(nextEl) {
						e.preventDefault();	
						let mycollapse = new bootstrap.Collapse(nextEl);
						
						if(nextEl.classList.contains('show')){
						  mycollapse.hide();
						} else {
							mycollapse.show();
							// find other submenus with class=show
							var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
							// if it exists, then close all of them
							if(opened_submenu){
							  new bootstrap.Collapse(opened_submenu);
							}
						}
					}
				}); // addEventListener
			  }) // forEach
			}); 
			// DOMContentLoaded  end
				
				</script>
							<script>
							/*
							log.textContent ='';
								window.setTimeout(() => {
									window.location.reload(true);
								}, 200);
							*/

							function openNav() {
							  $('.close_nav').show();
							  $('.open_nav').hide();
							
							  //document.getElementById("open_nav").style.visibility = "hidden";						  
							}

							function closeNav() {
							  $('.close_nav').hide();
							  $('.open_nav').show();
							 
							  //$(".dataTables_scrollBody thead th").addClass("sorting");
							}
							
							
							window.onload = function() {

							  //to hide sidebar
							  $('.close_nav').show();  //to show close icon
							  $('.open_nav').hide();  //to hide bars icon
							  
							  $('.menu-options').toggleClass('active');
							  $('.side-header').toggleClass('slide-out');
							  $('a.closed').removeClass('slide-out');
							  $('.main-content').toggleClass('menu-slide');
							  
							}
							
							jQuery(window).on('scroll', function() {
								if(jQuery(window).scrollTop() > 50) {
									jQuery('.topbar').css('background-color', '#999999');
									jQuery('.topbar').css('z-index', '10');
									
								} else {
								   jQuery('.topbar').css('background-color', '#999999');
								   //jQuery('.topbar').css('z-index', '0');
								}
							});


							</script>