<!DOCTYPE html>
<?php 
    include "include/session.php";
?>
<html lang="en">
<head>
  <!--<title>Baumalight</title>-->
  <title>Log in to Your Baumalight Account | Baumalight Login</title>
  <link rel = "icon" href ="admin/images/acufore.png" type = "image/x-icon"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--for bootstrap validator--->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<!-- for toastr --->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
   integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--for fa fa icons --->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    
    <style>
    .bg_clr{
        background-color: rgba(0,0,0,0.4)
    }
</style>
<meta name="description" content="Sign in to your Baumalight account for easy access to your orders and information.">
</head>
<body>
<nav class="navbar navbar-inverse" style="background-color:#fff;border-color:transparent">
  <div class="container-fluid bg_clr">
    <div class="navbar-header">
      <!--
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  -->
      <a class="navbar-brand" href="login.php">
      <img src="images/baumalight_logo.png" height="28" alt="Baumalight">
      </a>
    </div>
    
  </div>
</nav>