<?php 
include "header.php";

?>

<style>
.circle-tile {
    margin-bottom: 15px;
    text-align: center;
	//opacity:0.9;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
	border-radius:10px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}

.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.light_green {
	 background: rgba(0, 0, 0, 0) linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%) repeat scroll 0 0;
}

.purple {
	 background: rgba(0, 0, 0, 0) linear-gradient(
        -135deg
        , #899fd4 0%, #a389d4 100%) repeat scroll 0 0; 
}

.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}

.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

.main_card{
	padding:5px;
}

</style>

                            <!-- responsive header -->
						
                            <div class="panel-body" style="margin-bottom:30px;">
                                <div class="col-md-12 single_element" style="padding:30px;">
                                    
										
									<div class="row" style="padding:10px;">
										<marquee class="marquee_tag" width="35%" scrollamount="5" direction="left">
											<h3 style="text-shadow: 3px 3px lightgrey;color:#0b497b">Welcome to Baumalight Admin Panel<h3>
											</marquee>
									</div>
									
                                    <!-- top subbar -->
                                   <div class="row">
								   
								   <!--
								   <div class="col-lg-3 col-md-2 col-sm-2 col-6 info-section ">
                                        <div class="panel-widget">
											<div class="mini-stats mini-stats_bg_green">
												<p>My Profile</p>
												<i class="fa fa-user"></i> 
											</div>
                                        </div>
									</div>
									
									<div class="col-lg-3 col-md-2 col-sm-2 col-6 info-section ">
                                        <div class="panel-widget">
											<div class="mini-stats mini-stats_bg_purple">
												<p>Change Password</p>
												<i class="fa fa-key"></i> 
											</div>
                                        </div>
									</div>
									-->
									
									
									<div class="main_card col-lg-2 col-md-2 col-sm-3 col-6">
									  <div class="circle-tile">
										<a href="#">
										<div class="circle-tile-heading light_green">
										<i class="fa fa-user fa-fw fa-3x"></i>
										
										</div></a>
										<div class="circle-tile-content light_green">
										  <div class="circle-tile-description text-faded"> My Profile</div>
										  <div class="circle-tile-number text-faded ">
										  </div>
										  
										  <a class="circle-tile-footer" href="my_profile.php">More Info <i class="fa fa-chevron-circle-right"></i></a>
										</div>
									  </div>
									</div>
									
									
									 <div class="main_card col-lg-2 col-md-2 col-sm-3 col-6">
										  <div class="circle-tile ">
											<a href="#"><div class="circle-tile-heading purple">
											<i class="fa fa-key fa-fw fa-3x"></i>
											</div></a>
												<div class="circle-tile-content purple">
												  <div class="circle-tile-description text-faded"> Change Password </div>
												  <div class="circle-tile-number text-faded ">
												  </div>
												  <a class="circle-tile-footer" href="change_password.php">More Info <i class="fa fa-chevron-circle-right"></i></a>
												</div>
										  </div>
									</div> 
									    
										
									</div>

                                </div>
								
								</div>
                                
							
                    <?php 
					include "footer.php";
					?>