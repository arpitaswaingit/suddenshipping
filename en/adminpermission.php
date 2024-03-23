
<?php
include_once '../inc/init.php';
include "essentials/header_individual.php";
if(!isset($_SESSION['user_id']))
{
    header('Location:login.php','_self');
}
else
{
    if(($_SESSION['user']['user_name'])=="mennobauman")
    {      
    }     
    else
    {    
        // header('Location:user_dashboard.php','_self');    
        echo "<script>window.location.href ='user_dashboard.php';</script>";      
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
	//box-shadow: 2px 5px 5px 5px lightgrey;
	background-color: #fff;
}

.table_area{
	box-shadow: 2px 5px 5px 5px lightgray;	
}

 
		
.tfont .sfont{
	color:rgba(0,0,0,0.9);
}
@media (min-width: 768px) and (max-width: 1024px){
            .tfont .sfont{
				font-size:9px;
				}
        }
		
 /* Media Query for Laptops and Desktops */
        @media (min-width: 1025px) and (max-width: 1280px){
            .tfont .sfont{
				font-size:8px;
				}
				
        }
	 /* Media Query for Large screens */
        @media (min-width: 1281px) {
           tfont .sfont{
				font-size:10px;
				}
        }	
		
.tfont th{
	font-size:14px;	
}
tbody{
	text-align:left;
}
table tr th:first-child, table tr td:first-child {
    padding-left:15px;
}

.tooltip_click::before {
	//background-color:#fff!important;
}

.tooltip_click{
	background-color:transparent!important;
	width:20px!important;
	height:25px!important;
	//display: block!important;
	cursor:pointer;
}

</style>

<style>

table td {
  /* For cells, apply the border to one of each side only (right but not left, bottom but not top) */
  border-bottom: 2px solid;
  border-right: 2px solid;
}

body::-webkit-scrollbar { width: 0 !important }

@media only screen and (min-width: 3100px) and (max-width: 5000px) {
    .fixTableHead {
      //overflow-y: auto;
      height:700px;
    }	
}



@media only screen and (min-width: 1610px) and (max-width: 3099px) {
    .fixTableHead {
      //overflow-y: auto;
      height:740px;
    }	
}



@media only screen and (min-width: 1380px) and (max-width: 1600px) {
    .fixTableHead {
      //overflow-y: auto;
      height:600px;
    }	
}


@media only screen and (min-width: 700px) and (max-width: 1366px) {
    .fixTableHead {
      //overflow-y: auto;
      height:440px;	  
    }	
}

    .fixTableHead thead th{
      position: sticky;
      top: 0;
	  border-top: 2px solid gray;
	  border-bottom: 2px solid gray;
	  border-right: 2px solid gray;
    }
    table {
      //border-collapse: collapse;        
      border-collapse: separate; /* Don't collapse */
	  width: 100%;
    }
    th {
      //background: #ABDD93;
	  background: #fff;
    }
	
	table th
	{
	  /* Apply a left border on the first <td> or <th> in a row */
	  border-top: 1px solid gray!important;
	}
	
	.col-md-3,.col-md-2{
		height:45px;
	}
	
	thead th{
		background-color:#efeded!important;
		vertical-align:top!important;
	}
	
	td{
		text-align:center!important;
		
	}
	td:first-child { 
		text-align: left!important;
	};
	
	
	td:not(:nth-child(2n)){ 
		text-align: left!important;
	};
	
	.table thead th {
		padding:0px!important;
	}
  </style>
	 <div class="panel-body" style="margin-bottom:30px;">
			<div class="col-md-12 single_element" style="padding:30px;padding-top:3px">
				<!-- top subbar -->
			
				<div class="row" >
				<form name="form_search" id="form_search" method="post" action="#"  style="margin-bottom:0px;">
				<div class="col-md-12 table_area" style="background-color:#fff;padding:5px 10px;">	
				
				<div class="col-md-3" style='padding:0px 3px 0px 0px;'>
					<div class="form-group">
						<h2 style='margin-bottom:5px'><a href="welcomelogin.php"><i class="fa fa-arrow-circle-left fafa_arrow_style"></i>
					</a> <span class="heading_style" style="margin-bottom:5px;margin-right: 10px;">USER LIST</span>&nbsp;&nbsp;
					<a href="add_newaccount.php" class="btn btn-info" >Add New User</a></h2>
			 
					</div>
				</div>
				
				<div class="col-md-2" style='padding:0px 3px;'>
					<div class="form-group">
						<select class="form-control" name="select_type" id="select_type" onchange="change_placeholder(this.value)" >
							<option value="0" selected>User Name</option>
							<option value="1">User Type</option>
						</select>
					</div>
				</div>
				
				
				<div class="col-md-3" style='padding:0px 3px;'>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter Name to Search" name="txtsearch" 
						id="txtsearch" value="" onkeyup="get_search_data()" />
					</div>
				</div>
				<div class="col-md-4" style='padding:0px 3px;'>
					<input type="button" name="search"  onclick="get_search_data()" class="btn btn-success bord" value="Search" />
					<!-- glyphicon glyphicon-search -->
					<input type="button" name="all_check" style="display:none;" onclick="get_check_list()" class="btn btn-primary bord" id="save_id" value="Save" />
					
					<input type="button" style="display:none" disabled class="btn btn-primary bord" id="save_id2" value="Save"  />
					
					<input type="button" name="edit_btn" style="display:" onclick="get_edit_list()" class="btn btn-primary bord edit_btn" id="edit_btn" value="Edit"  />
					
					<a href="adminpermission.php"><input type="button" name="clear"  class="btn btn-secondary bord" value="Cancel"  /></a>
				
					
				</div>
				</form> 
				<div class='table table-responsive table_container' id='table_container'>
					<input type="text" id="temp" style="display: none;">  
                  <div id="myBar"></div>
                  <form method='POST' action='save_single.php' id='frm_s'>
				  <div class="fixTableHead">
                    <table id="table_id" class="table table-striped table-bordered overflow-auto">
                        <thead class="tfont t-head" >
                          <tr >
                              <th>User Name & Email</th>
                              <th>User Type</th>
							  
							  <th id="11admin">Contact<span style='visibility:hidden'>______</span><br/><br/>
                                <p for="cboxp11a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp11' id='cboxp11a'/>Select&nbsp;All</p>
                                <p for="cboxp11b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp11' id='cboxp11b'/>Unselect&nbsp;All</p>
                              </th>
							  
                              <th id="1admin">Dealer Admin<span style='visibility:hidden'>______</span><br>
                                <!-- <input type='checkbox' class="hh" name='chkp1' id='cboxp1'/> -->
                                <p for="cboxp1a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp1' id='cboxp1a' />Select&nbsp;All</p>
                                <p for="cboxp1b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp1' id='cboxp1b' />Unselect&nbsp;All</p>
                              </th>
							  
							  <th id="13admin">Financial Calculator<span style='visibility:hidden'>___</span><br> 
                                <!-- <input type='checkbox' name='chkp6' id='cboxp6'/>-->
                                <p for="cboxp13a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp13' id='cboxp13a'/>Select&nbsp;All</p>
                                <p for="cboxp13b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp13' id='cboxp13b'/>Unselect&nbsp;All</p>
                               </th>


							   <th id="7admin">Flow Pressure Admin<span style='visibility:hidden'>______</span><br> 
                                <!-- <input type='checkbox' name='chkp7' id='cboxp7'/>-->
                                <p for="cboxp7a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp7' id='cboxp7a'/>Select&nbsp;All</p>
                                <p for="cboxp7b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp7' id='cboxp7b'/>Unselect&nbsp;All</p>
                               </th>
							 
							   
							   <th id="4admin">Free Catalog<span style='visibility:hidden'>______</span><br> 
                                <!-- <input type='checkbox' name='chkp4' id='cboxp4'/>-->
                                <p for="cboxp4a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp4' id='cboxp4a'/>Select&nbsp;All</p>
                                <p for="cboxp4b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp4' id='cboxp4b'/>Unselect&nbsp;All</p>
                               </th>
							   
							    <th id="8admin">Labor Time Admin<span style='visibility:hidden'>______</span><br> 
                                <!-- <input type='checkbox' name='chkp8' id='cboxp8'/>-->
                                <p for="cboxp8a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp8' id='cboxp8a'/>Select&nbsp;All</p>
                                <p for="cboxp8b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp8' id='cboxp8b'/>Unselect&nbsp;All</p>
                               </th>
							   
                               <th id="12admin">Mini<span style='visibility:hidden'>_</span>Skidsteer Tool<span style='visibility:hidden'>_</span>Searches<span style='visibility:hidden'>______</span><br> 
                                <!-- <input type='checkbox' name='chkp6' id='cboxp6'/>-->
                                <p for="cboxp12a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp12' id='cboxp12a'/>Select&nbsp;All</p>
                                <p for="cboxp12b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp12' id='cboxp12b'/>Unselect&nbsp;All</p>
                               </th>

							  <th id="6admin">Motor Option Admin<span style='visibility:hidden'>______</span><br> 
                                <!-- <input type='checkbox' name='chkp6' id='cboxp6'/>-->
                                <p for="cboxp6a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp6' id='cboxp6a'/>Select&nbsp;All</p>
                                <p for="cboxp6b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp6' id='cboxp6b'/>Unselect&nbsp;All</p>
                               </th>
							  
							   <th id="5admin">Online Price<span style='visibility:hidden'>_________</span><br> 
                                <!-- <input type='checkbox' name='chkp5' id='cboxp5'/>-->
                                <p for="cboxp5a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp5' id='cboxp5a'/>Select&nbsp;All</p>
                                <p for="cboxp5b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp5' id='cboxp5b'/>Unselect&nbsp;All</p>
                               </th>
							   
							   <th id="14admin">Online Product Registration<span style='visibility:hidden'>______</span><br> 
                                <!-- <input type='checkbox' name='chkp5' id='cboxp5'/>-->
                                <p for="cboxp14a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp14' id='cboxp14a'/>Select&nbsp;All</p>
                                <p for="cboxp14b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp14' id='cboxp14b'/>Unselect&nbsp;All</p>
                               </th>
							   
							   
                              <th id="2admin">Sudden Shipping<span style='visibility:hidden'>____</span><br> 
                                <!-- <input type='checkbox' name='chkp2' id='cboxp2'/>-->
                                <p for="cboxp2a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp2' id='cboxp2a'/>Select&nbsp;All</p>
                                <p for="cboxp2b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp2' id='cboxp2b'/>Unselect&nbsp;All</p>
                              </th>
							  <th id="3admin">Support Document<span style='visibility:hidden'>____</span><br> 
                                <!-- <input type='checkbox' name='chkp3' id='cboxp3'/>-->
                                <p for="cboxp3a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp3' id='cboxp3a'/>Select&nbsp;All</p>
                                <p for="cboxp3b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp3' id='cboxp3b'/>Unselect&nbsp;All</p>
                               </th>
							 
							  <th id="9admin">Support E_Mail<span style='visibility:hidden'>______</span><br> 
                                <!-- <input type='checkbox' name='chkp9' id='cboxp9'/>-->
                                <p for="cboxp9a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp9' id='cboxp9a'/>Select&nbsp;All</p>
                                <p for="cboxp9b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp9' id='cboxp9b'/>Unselect&nbsp;All</p>
                              </th>
							  
							 <th id="10admin">Teeth Option<span style='visibility:hidden'>______</span><br> 
                                <!-- <input type='checkbox' name='chkp10' id='cboxp10'/>-->
                                <p for="cboxp10a" class="hh sfont"><input class="radio_enable" type='radio' name='chkp10' id='cboxp10a'/>Select&nbsp;All</p>
                                <p for="cboxp10b" class="hh sfont"><input class="radio_enable" type='radio' name='chkp10' id='cboxp10b'/>Unselect&nbsp;All</p>
                              </th>
							</tr>
                          </thead>
                              <tbody id="allusers" class="tfont">

                              </tbody>
                    </table>
						</div>
                    </form>
                </div>
				<label id='ccount'></label>
				</div>
				</div>

			</div>

		</div> <!-- panel-body end -->

								
<?php 
  include "essentials/footer.php";
?>
	
<script type="text/javascript">
/*
$('.tooltip_click').hover(function(){
    $(this).css('cursor','pointer').attr('title', 'Click on Edit to Update');
}, function() {
    $(this).css('cursor','auto');
});
*/


function slide(direction){
    var container = document.getElementById('table_container');
    scrollCompleted = 0;
    var slideVar = setInterval(function(){
        if(direction == 'left'){
            container.scrollLeft -= 10;
        } else {
            container.scrollLeft += 10;
        }
        scrollCompleted += 10;
        if(scrollCompleted >= 100){
            window.clearInterval(slideVar);
        }
    }, 50);
}


	$( ".tooltip_click" ).hover(function() {
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
	  $(".radio_enable").attr('disabled','disabled'); //disable.
	  
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
		  sortTable();
          var mytable = document.getElementById('table_id');
          $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
          // alert(mytable.rows.length);
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
				  sortTable();
                  var mytable = document.getElementById('table_id');
                  $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
					sortTable();
                    var mytable = document.getElementById('table_id');
                    $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
				sortTable();
                var mytable = document.getElementById('table_id');
                $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
              }
            });
    }   
   });
   
   
  //to sort table alphabetical order

  
   function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("table_id");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}



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
   

    $('#cboxp12a').click(function()
    {    
        show_save();
        append_click_list(16);
        select_all(16);  
    });
    $('#cboxp12b').click(function()
    {    
        show_save();
        delete_click_list(16);
        deselect_all(16);
    });

     $('#cboxp13a').click(function()
    {    
        show_save();
        append_click_list(17);
        select_all(17);  
    });
    $('#cboxp13b').click(function()
    {    
        show_save();
        delete_click_list(17);
        deselect_all(17);
    });
	
	
	 $('#cboxp14a').click(function()
    {    
        show_save();
        append_click_list(18);
        select_all(18);  
    });
    $('#cboxp14b').click(function()
    {    
        show_save();
        delete_click_list(18);
        deselect_all(18);
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
		//alert(txts + dtxts + stxts + sdtxts + select_type +search_input);
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

                    $("#cboxp12a").prop("checked", false);
                    $("#cboxp12b").prop("checked", false);

					$("#cboxp13a").prop("checked", false);
                    $("#cboxp13b").prop("checked", false);
					
					$("#cboxp14a").prop("checked", false);
                    $("#cboxp14b").prop("checked", false);

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

                    $("#cboxp12a").prop("checked", false);
                    $("#cboxp12b").prop("checked", false);
					
					$("#cboxp13a").prop("checked", false);
                    $("#cboxp13b").prop("checked", false);
					
					$("#cboxp14a").prop("checked", false);
                    $("#cboxp14b").prop("checked", false);

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
        else if(a=='16')
        {
            $(".p12").prop("checked",true);
        }
		else if(a=='17')
        {
            $(".p13").prop("checked",true);
        }
		else if(a=='18')
        {
            $(".p14").prop("checked",true);
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
        else if(a=='16')
        {
            $(".p12").prop("checked",false);
        }
		else if(a=='17')
        {
            $(".p13").prop("checked",false);
        }
		else if(a=='18')
        {
            $(".p14").prop("checked",false);
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
					sortTable();
                    var mytable = document.getElementById('table_id');
                    $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
				sortTable();
                var mytable = document.getElementById('table_id');
                $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
          //alert('please enter name to search');
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
	
	function change_placeholder(value){
		if(value=='0'){
            $('#txtsearch').val('');
			document.getElementsByName('txtsearch')[0].placeholder = 'Enter Name to Search';
		}
		else if(value=='1'){
            $('#txtsearch').val('');
			document.getElementsByName('txtsearch')[0].placeholder = 'Enter User Type to Search';
		}
	}

   function get_search_data(){
        var search = $('#txtsearch').val();
        var s_type = $('#select_type').val();
        var x=search.length;
		
		$(".edit_btn").show();
		/*
        if(search!= "")
        {
            */
           
          if(s_type==0)
          {
                $.ajax({
                  type:'POST',
                  url:'search_user_list.php',
                  data:{search,s_type},
                  success : function(data)
                  {
                    $('#temp').val(1);
                    //$(".hh").show();
                    $('#allusers').html(data);
					sortTable();
					var mytable = document.getElementById('table_id');
                    $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
                    // alert(data);
                  }
                });
          }
          else if(s_type==1)
          {
			  
                $.ajax({
                  type:'POST',
                  url:'search_user_list.php',
                  data:{search,s_type},
                  success : function(data)
                  {
                    $('#temp').val(1);
                    //$(".hh").show();
                    $('#allusers').html(data);
					sortTable();
                    //alert(data);
                    var mytable = document.getElementById('table_id');
                    $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
                  }
                });
            
          }
/*
        }else
        {
          //alert("Enter data to search");
		  
		 
        }
        */
   }
   
   
      function get_edit_list()
    {
		$(".radio_enable"). removeAttr('disabled'); //enable.
		
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
					sortTable();
                    // alert(data);
                    var mytable = document.getElementById('table_id');
                    $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
					sortTable();
                    // alert(data);
                    var mytable = document.getElementById('table_id');
                    $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
					sortTable();
                    // alert(data);
                    var mytable = document.getElementById('table_id');
                    $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
					  sortTable();
                      var mytable = document.getElementById('table_id');
          $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
					sortTable();
                    var mytable = document.getElementById('table_id');
          $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
					  sortTable();
                      var mytable = document.getElementById('table_id');
          $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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
					sortTable();
                    var mytable = document.getElementById('table_id');
          $('#ccount').html("<lable>Count of Rows:"+((mytable.rows.length)-1)+"</lable>");
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


    function getclickdatap12(arg) 
    {
        var t1 = 16;
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

	function getclickdatap13(arg) 
    {
        var t1 = 17;
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
	
	function getclickdatap14(arg) 
    {
        var t1 = 18;
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
