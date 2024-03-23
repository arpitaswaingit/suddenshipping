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
        <div style="margin-top: -30px; float:right"><a href="logout1.php" class="btn btn-danger">Logout</a></div>
      </ul>
    </nav>
    <nav style="border-top:1px solid white;"> 
      <div style="background: #000; border: 1px solid black;">
        <a class="ycolor" href="user_dashboard.php">Back</a>
      </div>
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
            <div class="col-12 wcolor tcenter tfont" style="font-size:18px">Sudden Shipping Admin</div>
        </div>
        
    </div>
</body>


</html>