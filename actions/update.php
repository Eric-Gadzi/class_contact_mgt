<?php 
    require_once("../controllers/general_controller.php");

    if(isset($_GET['update'])){
        $pid = $_GET['pid'];
        $pname = $_GET['name'];
        $pphoned = $_GET['phone'];
        $contact = new ContactPhoneClass();
        $result = $contact->edit($pid, $pname, $pphoned);
        if($result){
            header("location: ../index.php");
        }
    }
?>