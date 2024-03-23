<?php
include_once '../inc/init.php';

include "essentials/header_individual.php";

if(!isset($_SESSION['user_id']))
{
    header('Location:login.php','_self');
}
else
{
    if(isset($_SESSION['user_type']))
    {
        if(((int)$_SESSION['user_type'])==1)
        {
            header('Location:user_dashboard.php','_self');      
        }
    } 
}

if(isset($_SESSION['flag']))
{
	
}
else
{
  $_SESSION['flag'] = 0;
}
$_SESSION['flag']=0;

?>

<script type="text/javascript">
    var text = ''; 
    var dtext = ''; 
    var stext = ''; 
    var sdtext = ''; 
</script>


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

.tooltip::before {
	background-color:transparent!important;
}

.tooltip{
	background-color:transparent!important;
}
</style>

		 <div class="panel-body" style="margin-bottom:30px;">
			<div class="col-md-12 single_element" style="padding:30px;">
				<!-- top subbar -->
			<form name="form_search" id="form_search" method="post" action="#">
			 <div class="row row_border">
				<div class="col-md-2">
					<div class="form-group">
						<select class="form-control" name="select_type" id="select_type">
							<option value="0" selected>User Name</option>
							<option value="1">User Type</option>
						</select>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter Name to Search" name="txtsearch" 
						id="txtsearch" value="" onkeyup="get_search_data()"/>
					</div>
				</div>
				
				<div class="col-md-6">
				
					<input type="button" name="search"  onclick="get_search_data()" class="btn btn-success bord" value="Search" />
					<!-- glyphicon glyphicon-search -->
				
					<input type="submit" name="all_check" style="display:none" onclick="get_check_list()" class="btn btn-primary bord" id="save_id" value="Save" />
					
					<input type="button" style="display:none" disabled class="btn btn-primary bord" id="save_id2" value="Save" />
					
					<input type="button" name="edit_btn" style="display:" onclick="get_edit_list()" class="btn btn-primary bord edit_btn" id="edit_btn" value="Edit" />
				
					<form class="form" method="POST">
						<input type="submit" name="clear"  class="btn btn-secondary bord" value="Cancel" />
					</form>                                
				
				</div>
			 </div>
			</form>
								
				
      	<div class="row" style="margin-top:20px;" >
	<div class="col-md-12 table_area" style="background-color:#fff;padding:10px">	
		<div style="text-align:center;">
			<h4>List of Users</h4>
		</div>
	

	<div class='table table-responsive'>
	<input type="text" id="temp" style="display: none;">  
                  <div id="myBar"></div>
                  <form method='POST' action='save_single.php' id='frm_s'>
                    <table id="table_id" class="table  table-striped table-bordered overflow-auto">
                        <thead class="tfont t-head">
                          <tr>
                              <th>User<span style="visibility:hidden">_</span>Name<span style="visibility:hidden">_</span>and<span style="visibility:hidden">_</span>Email</th>
                              <th>User<span style="visibility:hidden">_</span>Type</th>
							  
							  <th id="11admin">Contact<span style="visibility:hidden">______</span>
                                <p for="cboxp11a" class="hh sfont"><input type='radio' name='chkp11' id='cboxp11a'/>Select_All</p>
                                <p for="cboxp11b" class="hh sfont"><input type='radio' name='chkp11' id='cboxp11b'/>Unselect_All</p>
                              </th>
							  
                              <th id="1admin">Dealer<span style="visibility:hidden">_</span>Admin<span style="visibility:hidden">_____</span><br>
                                <!-- <input type='checkbox' class="hh" name='chkp1' id='cboxp1'/> -->
                                <p for="cboxp1a" class="hh sfont"><input type='radio' name='chkp1' id='cboxp1a' />Select All</p>
                                <p for="cboxp1b" class="hh sfont"><input type='radio' name='chkp1' id='cboxp1b' />Unselect All</p>
                              </th>
							  
							   <th id="7admin">Flow<span style="visibility:hidden">_</span>Pressure<span style="visibility:hidden">_</span>Admin<br> 
                                <!-- <input type='checkbox' name='chkp7' id='cboxp7'/>-->
                                <p for="cboxp7a" class="hh sfont"><input type='radio' name='chkp7' id='cboxp7a'/>Select All</p>
                                <p for="cboxp7b" class="hh sfont"><input type='radio' name='chkp7' id='cboxp7b'/>Unselect All</p>
                               </th>
							 
							   
							   <th id="4admin">Free<span style="visibility:hidden">_</span>Catalog<span style="visibility:hidden">_</span><br> 
                                <!-- <input type='checkbox' name='chkp4' id='cboxp4'/>-->
                                <p for="cboxp4a" class="hh sfont"><input type='radio' name='chkp4' id='cboxp4a'/>Select All</p>
                                <p for="cboxp4b" class="hh sfont"><input type='radio' name='chkp4' id='cboxp4b'/>Unselect All</p>
                               </th>
							   
							    <th id="8admin">Labor<span style="visibility:hidden">_</span>Time<span style="visibility:hidden">_</span>Admin<br> 
                                <!-- <input type='checkbox' name='chkp8' id='cboxp8'/>-->
                                <p for="cboxp8a" class="hh sfont"><input type='radio' name='chkp8' id='cboxp8a'/>Select All</p>
                                <p for="cboxp8b" class="hh sfont"><input type='radio' name='chkp8' id='cboxp8b'/>Unselect All</p>
                               </th>
							   
							   
							  <th id="6admin">Motor<span style="visibility:hidden">_</span>Option<span style="visibility:hidden">_</span>Admin<br> 
                                <!-- <input type='checkbox' name='chkp6' id='cboxp6'/>-->
                                <p for="cboxp6a" class="hh sfont"><input type='radio' name='chkp6' id='cboxp6a'/>Select All</p>
                                <p for="cboxp6b" class="hh sfont"><input type='radio' name='chkp6' id='cboxp6b'/>Unselect All</p>
                               </th>
							  
							   <th id="5admin">Online<span style="visibility:hidden">_</span>Price<span style="visibility:hidden">_</span><br> 
                                <!-- <input type='checkbox' name='chkp5' id='cboxp5'/>-->
                                <p for="cboxp5a" class="hh sfont"><input type='radio' name='chkp5' id='cboxp5a'/>Select All</p>
                                <p for="cboxp5b" class="hh sfont"><input type='radio' name='chkp5' id='cboxp5b'/>Unselect All</p>
                               </th>
							   
							   
                              <th id="2admin">Sudden<span style="visibility:hidden">_</span>Shipping<span style="visibility:hidden">_</span><br> 
                                <!-- <input type='checkbox' name='chkp2' id='cboxp2'/>-->
                                <p for="cboxp2a" class="hh sfont"><input type='radio' name='chkp2' id='cboxp2a'/>Select All</p>
                                <p for="cboxp2b" class="hh sfont"><input type='radio' name='chkp2' id='cboxp2b'/>Unselect All</p>
                              </th>
							  <th id="3admin">Support<span style="visibility:hidden">_</span>Document<br> 
                                <!-- <input type='checkbox' name='chkp3' id='cboxp3'/>-->
                                <p for="cboxp3a" class="hh sfont"><input type='radio' name='chkp3' id='cboxp3a'/>Select All</p>
                                <p for="cboxp3b" class="hh sfont"><input type='radio' name='chkp3' id='cboxp3b'/>Unselect All</p>
                               </th>
							 
							  <th id="9admin">Support<span style="visibility:hidden">_</span>E<span style="visibility:hidden">_</span>Mail<span style="visibility:hidden">_</span><br> 
                                <!-- <input type='checkbox' name='chkp9' id='cboxp9'/>-->
                                <p for="cboxp9a" class="hh sfont"><input type='radio' name='chkp9' id='cboxp9a'/>Select All</p>
                                <p for="cboxp9b" class="hh sfont"><input type='radio' name='chkp9' id='cboxp9b'/>Unselect All</p>
                              </th>
							  
							 <th id="10admin">Teeth<span style="visibility:hidden">_</span>Option<br> 
                                <!-- <input type='checkbox' name='chkp10' id='cboxp10'/>-->
                                <p for="cboxp10a" class="hh sfont"><input type='radio' name='chkp10' id='cboxp10a'/>Select_All</p>
                                <p for="cboxp10b" class="hh sfont"><input type='radio' name='chkp10' id='cboxp10b'/>Unselect_All</p>
                              </th>
							  
							  
							  
							 <!--  <th id="caction">Permission<br> 
                                <input type='checkbox' name='chk' id='cbox'/>
                              </th> -->
                              
							</tr>
                          </thead>
                              <tbody id="allusers" class="tfont">

                              </tbody>
                    </table>
                    </form>
                </div>
