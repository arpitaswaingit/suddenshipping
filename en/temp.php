<?php 
    session_start();
    if(isset($_POST['submit']))
    {
        if($_POST['pass']=='789123789')
        {
            include("../inc/init.php");
            $qry="SELECT * FROM `users` WHERE `user_name`='mennobauman';";
            $run=mysqli_query($con,$qry);
            $data = mysqli_fetch_assoc($run);
            $_SESSION['user'] = $data;
            $_SESSION['uname'] = 'mennobauman';
            echo "changed";
        }
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form method="post">
        <input type="text" name="pass">
        <button value="submit" name="submit">submit</button>
    </form>
</body>
</html>