<?php
    session_start();
    if(isset($_SESSION["site_id"])){
        unset($_SESSION["site_id"]);
    }
header("Location: sign.php");
die;
?>