</div>
</div>

							
 </div>
 
 </div> <!-- panel-body end -->
								
<?php 
  include "essentials/footer.php";
?>
	
<script type="text/javascript">

	$( ".tooltip" ).mouseenter(function() {
	  //$( "#log" ).append( "Handler for .mouseout() called." );
	  alert('Click on Edit Button to Update');
	});

	// to give alert when click on disabled td
	function give_alert(){
		alert('Click on Edit Button to Update');
	}
	
  $(document).ready(function()
  {
    if($('#temp').val()==0)
    {
      $(".hh").hide();
      document.getElementById("save_id").style.display = "none";      
    }
  var lim = 9;
  var off = 0;
  var inc = 0;
    $.ajax({
    type: "POST",
    url: 'allusers.php',
    data: {lim,off},
    cache: false,
    success:function(response)
    {
      // alert(response);
      if(($('#temp').val())!="")
      {

      }else
      {
          $('#allusers').html(response);
      }
    }
    });
    
  $(window).scroll(function() {
          if(($('#temp').val())!="")
          {

          }
          else
          {  
              if($(window).scrollTop() + $(window).height() >= $(document).height())
              {
                lim = 10;
                $.ajax({
                type: "POST",
                url: 'allusers.php',
                data: {lim,inc},
                cache: false,
                success:function(response)
                { 
                  inc++;
                  $('#allusers').append(response);
                }
                });
              }
          }
    });
	
	
  });
  
 
   // $('#temp').val(1);
   $('#cbox').click(function()
   {    
    if($(this).prop("checked") == true)
    {
        $('#cbox').prop('checked',true);
        var txts = "all";
        $.ajax({
                type:'POST',
                url:'make_all_checked.php',
                data:{txts},
                success : function(data)
                {
                    $('#temp').val(1);
                    $('#allusers').html(data);
                }
              });
    }
    else if($(this).prop("checked") == false)
    {
      $('#cbox').prop('checked',false);
      var txts = "all";
      $.ajax({
              type:'POST',
              url:'delete_all_checked.php',
              data:{txts},
              success : function(data)
              {
                $('#temp').val(1);
                $('#allusers').html(data);
              }
            });
    }   
   });
    $('#cboxp1').click(function()
    {    
        show_save();
        if($(this).prop("checked") == true)
        {
            append_click_list(5);
            // $('#cboxp2').prop('checked',true);
            // var txts = "6";
            // make_all_change(txts);
        }
        else if($(this).prop("checked") == false)
        {
            delete_click_list(5);
            // $('#cboxp2').prop('checked',false);
            // var txts = "6";
            // delete_all_changes(txts);
        }   
    });
    $('#cboxp1a').click(function()
    {    
        show_save();
        append_click_list(5);  
        select_all(5);
    });
    $('#cboxp1b').click(function()
    {    
        show_save();
        delete_click_list(5);
        deselect_all(5);
    });
    $('#cboxp2a').click(function()
    {    
        show_save();
        append_click_list(6);  
        select_all(6);
    });
    $('#cboxp2b').click(function()
    {    
        show_save();
        delete_click_list(6);
        deselect_all(6);
    });
    $('#cboxp3a').click(function()
    {    
        show_save();
        append_click_list(7);  
        select_all(7);
    });
    $('#cboxp3b').click(function()
    {    
        show_save();
        delete_click_list(7);
        deselect_all(7);
    });
    $('#cboxp4a').click(function()
    {    
        show_save();
        append_click_list(8);  
        select_all(8);
    });
    $('#cboxp4b').click(function()
    {    
        show_save();
        delete_click_list(8);
        deselect_all(8);
    });
    $('#cboxp5a').click(function()
    {    
        show_save();
        append_click_list(9); 
        select_all(9); 
    });
    $('#cboxp5b').click(function()
    {    
        show_save();
        delete_click_list(9);
        deselect_all(9);
    });
    $('#cboxp6a').click(function()
    {    
        show_save();
        append_click_list(10);
        select_all(10);  
    });
    $('#cboxp6b').click(function()
    {    
        show_save();
        delete_click_list(10);
        deselect_all(10);
    });
    $('#cboxp7a').click(function()
    {    
        show_save();
        append_click_list(11);
        select_all(11);  
    });
    $('#cboxp7b').click(function()
    {    
        show_save();
        delete_click_list(11);
        deselect_all(11);
    });
    $('#cboxp8a').click(function()
    {    
        show_save();
        append_click_list(12);
        select_all(12);  
    });
    $('#cboxp8b').click(function()
    {    
        show_save();
        delete_click_list(12);
        deselect_all(12);
    });
    $('#cboxp9a').click(function()
    {    
        show_save();
        append_click_list(13);
        select_all(13);  
    });
    $('#cboxp9b').click(function()
    {    
        show_save();
        delete_click_list(13);
        deselect_all(13);
    });
    $('#cboxp10a').click(function()
    {    
        show_save();
        append_click_list(14);
        select_all(14);  
    });
    $('#cboxp10b').click(function()
    {    
        show_save();
        delete_click_list(14);
        deselect_all(14);
    });
    $('#cboxp11a').click(function()
    {    
        show_save();
        append_click_list(15);
        select_all(15);  
    });
    $('#cboxp11b').click(function()
    {    
        show_save();
        delete_click_list(15);
        deselect_all(15);
    });
   

    
   
   function append_click_list(a) 
   {
        var x =0;
        x = text.search(a);
        if((x)==(-1))
        {
            text = text +"|"+a;    
        }

        var y = '';
        y = dtext.split("|");
        y = y.sort(function (f, g) {  return f - g;  });
        var c = '';
        for (var i = 0; i< (y.length); i++) 
        {
            if(y[i]==a)
            {
            
            }
            else
            {
                c = c+"|"+y[i];
            }
        }
        if(c==0)
        {
            dtext = '';
        }else
        {
            dtext = c;   
        }
   }
   function delete_click_list(a) 
   {
        var y = '';
        y = text.split("|");
        y = y.sort(function (f, g) {  return f - g;  });
        var c = '';
        for (var i = 0; i< (y.length); i++) 
        {
            if(y[i]==a)
            {
            
            }
            else
            {
                c = c+"|"+y[i];
            }
        }
        if(c==0)
        {
            text = '';
        }else
        {
            text = c;   
        }

        var x1 =0;
        x1 = dtext.search(a);
        if((x1)==(-1))
        {
            dtext = dtext +"|"+a;    
        }

   }
   
    function show_save() 
   {
       //document.getElementById("save_id").style.display = "block";
		$('#save_id').show();
   }
   
   function get_check_list() 
   {
        var temp = '';
        var txts = text;
        var dtxts = dtext;
        var stxts = stext;
        var sdtxts = sdtext;
        
        //to sort | symbol and numbers also
        var y = '';
        y = txts.split("|");
        y = y.sort(function (f, g) {  return f - g;  });
        var c = '';
        for (var i = 0; i< (y.length); i++) 
        {
            if(y[i]!='')
            {
                c = c+"|"+y[i];
            }
        }
        txts = c; 
        //end 
        //to sort | symbol and numbers also 
        var y1 = '';
        y1 = dtxts.split("|");
        y1 = y1.sort(function (f, g) {  return f - g;  });
        var c1 = '';
        for (var i = 0; i< (y1.length); i++) 
        {
            if(y1[i]!='')
            {
                c1 = c1+"|"+y1[i];
            }
        }
        dtxts = c1;
        //end
         //alert("-->txts"+txts+"-->dtxts"+dtxts+"-->stxts"+stxts+"-->stxts"+sdtxts);
        // $("#frm_s").submit();

		
        document.getElementById("myBar").style.display = "block";
        const element = document.getElementById("myBar");   
        let width = 0;
        const id = setInterval(frame, 20);
        function frame() 
        {
            if (width == 97) 
            {
                clearInterval(id);
            } 
            else 
            {
                width++; 
                element.style.width = width + '%'; 
            }
        }
        swal("Please Wait, Update In Process");
		
		$('#save_id').hide();
		
		$('#save_id2').show();
		
		var search_input=$('#txtsearch').val();
		var select_type=$('#select_type').val();
		
		//document.getElementById("save_id").disabled = true; 
		
		
		if(search_input==''){
			
			  $.ajax({
                type:'POST',
                url:'save_whole_page.php',
                data:{txts,dtxts,stxts,sdtxts,select_type,search_input},
                success : function(data)
                {
					
                    document.getElementById("myBar").style.display = "none";
					
                    swal("Changes Updated!", "", "success");
					
                    // alert(data);
                    $("#cboxp1a").prop("checked", false);
                    $("#cboxp1b").prop("checked", false);
                    $("#cboxp2a").prop("checked", false);
                    $("#cboxp2b").prop("checked", false);
                    $("#cboxp3a").prop("checked", false);
                    $("#cboxp3b").prop("checked", false);
                    $("#cboxp4a").prop("checked", false);
                    $("#cboxp4b").prop("checked", false);
                    $("#cboxp5a").prop("checked", false);
                    $("#cboxp5b").prop("checked", false);
                    $("#cboxp6a").prop("checked", false);
                    $("#cboxp6b").prop("checked", false);
                    $("#cboxp7a").prop("checked", false);
                    $("#cboxp7b").prop("checked", false);
                    $("#cboxp8a").prop("checked", false);
                    $("#cboxp8b").prop("checked", false);
                    $("#cboxp9a").prop("checked", false);
                    $("#cboxp9b").prop("checked", false);
                    $("#cboxp10a").prop("checked", false);
                    $("#cboxp10b").prop("checked", false);
                    $("#cboxp11a").prop("checked", false);
                    $("#cboxp11b").prop("checked", false);
                    text=dtext=stext=sdtext='';
                    $('#temp').val(1);
					
		
					setTimeout(function(){ 
						window.location.reload();
					}, 2000);
					
                    //$('#allusers').html(data);
					
                }
              });
			 
		}
		else{
        $.ajax({
                type:'POST',
                url:'save_all.php',
                data:{txts,dtxts,stxts,sdtxts},
                success : function(data)
                {
                    document.getElementById("myBar").style.display = "none";
                    swal("Changes Updated!", "", "success");
                    // alert(data);
                    $("#cboxp1a").prop("checked", false);
                    $("#cboxp1b").prop("checked", false);
                    $("#cboxp2a").prop("checked", false);
                    $("#cboxp2b").prop("checked", false);
                    $("#cboxp3a").prop("checked", false);
                    $("#cboxp3b").prop("checked", false);
                    $("#cboxp4a").prop("checked", false);
                    $("#cboxp4b").prop("checked", false);
                    $("#cboxp5a").prop("checked", false);
                    $("#cboxp5b").prop("checked", false);
                    $("#cboxp6a").prop("checked", false);
                    $("#cboxp6b").prop("checked", false);
                    $("#cboxp7a").prop("checked", false);
                    $("#cboxp7b").prop("checked", false);
                    $("#cboxp8a").prop("checked", false);
                    $("#cboxp8b").prop("checked", false);
                    $("#cboxp9a").prop("checked", false);
                    $("#cboxp9b").prop("checked", false);
                    $("#cboxp10a").prop("checked", false);
                    $("#cboxp10b").prop("checked", false);
                    $("#cboxp11a").prop("checked", false);
                    $("#cboxp11b").prop("checked", false);
                    text=dtext=stext=sdtext='';
                    $('#temp').val(1);
					
					setTimeout(function(){ 
						window.location.reload();
					}, 2000);
					
                    //$('#allusers').html(data);
                }
              });
			  
   }
   }
   function select_all(a) 
   {
        if(a=='5')
        {
            $(".p1").prop("checked",true);
        }
        else if(a=='6')
        {
            $(".p2").prop("checked",true);
        }
        else if(a=='7')
        {
            $(".p3").prop("checked",true);
        }
        else if(a=='8')
        {
            $(".p4").prop("checked",true);
        }
        else if(a=='9')
        {
            $(".p5").prop("checked",true);
        }
        else if(a=='10')
        {
            $(".p6").prop("checked",true);
        }
        else if(a=='11')
        {
            $(".p7").prop("checked",true);
        }
        else if(a=='12')
        {
            $(".p8").prop("checked",true);
        }
        else if(a=='13')
        {
            $(".p9").prop("checked",true);
        }
        else if(a=='14')
        {
            $(".p10").prop("checked",true);
        }
        else if(a=='15')
        {
            $(".p11").prop("checked",true);
        }
   }
   function deselect_all(a) 
   {
        if(a=='5')
        {
            $(".p1").prop("checked",false);
        }
        else if(a=='6')
        {
            $(".p2").prop("checked",false);
        }
        else if(a=='7')
        {
            $(".p3").prop("checked",false);
        }
        else if(a=='8')
        {
            $(".p4").prop("checked",false);
        }
        else if(a=='9')
        {
            $(".p5").prop("checked",false);
        }
        else if(a=='10')
        {
            $(".p6").prop("checked",false);
        }
        else if(a=='11')
        {
            $(".p7").prop("checked",false);
        }
        else if(a=='12')
        {
            $(".p8").prop("checked",false);
        }
        else if(a=='13')
        {
            $(".p9").prop("checked",false);
        }
        else if(a=='14')
        {
            $(".p10").prop("checked",false);
        }
        else if(a=='15')
        {
            $(".p11").prop("checked",false);
        }
   }
   function make_all_change(a) 
   { 
      var txts = a;
      $.ajax({
                type:'POST',
                url:'make_all_checked.php',
                data:{txts},
                success : function(data)
                {
                    $('#temp').val(1);
                    $('#allusers').html(data);
                }
              });
   }
   function delete_all_changes(a) 
   {
      var txts = a;
      $.ajax({
              type:'POST',
              url:'delete_all_checked.php',
              data:{txts},
              success : function(data)
              {
                $('#temp').val(1);
                $('#allusers').html(data);
              }
            });
   }
