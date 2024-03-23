<?php 
    include_once '../inc/init.php';
    session_start();
    
    if(isset($_POST['search']))
    {
        $search = $_POST['search'];
        $_SESSION['search']=$search;
        
    }else
    {
      $search = '';
      
    }
    $x = strtolower($search);
    if(($x=="d") || ($x == "tm") || ($x == "admin"))
    {
        $_SESSION['search']=$x;
    }
    else
    {
        $_SESSION['search']=$search;
    }
    include_once 'user_list_append_check.php';
?>