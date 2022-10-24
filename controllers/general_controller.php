<?php
//connect to the user account class

// use FTP\Connection;

require("../classes/phonebook_class.php");

//sanitize data




//--INSERT--//
function addContact($uname, $uphone){
    $contact = new ContactPhoneClass();
    return $contact->addContact($uname, $uphone);
}

//--SELECT--//
function selectAllContact(){
    $contact = new ContactPhoneClass();
    return $contact->selectAllContact();
}

function selectOneContact($pid){
    $contact = new ContactPhoneClass();
    return $contact->selectOneContact($pid);
}


//--UPDATE--//
function editContact($phone_id, $new_uname, $new_uphone){
    $contact = new ContactPhoneClass();
    return $contact->edit($phone_id, $new_uname, $new_uphone);
}

//--DELETE--//
function deleteContact($pid){
    $contact = new ContactPhoneClass();
    return $contact->deleteContact($pid);
}

?>