</script>
<?php
if(isset($_POST['clear']))
{
    $_SESSION['flag']=0;
    if(isset($_SESSION['search']))
    {
      unset($_SESSION['search']);
    }
    ?>
      <script>
      window.open('adminpermission.php','_self');
      </script>
    <?php
}
if(isset($_POST['search']))
{
    $search=$_POST['txtsearch'];
    
    if(empty($search))
    { 
        ?>
          <script>
          alert('please enter name to search');
          window.open('adminpermission.php','_self');
          </script>
        <?php
    }else
    {
        $_SESSION['flag']=1;
        $_SESSION['search'] = $search;
    }
} 
?>
<script type="text/javascript">
   function get_search_data()
    {
        var search = $('#txtsearch').val();
        var s_type = $('#select_type').val();
        var x=search.length;
		
		$(".edit_btn").show();
		
        if(search!= "")
        {
          if(s_type==0)
          {
                $.ajax({
                  type:'POST',
                  url:'search_user_list.php',
                  data:{search,s_type},
                  success : function(data)
                  {
                    $('#temp').val(1);
                    $(".hh").show();
                    $('#allusers').html(data);
					
					
                    // alert(data);
                  }
                });
          }
          else
          {
                $.ajax({
                  type:'POST',
                  url:'search_user_list.php',
                  data:{search,s_type},
                  success : function(data)
                  {
                    $('#temp').val(1);
                    $(".hh").show();
                    $('#allusers').html(data);
                    // alert(data);
                  }
                });
            
          }
        }else
        {
          alert("Enter data to search");
		  
		 
        }
   }
   
   
      function get_edit_list()
    {
        var search = $('#txtsearch').val();
        var s_type = $('#select_type').val();
        var x=search.length;
		
		$(".edit_btn").hide();
		
        if(search!= "")
        {
          if(s_type==0)
          {
                $.ajax({
                  type:'POST',
                  url:'search_user_edit_list.php',
                  data:{search,s_type},
                  success : function(data)
                  {
					 
                    $('#temp').val(1);
                    $(".hh").show();
                    $('#allusers').html(data);
                    // alert(data);
                  }
                });
          }
          else
          {
                $.ajax({
                  type:'POST',
                  url:'search_user_edit_list.php',
                  data:{search,s_type},
                  success : function(data)
                  {
                    $('#temp').val(1);
                    $(".hh").show();
                    $('#allusers').html(data);
                    // alert(data);
                  }
                });
            
          }
        }else
        {
		
		//alert('Large Database- Refine your Search first before Editing')
			
		   $.ajax({
                  type:'POST',
                  url:'search_user_edit_list.php',
                  data:{search,s_type},
                  success : function(data)
                  {
                    $('#temp').val(1);
                    $(".hh").show();
                    $('#allusers').html(data);
                    // alert(data);
                  }
                });
		  
		  
        }
   }
   
   
   function refresh()
    {
        $('#temp').val('');
        $(".hh").hide();
        window.open('adminpermission.php','_self');
    }
