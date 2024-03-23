<?php
$root = "../../support/";
$rpage = "mini_skidsteer/";
session_start();
session_destroy();
header("Location:".$root.$rpage."index.php");
?>