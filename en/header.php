<?php 
//error_reporting(0);
include '../inc/init.php';

if(!isset($_SESSION)){
	session_start();
}
else{
	//session_start();
}
// var_dump($_SESSION);
if(!isset($_SESSION['user_id']))
{
    header('Location:logout.php','_self');
}
else
{
  
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
    <link rel="stylesheet" href="user_css/style.css?6">
    <link rel="stylesheet" href="user_css/color.css?3">
    <link rel="stylesheet" href="user_css/responsive.css">
    


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
 

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>

<style>

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

.side-menus nav>ul>li.dropdown>ul>li>a {
	//font-family: "Open Sans", sans-serif;
	padding-left:15px;
}

</style>

<style>
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
    padding-left:15px;
}
.table th{
	font-weight:bold;
	color:#000;
}
.table tbody input, .table textarea{
	background-color:transparent!important;
	border:1px solid lightgray;
}
table tbody tr td:last-child {
	padding-right:10px;
}

.dropdown-menu{
	width: -webkit-fill-available;
}

.dropdown-menu li a{
	font-family: Open Sans!important;
}

.parent-menu li a{
	font-family: Open Sans!important;
}


/*customise scrollbar */

/* width */
::-webkit-scrollbar {
  width: 12px;
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
									<a title="" href="../../../login/en/user_dashboard.php">
									<img alt="" src="images/baumalight_logo.png"></a>
									</div>
                                    <nav class="slide-menu">
                                       
                                        <ul class="parent-menu">
										
		<li><a href="../../../login/en/user_dashboard.php" title=""><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		<li><a href="../../../login/en/user_my_profile.php" title=""><i class="fa fa-user"></i><span>My Profile</span></a></li>
		<li><a href="../../../login/en/user_change_password.php" title=""><i class="fa fa-key"></i><span>Update Password</span></a></li>	
		

       <?php 
	   for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==15)
            { ?>
                <li><a href="../../../en/contact/admin/addresslist.php" title=""><i class="fa fa-phone"></i><span>Corporate Contact</span></a></li>


            <?php }
		}
		
	
        for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==5)
            { ?>
                <li><a onclick="dealerformsubmit()" title=""><i class="fa fa-map-marker"></i><span>Dealer Admin</span></a></li>

				<form method="post" action="https://online-order.baumalight.com/admin/Dealerlocator/Admin_auto_c/check_user_post" id="dealerform">
					<input type="hidden" name="username_for_dealer_locator" value="<?php echo $_SESSION['user']['user_name']; ?>">
				</form>
				<script type="text/javascript">
					function dealerformsubmit()  
					{
						document.getElementById("dealerform").submit();
					}
				</script>
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
					 EXCAVATOR</a></li>
					 
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
						<li><a href="../../../labor_time/admin/mulchers/" style="font-size:13px;text-transform:uppercase">Brush Mulchers</a></li>
						<li><a href="../../../labor_time/admin/feller_buncher/" style="font-size:13px;text-transform:uppercase">Feller  Buncher</a></li>
						<li><a href="../../../labor_time/admin/flail_mowers/" style="font-size:13px;text-transform:uppercase">Flail Mowers</a></li>
						<li><a href="../../../labor_time/admin/generators/" style="font-size:13px;text-transform:uppercase">Generators</a></li>
						<li><a href="../../../labor_time/admin/hydraulic_power_pack/" style="font-size:13px;text-transform:uppercase">Hydraulic Power Pack</a></li>
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
		
		for ($i=0; $i <sizeof($per); $i++) 
			{
				if($per[$i]==18)
				{ ?>
			<li><a href="../../../product_registration/admin/" title=""><i class="fas fa-file-alt"></i><span>Online Product Registration</span></a></li>
		
		<?php
				}
			}
		
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
                        <li ><a href="../../../support/admin/accessory/index.php" style="font-size:13px;">ACCESSORY</a></li>
                        <li ><a href="../../../support/admin/video/view-video.php" style="font-size:13px;">ADD VIDEO</a></li>
                        <li ><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
                        <li ><a href="../../../support/admin/roughneck/index.php" style="font-size:13px;">AUGERS FEATURES</a></li>
                        <li ><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
                        <li ><a href="../../../support/admin/aux_features/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS FEATURES</a></li>
                        <li ><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
                        <li ><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
                        <li ><a href="../../../support/admin/brushfox/admin-index.php" style="font-size:13px;">BRUSH FOX</a></li>
                        <li ><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
                        <li ><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
                        <li ><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
                        <li ><a href="../../../support/admin/flail_mowers/admin-index.php" style="font-size:13px;">FLAIL MOWERS</a></li>
                        
                        <li ><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
                        
                        <li ><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
                        
                        <li ><a href="../../../support/admin/motor_options/index.php" style="font-size:13px;">HYDRAULIC MOTOR TYPES</a></li> 
                        <li ><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
                        <li ><a href="../../../support/admin/pto_shaft/index.php" style="font-size:13px;">PTO SHAFT</a></li>
                        <li ><a href="../../../support/admin/brushcutt/index.php" style="font-size:13px;">ROTARY BRUSH MOWERS</a></li>
                        <li ><a href="../../../support/admin/woodsplinter/index.php" style="font-size:13px;">SCREW SPLITTERS</a></li>
                        <li ><a href="../../../support/admin/skidpro/index.php" style="font-size:13px;">SKID PRO</a></li>
                        <li ><a href="../../../support/admin/stumpgrinders/index.php" style="font-size:13px;">STUMP GRINDERS</a></li>
                        <li ><a href="../../../support/admin/undertow/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS</a></li>  
                        <li ><a href="../../../support/admin/undertow_feature/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS FEATURES</a></li>
                        <li ><a href="../../../support/admin/dropsaw/index.php" style="font-size:13px;">TREE SAWS</a></li>
                        <li ><a href="../../../support/admin/incisor/index.php" style="font-size:13px;">TREE SHEARS</a></li>
                        <li ><a href="../../../support/admin/treespades/index.php" style="font-size:13px;">TREE SPADES</a></li>
                        <li ><a href="../../../support/admin/trenchers/index.php" style="font-size:13px;">TRENCHERS</a></li>
                        <li ><a href="../../../support/admin/valve_info/index.php" style="font-size:13px;">VALVE INFO</a></li>
                        <li ><a href="../../../support/admin/serial_number/available_serial_numbers.php" style="font-size:13px;">AVAILABLE SERIAL NUMBERS</a></li>
                        <li ><a href="../../../support/admin/inc/create-account.php" style="font-size:13px;">CREATE ADMIN ACCOUNT</a></li>
					<?php } else if($permission==1){?>
					
					<li ><a href="../../../support/admin/accessory/index.php" style="font-size:13px;">ACCESSORY</a></li>
                        <li ><a href="../../../support/admin/video/view-video.php" style="font-size:13px;">ADD VIDEO</a></li>
                        <li ><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
                        <li ><a href="../../../support/admin/roughneck/index.php" style="font-size:13px;">AUGERS FEATURES</a></li>
                        <li ><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
                        <li ><a href="../../../support/admin/aux_features/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS FEATURES</a></li>
                        <li ><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
                        <li ><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
                        <li ><a href="../../../support/admin/brushfox/admin-index.php" style="font-size:13px;">BRUSH FOX</a></li>
                        <li ><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
                        <li ><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
                        <li ><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
                        <li><a href="../../../support/admin/flail_mowers/" style="font-size:13px;">FLAIL MOWERS</a></li>
                        <li ><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
                        <li ><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
                        
                        <li ><a href="../../../support/admin/motor_options/index.php" style="font-size:13px;">HYDRAULIC MOTOR TYPES</a></li> 
                        <li ><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
                        <li ><a href="../../../support/admin/pto_shaft/index.php" style="font-size:13px;">PTO SHAFT</a></li>
                        <li ><a href="../../../support/admin/brushcutt/index.php" style="font-size:13px;">ROTARY BRUSH MOWERS</a></li>
                        <li ><a href="../../../support/admin/woodsplinter/index.php" style="font-size:13px;">SCREW SPLITTERS</a></li>
                        <li ><a href="../../../support/admin/skidpro/index.php" style="font-size:13px;">SKID PRO</a></li>
                        <li ><a href="../../../support/admin/stumpgrinders/index.php" style="font-size:13px;">STUMP GRINDERS</a></li>
                        <li ><a href="../../../support/admin/undertow/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS</a></li>  
                        <li ><a href="../../../support/admin/undertow_feature/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS FEATURES</a></li>
                        <li ><a href="../../../support/admin/dropsaw/index.php" style="font-size:13px;">TREE SAWS</a></li>
                        <li ><a href="../../../support/admin/incisor/index.php" style="font-size:13px;">TREE SHEARS</a></li>
                        <li ><a href="../../../support/admin/treespades/index.php" style="font-size:13px;">TREE SPADES</a></li>
                        <li ><a href="../../../support/admin/trenchers/index.php" style="font-size:13px;">TRENCHERS</a></li>
                        <li ><a href="../../../support/admin/valve_info/index.php" style="font-size:13px;">VALVE INFO</a></li>
                        <li ><a href="../../../support/admin/serial_number/available_serial_numbers.php" style="font-size:13px;">AVAILABLE SERIAL NUMBERS</a></li>
						
					<?php } 
					else if ($permission == '2' OR $permission == '50') {
					?>
					
					<li ><a href="../../../support/admin/augers/index.php" style="font-size:13px;">AUGERS</a></li>
					  <li ><a href="../../../support/admin/auxiliaryconnectors/index.php" style="font-size:13px;">AUXILIARY ELECTRICAL<br/>CONNECTORS</a></li>
					  <li ><a href="../../../support/admin/skid_wing/index.php" style="font-size:13px;">BOOM MOWERS – SKIDSTEER</a></li>
					  <li ><a href="../../../support/admin/packwing/index.php" style="font-size:13px;">BOOM MOWERS – TRACTOR</a></li>
					  <li ><a href="../../../support/admin/brushfox/admin-index.php" style="font-size:13px;">BRUSH FOX</a></li>
					  <li ><a href="../../../support/admin/mulchers/index.php" style="font-size:13px;">BRUSH MULCHERS</a></li>
					  <li ><a href="../../../support/admin/excavatormounting/index.php" style="font-size:13px;">EXCAVATOR MOUNTING</a></li>
					  <li ><a href="../../../support/admin/feller_buncher/index.php" style="font-size:13px;">FELLER BUNCHER</a></li>
					  <li><a href="../../../labor_time/admin/flail_mowers/" style="font-size:13px;">FLAIL MOWERS</a></li>
					  <li ><a href="../../../support/admin/generators/index.php" style="font-size:13px;">GENERATORS</a></li>
					  <li ><a href="../../../support/admin/hydraulic_power_pack/" style="font-size:13px;">HYDRAULIC POWER PACK</a></li>
					  <li ><a href="../../../support/admin/mini_skidsteer/index.php" style="font-size:13px;">MINI SKIDSTEERS</a></li> 
					  <li ><a href="../../../support/admin/brushcutt/index.php" style="font-size:13px;">ROTARY BRUSH MOWERS</a></li>
					  <li ><a href="../../../support/admin/woodsplinter/index.php" style="font-size:13px;">SCREW SPLITTERS</a></li>
					  <li ><a href="../../../support/admin/stumpgrinders/index.php" style="font-size:13px;">STUMP GRINDERS</a></li>
					  <li ><a href="../../../support/admin/undertow/index.php" style="font-size:13px;">TILE DRAINAGE PLOWS</a></li>  
					  <li ><a href="../../../support/admin/dropsaw/index.php" style="font-size:13px;">TREE SAWS</a></li>
					  <li ><a href="../../../support/admin/incisor/index.php" style="font-size:13px;">TREE SHEARS</a></li>
					  <li ><a href="../../../support/admin/treespades/index.php" style="font-size:13px;">TREE SPADES</a></li>
					  <li ><a href="../../../support/admin/trenchers/index.php" style="font-size:13px;">TRENCHERS</a></li>
					  <li ><a href="../../../support/admin/serial_number/all_available_serial_numbers.php" style="font-size:13px;">AVAILABLE SERIAL NUMBERS</a></li>
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
						 <li ><a href="../../../mail-server/admin/admin-email.php" style="font-size:13px;">ADMIN SUPOORT E-MAIL</a></li>
						 <li><a href="../../../mail-server/admin/public-email.php" style="font-size:13px;">PUBLIC SUPOORT E-MAIL</a></li>
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
										<img src="../../../login/en/images/baumalight_logo.png" alt=""></a></div>
                                    </div>
                                    <div class="col-lg-7">
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
									
									 <div class="col-lg-2" style="text-align:center">
										<li class="messages" style="color:#fff;text-decoration:none;list-style-type:none;float:right;margin-right:15px">
											<a href="#" title="" style="text-transform: capitalize;"><i class="fa fa-user"></i> 
											&nbsp;<?php echo isset($_SESSION['uname'])?$_SESSION['uname']:'';?>
											</a>
										</li>
										
										
									</div>
									
                                    <div class="col-lg-1" style="text-align:center;">
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