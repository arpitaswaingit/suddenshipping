<?php
include_once '../inc/init.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>support</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
	<nav style="background: black; border: 1px solid black;">
	  <ul>
	    <div><?php include_once 'imgnav.php';?></div>
	    <div style="margin-top: -30px; float:right"><a href="logout.php" class="btn btn-danger">Logout</a></div>
	  </ul>
	</nav>
<style type="text/css">
	.tfont
	{	
		font-family: Arial Black;
		/*letter-spacing: 1px;*/
	}
	.tcenter{
		text-align: center;
		}
	.ycolor
	{
		color:#e8c804;
	}
	.wcolor
	{
		color:#ffff;
	}
</style>
<body style="background: #000 url(../../../img/index_2015/HomepageBackground.jpg) repeat;">
	<div class="container">
		<div class="row">
			<br>
			<div class="col-12 ycolor tcenter tfont" style="font-size: 15px;">SUPPORT</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 wcolor tcenter tfont" style="font-size:18px">MINI SKIDSTEER</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 ycolor tcenter tfont" style="font-size:18px">MANUALS & TECHNICAL DOCUMENTS</div>
		</div>
		<div class="row ">
			<br>
			<div class="col tcenter tfont" style="font-size:12px;"><a href="#" class="ycolor">Owner's Manual</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="ycolor">Service and Instructional Videos</a></div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 wcolor tcenter " style="font-size:13px">Select your model and serial number to see technical documents.</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 tcenter dropdown-mv" style='margin-right:0px;margin-left:0px;background: transparent;'>
				<select name='model' required style='padding:0 5px;border:none;background-color:#000;color:#fff;'>";
        				<option value='' disabled selected>Choose your model</option>
        		</select>
			</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 tcenter" style='background: transparent;'>
				<div class='searchContainer'>
					 	<span class="wcolor">Enter Serial No.</span> 
					 	<input required type='text' placeholder=' Search...' />
					   	<button type='submit' style='border-top-right-radius: 2px;border-bottom-right-radius: 2px; background-color:#737373; color:#000' name='submit' value='search'><i class='glyphicon glyphicon-search'></i></button>
				</div>
			</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 ycolor tcenter tfont" style="font-size:18px">PRODUCT WARRANTY</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 wcolor tcenter " style="font-size:13px; padding:5px;"><p>This product has a 1 year warranty from the date of purchase. This warranty covers parts and labor, but <br> does not cover misuse, negligence, consequential damage or expenses including loss of profit. The engine <br> is only covered under the original manufacturer's warranty.</p></div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 wcolor tcenter " style="font-size:13px; padding:5px;">
				<button type="button" style="color:black;background-color: #e8c804;" class="btn btn-warning" data-toggle="modal" data-target="#loginModal">Login</button> </div>
		</div>


		<div class="row">
			<br>
			<div class="col-12 wcolor tcenter " style="font-size:14px">*Dealer travel time and travel expenses are not covered under warranty</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 ycolor tcenter tfont" style="font-size: 13px;">Warranty Statement</div>
			<br>
			<div class="col-12 ycolor tcenter tfont" style="font-size: 13px;">Warranty Claim Form (English)</div>
			<div class="col-12 ycolor tcenter tfont" style="font-size: 13px;">Warranty Claim Form (Francais)</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 ycolor tcenter tfont" style="font-size:18px">LABOR WARRANTY TIME GUIDE</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 wcolor tcenter " style="font-size:14px">Search in the box below to find the labor allowance for potential warranty issues.</div>
		</div>
		<div class="row">
			<br>
			<div class="col-12 wcolor tcenter" style="font-size:12px">
				<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-sm-2 tcenter">
						<center>
							<table>
							<thead>
								<tr>
									<th>Search:</th>
									<th>
										<select name='model' required class="form-control">
											<option value='' selected> All Fields</option>
		        						</select>
		        					</th>
								</tr>
							</thead>
						</table>
						</center>
						<br>
					</div>
					<div class="col-sm-4">
						<input type="text" name="" class="form-control">
						<br>
		        	</div>
					<div class="col-sm-1">
						<button  class="btn btn-primary" name='submit' value='search'><i class='glyphicon glyphicon-search'></i> Search</button>
						<br>
					</div>
				</div>
				</div>
				<br>
			</div>
		</div>



		<div class="row">
			<br>
			<div class="col-12 ycolor tcenter tfont" style="font-size:20px">SERVICE AND INSTRUCTIONAL VIDEOS</div>
		</div>
		<div class="row">
			<br>
			<div class="col-md-3 wcolor tcenter" style="font-size:12px"><img src="vimg.png" style="height:auto;width: 200px;" /><p class="tcenter">Descriptive title of service video</p></div>
			<div class="col-md-3 wcolor tcenter" style="font-size:12px"><img src="vimg.png" style="height:auto;width: 200px;" /><p class="tcenter">Descriptive title of service video</p></div>
			<div class="col-md-3 wcolor tcenter" style="font-size:12px"><img src="vimg.png" style="height:auto;width: 200px;" /><p class="tcenter">Descriptive title of service video</p></div>
			<div class="col-md-3 wcolor tcenter" style="font-size:12px"><img src="vimg.png" style="height:auto;width: 200px;" /><p class="tcenter">Descriptive title of service video</p></div>
		</div>

	</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="verify.php">
			    <div class="modal-body">
			      	<div class="form-group">
                  <div class="row">
                  	<div class="col-md-2">
                  		<label class="form-group">Username</label>	
                  	</div>
	                  <div class="col-md-9">
	                  	<input type="text" class="form-control" name="uname" placeholder="Enter your user name" />
	                  </div>
	                </div>
              </div>
              <div class="form-group">
                  <div class="row">
                  	<div class="col-md-2">
                  		<label class="form-group">Password</label>	
                  	</div>
	                  <div class="col-md-9">
	                  	 <input type="password" class="form-control" name="pass" placeholder="Enter your password" />
	                  </div>
	                </div>
              </div>
			    </div>
			    <div class="modal-footer">
			      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
			      <a href="forgot.php" style="float:left;">Forgot password..?</a>
			      <button type="submit" class="btn btn-primary">Login</button>
			    </div>
      </form>
    </div>
  </div>
</div>	
</body>
</html>
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