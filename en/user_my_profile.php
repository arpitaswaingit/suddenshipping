<?php 
include "header.php";
if(($_SESSION['user']['user_name'])=="mennobauman"){
	echo "<script>window.location.href='my_profile.php'</script>";
	 }     
else{	
	  		
}
?>

<style>

.row_border {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

table.parent-menu>li{
	line-height: 2;
}

.shadow{
        box-shadow:2px 6px 7px 7px lightgrey;
    }
</style>


                            <!-- responsive header -->
						
                            <div class="panel-body" style="margin-bottom:30px;">
                                <div class="col-md-12 single_element" style="padding:0px 30px;">

                                <div class="row" style="padding:10px">
                                    <div class="col-md-12">
                                        <h3><i class="fa fa-user"></i> My Profile </h3>
                                    </div>    
                                 </div>
                               

                                 <div class="row " style="padding:10px">
                                 <div class="col-md-6 shadow" style="padding-top:5px;">
                                    <div class="table-responsive">
                                        <table class="table table-striped" width="50%">
                                            <tr>
                                                <th>Name</th>
                                                <th><?php echo $_SESSION['uname']?></th>
                                            </tr>

                                            <tr>
                                                <th>Email</th>
                                                <th><?php echo $_SESSION['usname']?></th>
                                            </tr>

                                            <tr>
                                                <th>Accessible Menus</th>

                                                <th>
                                                <ul class="parent-menu" style="list-style-type:none">
										
                                         <?php 
                                   for ($i=0; $i <sizeof($per); $i++) 
                                   {
									    if($per[$i]==15)
                                       { ?>
                                       <li><i class="fa fa-phone"></i><span> Contact</span></li>
                                       
								   <?php }
								   }
								   
									  for ($i=0; $i <sizeof($per); $i++) 
                                   {
                                       if($per[$i]==5)
                                       { ?>
                                           <li><i class="fa fa-map-marker"></i><span> Dealer Admin</span></li>
                           
                           
								   <?php } } 
								   
								    for ($i=0; $i <sizeof($per); $i++) 
                                   {
								    if($per[$i]==11)
                                       { ?>
                                           
                                           <li><i class="fa fa-list"></i><span> Flow Pressure Admin</span></li>
                           
                                       <?php }
									   }
									   
									for ($i=0; $i <sizeof($per); $i++) 
                                   {
									    if($per[$i]==8)
                                       { ?>
                                           
                                           <li><i class="fa fa-list"></i><span> Free Catalogue</span></li>
                           
                                       <?php }
								   }
									
									for ($i=0; $i <sizeof($per); $i++) 
                                   {	
										if($per[$i]==12)
                                       { ?>
                                       <li><i class="fas fa-clock-o"></i><span> Labor Time Admin</span></li>
                           
                                       <?php }
									
								   }
								   
								   for ($i=0; $i <sizeof($per); $i++) 
                                   {	
									if($per[$i]==10)
                                       { ?>
                                       
                                           <li><i class="fa fa-cog"></i><span> Motor Option Admin</span></li>
                           
                                      <?php }
								   }
								   
								   for ($i=0; $i <sizeof($per); $i++) 
                                   {	
									if($per[$i]==9)
                                       { ?>
                                           
                                           <li><i class="fa fa-dollar"></i><span> Online Price</span></li>
                           
                                       <?php }
								   }
								   
								   for ($i=0; $i <sizeof($per); $i++) 
                                   {
                                       if($per[$i]==6)
                                       { ?>
                                            <li><i class="fa fa-truck"></i><span> Sudden Shipping</span></li>
                           
								   <?php }}
								   
								   for ($i=0; $i <sizeof($per); $i++) 
                                   {
                                       if($per[$i]==7)
                                       { ?>
                                           <li class="dropdown"> 
                                               <i class="fas fa-file-upload"></i><span> Support Document</span>
                                           </li>
                                       <?php }
                                       
                                       if($per[$i]==13)
                                       { ?>
                                       <li><i class="fa fa-envelope"></i><span> Support Email</span></li>
                                       
                                      <?php }
									   if($per[$i]==14)
                                       { ?>
                                       <li><i class="fas fa-tools"></i><span> Teeth Option</span></li>
                                       
                                      <?php }
									  
                                   }
                                 ?>
                                                </ul>
                                                </th>

                                            </tr>

                                        </table>
                                    </div>    
                                 </div>
                                </div>



                                 </div> 
                            </div>
                                
							
                          
                    <?php 
					include "footer.php";
					?>