<script>
	function online_order(e_eid,user_id){
		$('#ebms_user_id').val(user_id);
		var ebms_salesman_id='<?php echo $_SESSION['user']['ebms_salesman_id'];?>';
		//$('#online_order_modal').modal('show');
		if(ebms_salesman_id!='' || user_id==1787){
			var url='../../ci4/dealer';
		}else{
			var url='../../ci4/';
		}
		
		var url='../../online-order/';
		//var url='https://online-order.baumalight.com/online-order/';
		
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

	//online adminstrator panel
	function online_administrator_panel(){
		var user_session='<?php echo $_SESSION['user']['user_name'];?>';
		var url='../../admin/Common_login/Login_c/check_user_post';					
		//https://online-order.baumalight.com/admin/Common_login/Login_c/check_user_post
		//var url='https://online-order.baumalight.com/online-order/';
		var form = $('<form action="'+url+'" method="post">' +
		'<input type="hidden" name="username_for_new_login" value="'+user_session+'"/>'+
		'<input type="hidden" name="sec_account" value="<?php if(isset($_SESSION['secondary_user_all'])){ echo $_SESSION['secondary_user_all'];} else{ echo ""; } ?>">'+'<input type="hidden" name="l_type" value="online_order"/>'
		+'</form>');
		$('body').append(form);
		form.submit();
	}



// suddenshipping panel 
function suddenshipping_panel(){
		var user_session='<?php echo $_SESSION['user']['user_name'];?>';
		alert(user_session);
		var url='../../admin/Common_login/Login_c/check_user_post';					
		//https://online-order.baumalight.com/admin/Common_login/Login_c/check_user_post
		//var url='https://online-order.baumalight.com/online-order/';
		var form = $('<form action="'+url+'" method="post">' +
		'<input type="hidden" name="username_for_new_login" value="'+user_session+'"/>'+
		'<input type="hidden" name="sec_account" value="<?php if(isset($_SESSION['secondary_user_all'])){ echo $_SESSION['secondary_user_all'];} else{ echo ""; } ?>">'+'<input type="hidden" name="l_type" value="suddenshipping"/>'
		+'</form>');
		$('body').append(form);
		form.submit();
	}

</script>