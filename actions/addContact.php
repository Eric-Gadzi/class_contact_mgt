<?php
    require("../classes/phonebook_class.php");

    if(isset($_POST['addContact'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        $contact = new ContactPhoneClass();
        $contact->addContact($name, $phone);

        if($contact){
            header("location: ../index.php");
        }
    }

?>