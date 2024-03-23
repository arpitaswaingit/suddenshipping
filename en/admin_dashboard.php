<?php include_once "essentials/header.php"; ?>
<style>
.box {
 margin-top:10px;
}
.card_area{
    padding: 10px;
}
 .card{
    border-radius: 10px;
    padding: 15px 1px;
    background-color: #fff;
    text-align: center;
	//opacity: 0.7;
	box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.50);
	text-align: center;
}

.card h5{
	font-size:15px;
}
.card:hover{
	background: #fff;
	box-shadow: 0px 18px 30px rgba(0, 0, 0, 0.50);
	cursor:pointer;
	transform: scale(1.1);
}
.card_design .icon_area{
    padding: 20px;
    text-align: center;
}

.icon_area  .icon_div{
    text-align: center;
    background-color: lightgreen;
    width: 200px;
    height: 200px;
}
.card-block .card-title{
	padding:10px;
	margin-bottom:0px;
}
.lightgreen{
	color:lightgreen;
}

.purple{
	color:purple;
}
.lightgray{
	color:lightgray;
}
.blue{
	color:blue;
}
.lightblue{
	color:lightblue;
}
.red{
	color:red;
}
.brown{
	color:brown;
}
.light_b{
	color:#1e5684;
}

.card-block .card-title {
    padding: 10px 2px;
    margin-bottom: 0px;
}

