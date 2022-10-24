<?php 
    
    require("../controllers/general_controller.php");

    $mydata = selectAllContact();

    // var_dump($mydata);

    echo json_encode($mydata);
   

?>