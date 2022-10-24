<?php 
    require("../settings/db_class.php");

    class ContactPhoneClass extends db_connection
    {
        /**
         * @return bolean 
         */
        function addContact($uname, $uphone){
           

            $sql = "INSERT INTO `phonebook`(`pname`, `pphoned`) VALUES ('$uname','$uphone')";

            return $this->db_query($sql);
        }

        function edit($phone_id, $new_uname, $new_uphone){
            //write sql
            $sql = "UPDATE `phonebook` SET `pname`='$new_uname',`pphoned`='$new_uphone' WHERE pid = '$phone_id'";
            //execute sql
            return $this->db_query($sql);
        }
    
        function selectAllContact(){

            $sql = "SELECT * FROM phonebook";

            return $this->db_fetch_all($sql);

        }

        function selectOneContact($pid){
            
            $sql = "SELECT * FROM phonebook where pid = $pid";

            return $this->db_fetch_one($sql);
        }

        function deleteContact($pid){
            $sql = "DELETE FROM `phonebook` WHERE pid = $pid;
            ";
            return $this->db_query($sql);
        }
    }
    

    // $contact = new ContactPhoneClass();

    // echo $contact->addContact("Eric", "02020202020");
?>