<?php
    require_once("../controllers/general_controller.php");

  
    if(isset($_GET['submit'])){
        $pid = $_GET['pid'];

        if(deleteContact($pid)){
        header("location: /index.php");
        }
    }
      
?>