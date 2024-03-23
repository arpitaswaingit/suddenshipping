  <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "200px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
</script>  
<style type="text/css">
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 56px;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 8px;
  text-decoration: none;
  font-size: 25px;
  color: #337ab7;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #000;
}

.sidebar .closebtn {
  position: absolute;
  top:-10px;
  right: 0px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 18px;
  cursor: pointer;
  background-color: #848484;
  color: white;
  /*padding: 4px 15px;*/
  border: none;
  margin:15px;
  /*margin-top:120px;*/
}

.openbtn:hover {
  background-color: #444;
}
/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.support-nav
{
    /*border: 1px solid black;*/
    box-shadow: -2px 2px 5px grey;
}
.chat_mobile{
   display:none;
   }
    @media (min-width:320px)and (max-width:767px) {
   .chat_mobile{
   display:block;
   }
   .chat{
   display:none;
   }
   }   
   @media(min-width:320px) and (max-width:767px)
{
    .buttons
    {
        float:right;
    }
    .icon-size
    {
        font-size:2em; 
    }   
    .warranty-btn
    {
        margin: 0;
        position: absolute;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        margin-top: 15px;
    }
    .icon-size
    {
        display:inline-block;
    }
    .menu-name
    {
        display:none;
    }
    .sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top:100px;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
</style>

<button class="openbtn" onclick="openNav()"> ☰ MENU</button>  
<div id="mySidebar" class="sidebar">
    <ul style="list-style-type:none; width: 240px;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        
        <?php 
        for ($i=0; $i <sizeof($per); $i++) 
        {
            if($per[$i]==5)
            { ?>
                <li class="support-nav"><a href="#" style="font-size:13px;"><strong>Locator</strong></a></li>
            <?php }
            if($per[$i]==6)
            { ?>
                <li class="support-nav"><a href="#" style="font-size:13px;"><strong>Sudden Shipping</strong></a></li>
            <?php }
            if($per[$i]==7)
            { ?>
                <li class="support-nav"><a href="#" style="font-size:13px;"><strong>Support</strong></a></li>
            
            <?php }
            if($per[$i]==8)
            { ?>
                <li class="support-nav"><a href="#" style="font-size:13px;"><strong>Free Catalogue</strong></a></li>
            <?php }
            if($per[$i]==9)
            { ?>
                <li class="support-nav"><a href="#" style="font-size:13px;"><strong>Online Price</strong></a></li>
            <?php }
            if($per[$i]==10)
            { ?>
                <li class="support-nav"><a href="#" style="font-size:13px;"><strong>Motor Option Admin</strong></a></li>
            <?php }
            if($per[$i]==11)
            { ?>
                <li class="support-nav"><a href="#" style="font-size:13px;"><strong>Flow Pressure Admin</strong></a></li>
            <?php }
            if($per[$i]==12)
            { ?>
                <li class="support-nav"><a href="../../labor_time/admin/index.php" style="font-size:13px;"><strong>Labor Time Admin</strong></a></li>
            <?php }
            if($per[$i]==13)
            { ?>
                <li class="support-nav"><a href="../../mail-server/admin/index.php" style="font-size:13px;"><strong>Mail Server Admin</strong></a></li>
            <?php }
            if($per[$i]==14)
            { ?>
                <li class="support-nav"><a href="../../teeth-options/admin/index.php" style="font-size:13px;"><strong>Teeth Option</strong></a></li>
            <?php }
        }
      ?>
        
    </ul>
</div>
