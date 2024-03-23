 
								<!--
								<div class="bottombar fixed-bottom" >
                                    <span>© 2019. Dewwater. All Rights Reserved.</span>
                                </div>
								-->
                                <!-- bottombar -->
								
                            
						</div>
                    </div>	<!-- main-page end -->
                </div>	<!-- col-sm-12 end -->
            </div> 	<!-- row end -->
        </div>	<!-- container-fluid end -->
    </div>	<!-- panel-layout  end  -->
	
	
  
<script>
					function online_order(e_eid,user_id){
						$('#ebms_user_id').val(user_id);
						var ebms_salesman_id='<?php echo $_SESSION['user']['ebms_salesman_id'];?>';
						//$('#online_order_modal').modal('show');
						
						/*
						if(ebms_salesman_id!='' || user_id==1787 || user_id==32){
							var url='https://online-order.baumalight.com/ci4/dealer';
							//var url='../../ci4/dealer';
						}else{
							var url='https://online-order.baumalight.com/ci4/';
							//var url='../../ci4/';
						}
						*/
						var url='https://online-order.baumalight.com/online-order/';
						
						var form = $('<form action="' + url + '" method="post">' +
						'<input type="hidden" name="e_eid" value="' + e_eid + '" /><input type="hidden" name="ebms_salesman_id" value="' + ebms_salesman_id + '" /><input type="hidden" name="ebms_id" value="' + e_eid + '" /><input type="hidden" name="user_id" value="' + user_id + '" />' +
						'</form>');
						$('body').append(form);
						form.submit();

					}
					
					function online_order_modal(){
					    var e_eid=$('#ebms_id').val();
						if(e_eid==''){
							alert("Please enter EBMS ID");
						}else{
							var user_id=$('#ebms_user_id').val();
							alert(e_eid);
							alert(user_id);
							
							var url='https://online-order.baumalight.com/ci4/';
											//var url='../../ebms-online-order-sush/';
							var form = $('<form action="' + url + '" method="post">' +
								'<input type="hidden" name="e_eid" value="' + e_eid + '" /><input type="hidden" name="ebms_id" value="' + e_eid + '" /><input type="hidden" name="user_id" value="' + user_id + '" />' +
								'</form>');
							$('body').append(form);
							form.submit();
						}
					    
					}
				</script>

	
    <script src="../../../login/en/js/jquery.js"></script>
	

    <script src="../../../login/en/js/jquery-ui.min.js"></script>	   
    <script src="../../../login/en/js/bootstrap.min.js"></script>	
	
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


    <script src="../../../login/en/js/perfect-scrollbar.jquery.min.js"></script>
	
    <script src="../../../login/en/js/owl.carousel.min.js"></script>
    <script src="../../../login/en/js/chart.min.js"></script>
    <script src="../../../login/en/js/echart.min.js"></script>
    <script src="../../../login/en/js/jquery.sparkline.min.js"></script>
    <script src="../../../login/en/js/calander.min.js"></script>
    <!--<script src="../../../login/en/js/sparkline.js"></script>
     calander -->
    <script src="../../../login/en/js/calander-int.js"></script>
    <!-- calander -->
    <script src="../../../login/en/js/custom.js"></script>
    <!-- scripts -->
	  
    <script src="../../../login/en/js/custom2.js"></script>


	 <!--
 <script src="js/jvectormap.js"></script>-->
    <!-- jvactor map -->

</body>
</html>