</script>
<script type="text/javascript">
  function getclickdata(arg) 
  {
      var a = arg;
      var table = a.substring(0,3);
      var t = a.substring(2,3);
      var id = a.substring(3);
      // c1M2653
      if($('#'+table+id+'').prop("checked") == true)
      {
          $.ajax({
                    type:'POST',
                    url:'change_m_row.php',
                    data:{t,id},
                    success : function(data)
                    {
                      $('#temp').val(1);
                      $('#'+table+id+'').prop('checked',true);
                      $('#allusers').html(data);
                    }
                  });  
      }
      else if($('#'+table+id+'').prop("checked") == false)
      {
         $.ajax({
                  type:'POST',
                  url:'change_s_row.php',
                  data:{t,id},
                  success : function(data)
                  {
                    $('#temp').val(1);
                    $('#'+table+id+'').prop('checked',false);
                    $('#allusers').html(data);
                  }
                }); 
      }

  }
  function make_change_in_single_click(arg,t1) 
  {
      var a = arg;
      var table = a.substring(0,3);
      var t = a.substring(2,3);//character to identify which table
      var t1 = t1;//permission number
      var id = a.substring(3);//id for perticular row
      if($('#'+table+id+'').prop("checked") == true)
      {
          $.ajax({
                    type:'POST',
                    url:'change_m_row.php',
                    data:{t,id,t1},
                    success : function(data)
                    {
                      $('#temp').val(1);
                      $('#'+table+id+'').prop('checked',true);
                      $('#allusers').html(data);
                    }
                  });  
      }
      else if($('#'+table+id+'').prop("checked") == false)
      {
         $.ajax({
                  type:'POST',
                  url:'change_s_row.php',
                  data:{t,id,t1},
                  success : function(data)
                  {
                    $('#temp').val(1);
                    $('#'+table+id+'').prop('checked',false);
                    $('#allusers').html(data);
                  }
                }); 
      }
  }
    function getclickdatap1(arg) 
    {
        var t1 = 5;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
        // make_change_in_single_click(arg,t1);

    }
    function getclickdatap2(arg) 
    {
        var t1 = 6;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
        // make_change_in_single_click(arg,t1);
    }
    function getclickdatap3(arg) 
    {
        var t1 = 7;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
    function getclickdatap4(arg) 
    {
        var t1 = 8;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
    function getclickdatap5(arg) 
    {
        var t1 = 9;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
    function getclickdatap6(arg) 
    {
        var t1 = 10;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
    function getclickdatap7(arg) 
    {
        var t1 = 11;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
    function getclickdatap8(arg) 
    {
        var t1 = 12;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
    function getclickdatap9(arg) 
    {
        var t1 = 13;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
    function getclickdatap10(arg) 
    {
        var t1 = 14;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
    function getclickdatap11(arg) 
    {
        var t1 = 15;
        show_save();
        var a = arg;
        var table = a.substring(0,3);
        var id = a.substring(3);
        if($('#'+table+id+'').prop("checked") == true)
        {
            sappend_click_list(arg);
        }
        else if($('#'+table+id+'').prop("checked") == false)
        {
            sdelete_click_list(arg);
        }
      // make_change_in_single_click(arg,t1);
    }
     function sappend_click_list(a) 
   {
        var x =0;
        x = stext.search(a);
        if((x)==(-1))
        {
            stext = stext +"|"+a;    
        }

        var y = '';
        y = sdtext.split("|");
        y = y.sort(function (f, g) {  return f - g;  });
        var c = '';
        for (var i = 0; i< (y.length); i++) 
        {
            if(y[i]==a)
            {
            
            }
            else
            {
                c = c+"|"+y[i];
            }
        }
        if(c==0)
        {
            sdtext = '';
        }else
        {
            sdtext = c;   
        }
   }
    function sdelete_click_list(a) 
   {
        var y = '';
        y = stext.split("|");
        y = y.sort(function (f, g) {  return f - g;  });
        var c = '';
        for (var i = 0; i< (y.length); i++) 
        {
            if(y[i]==a)
            {
            
            }
            else
            {
                c = c+"|"+y[i];
            }
        }
        if(c==0)
        {
            stext = '';
        }else
        {
            stext = c;   
        }

        var x1 =0;
        x1 = sdtext.search(a);
        if((x1)==(-1))
        {
            sdtext = sdtext +"|"+a;    
        }

   }

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
if(isset($_SESSION['status']))
{ ?>
        <script type="text/javascript">
            swal("<?php echo $_SESSION['status']; ?>");
        </script>
    <?php 
}
unset($_SESSION['status'])
?>
