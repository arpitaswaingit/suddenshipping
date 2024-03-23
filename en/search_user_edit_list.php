<?php 
    include_once '../inc/init.php';
    session_start();
    
    if(isset($_POST['search']))
    {
        $search = $_POST['search'];
        $s_type = $_POST['s_type'];
        $_SESSION['search']=$search;
        $_SESSION['s_type']=$s_type;
        
    }
	else
    {
      $search = '';
      $_SESSION['search'] = $search;
      $_SESSION['s_type'] = 0;     
    }
    // $x = strtolower($search);
    // if(($x=="d") || ($x == "tm") || ($x == "admin"))
    // {
    //     $_SESSION['search']=$x;
    // }
    // else
    // {
    //     $_SESSION['search']=$search;
    // }
    include_once 'user_list_append.php';
?>