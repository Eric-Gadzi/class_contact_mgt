<?php 
require("../controllers/general_controller.php");

function displayAll(){
    $allContact = selectAllContact();
    $counter = 0;
    $pid = null;
    $name = null;
    $number = null;
    foreach($allContact as $contact){
        $counter++;
        $pid = $contact['pid'];
        $name = $contact['pname'];
        $number = $contact['pphoned'];
        echo displaySelectRow($counter, $pid, $name, $number);
    }
}

function displaySelectRow($counter, $pid, $name, $number){
    return "<tr>
    <th scope='row'>$counter</th>
    <td>$name</td>
    <td>$number</td>
    <td><a href='update_form.php?pid=$pid&pname=$name&pphoned=$number&submit=update' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'>Update &nbsp;<i class='bi bi-pencil-square'></i></a>
    <a href='../actions/delete.php?pid=$pid&submit=delete' class='btn btn-danger btn-sm active' role='button' aria-pressed='true'>Delete &nbsp;<i class='bi bi-trash2'></i></a></td>
  </tr>";
}

?>