</style>

                            <!-- responsive header -->
						
                            <div class="panel-body" style="margin-bottom:30px;">
                                <div class="col-md-12 single_element" style="padding:5px 30px;">
                                    <div class="row">
									<div class="col-md-3" style="padding-left:25px">
										<h3 class="heading_style">Admin Dashboard</h3>
									</div>
									</div>
                                    <!-- top subbar -->
                                   <div class="row">
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../en/contact/admin/addresslist.php">
												<div class="card-block">
													<h2><i class="fa fa-phone fa-2x blue" ></i></h2>
													<a href="../../en/contact/admin/addresslist.php"><h5 class="card-title" style="font-weight: bold;">Corporate Contact</h5></a>
												</div>
											</a>	
											</div>
											</div>
										</div>
										
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
												<form method="post" action="https://online-order.baumalight.com/admin/Dealerlocator/Admin_auto_c/check_user_post" id="dealerform">
													<input type="hidden" name="username_for_dealer_locator" value="<?php echo $_SESSION['user']['user_name']; ?>">
													<a onclick="dealerformsubmit()">
														<div class="card-block">
															<h2><i class="fa fa-map-marker fa-2x blue" ></i></h2>
																<h5 class="card-title" style="font-weight: bold;" onclick="dealerformsubmit()">Dealer Admin</h5>
														</div>
													</a>
												</form>	
											</div>
											</div>
										</div>

										<script type="text/javascript">
											function dealerformsubmit() 
											{
												document.getElementById("dealerform").submit();
											}
										</script>
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../financial_calculator/admin/manage_interest.php">
												<div class="card-block">
													<h2><i><img src="images/Financing_Logo.png" style="padding: 17px;"/></i></h2>
													<a href="../../financial_calculator/admin/manage_interest.php"><h5 class="card-title" style="font-weight: bold;">Financial Calculator</h5></a>
												</div>
											</a>	
											</div>
											</div>
										</div>
										
										
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../flow-pressure/admin/">
												<div class="card-block">
													<h2><i><img src="images/hyd_flow.png" style="height:60px;width:85px"/></i></h2>
													<a href="../../flow-pressure/admin/"><h5 class="card-title" style="font-weight: bold;">Flow Pressure Admin</h5></a>
												</div>
											</a>	
											</div>
											</div>
										</div>
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../free_catalogue/admin/">
												<div class="card-block">
													<h2>
													<i><img src="images/Free_Catalog.png" style="height:60px;"/></i>
													</h2>
													<a href="../../free_catalogue/admin/"><h5 class="card-title" style="font-weight: bold;">Free Catalog</h5></a>
												</div>
											</a>	
											</div>
											</div>
										</div>
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../labor_time/admin/index.php">
												<div class="card-block">
													<h2><i class="fas fa-clock-o fa-2x black" ></i></h2>
													<a href="../../labor_time/admin/index.php"><h5 class="card-title" style="padding-bottom:0px;padding-top:7px;font-weight: bold;">Labour Time Admin</h5>
													<span style="font-size:8px;font-weight:bold;color:black">SERVICE AND INSTRUCTIONAL VIDEOS & SUPPORT</span>
													</a>
												</div>
											</a>	
											</div>
											</div>
										</div>
										
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../tools-dashboard/admin/">
												<div class="card-block">
												<h2><i class="fas fa-cogs fa-2x black" ></i></h2>
												<a href="../../tools-dashboard/admin/"><h5 class="card-title" style="font-weight:bold;">Mini Skidsteer Tool Searches</h5></a>
												</div>
											</a>
											</div>
											</div>
										</div>
										
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../motor-option-calculator/admin/">
												<div class="card-block">
													<h2>
													<i><img src="images/motor.png" style="height:60px;width:95px"/></i>
													</h2>
												<a href="../../motor-option-calculator/admin/"><h5 class="card-title" style="font-weight: bold;">Motor Option Admin</h5></a>
												</div>
											</a>
											</div>
											</div>
										</div>
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a onclick="online_order('<?php echo $_SESSION['E_EID']?>','<?php echo $_SESSION['user_id']?>')">
												<div class="card-block">
													<h2><i class="fa fa-shopping-cart fa-2x purple" ></i></h2>
													<a onclick="online_order('<?php echo $_SESSION['E_EID']?>','<?php echo $_SESSION['user_id']?>')">
													<h5 class="card-title" style="font-weight: bold;">Online Order</h5></a>
												</div>
											</a>
											</div>
											</div>
										</div>
        				
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a onclick="online_administrator_panel()">
												<div class="card-block">
													<h2><i class="fas fa-shopping-basket fa-2x black" ></i></h2>
													<a onclick="online_administrator_panel()"><h5 class="card-title" style="padding-bottom:0px;padding-top:7px;font-weight: bold;">Online Order</h5>
													<span style="font-size:8px;font-weight:bold;color:black">Administrator Panel</span>
													</a>
												</div>
											</a>	
											</div>
											</div>
										</div>

										<div class="col-md-3 card_area">
                                    		<div class="col-md-12">
                                    		<div class="card text-center">
                                    		<a href="../../product_registration/admin/">
                                    			<div class="card-block">
                                    				<h2><i><img src="images/product_reg_icon.png" style="height:60px;width:145px"/></i></h2>
                                    				<a href="../../product_registration/admin/">
                                    				    <h5 class="card-title" style="font-weight: bold;">Online Product Registration</h5>
                                    				    </a>
                                    			</div>
                                    		</a>
                                    		</div>
                                    		</div>
                                    	</div>
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../online-price">
												<div class="card-block">
													<h2><i><img src="images/price.png" style="height:60px"/></i></h2>
													<a href="../../online-price"><h5 class="card-title" style="font-weight: bold;">Price Administration</h5></a>
												</div>
											</a>
											</div>
											</div>
										</div>
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../suddenshipping/admin/">
												<div class="card-block">
													<h2>
													<i><img src="images/sudden-shipping.png" style="height:60px"/></i>
													</h2>
													<a href="../../suddenshipping/admin/"><h5 class="card-title" style="font-weight: bold;">Sudden Shipping</h5></a>
												</div>
											</a>
											</div>
											</div>
										</div>
										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../support/admin/">
												<div class="card-block">
													<h2><i class="fas fa-file-upload fa-2x light_b"></i></h2>
													<a href="../../support/admin/"><h5 class="card-title" style="font-weight: bold;">Support Document</h5></a>
												</div>
											</a>	
											</div>
											</div>
										</div>

										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../mail-server/admin/index.php">
												<div class="card-block">
													<h2><i class="far fa-envelope fa-2x purple" ></i></h2>
													<a href="../../mail-server/admin/index.php"><h5 class="card-title" style="font-weight: bold;">Support E-mail</h5></a>
												</div>
											</a>
											</div>
											</div>
										</div>


										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
											<a href="../../teeth-options/admin/index.php">
												<div class="card-block">
													<h2>
													<i><img src="images/teeth-mount.png" style="height:60px"/></i>
													</h2>
													<a href="../../teeth-options/admin/index.php"><h5 class="card-title" style="font-weight: bold;">Teeth Option</h5></a>
												</div>
											</a>
											</div>
											</div>
										</div>

										
										<div class="col-md-3 card_area">
											<div class="col-md-12">
											<div class="card text-center">
												<a href="../../login/en/adminpermission.php">
												<div class="card-block">
													<h2><i class="fa fa-users fa-2x" style="color:#0B497B"></i></h2>
													<a href="../../login/en/adminpermission.php"><h5 class="card-title" style="font-weight: bold;">Users List</h5></a>
												</div>
												</a>
											</div>
											</div>
										</div>
									</div>
									
									

                                </div>
								
								</div>
                                
							
                    <?php 
					include "redirect_functions.php";
					include "essentials/footer.php";
					
					?>