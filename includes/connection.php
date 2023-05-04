<?php

$conn = new mysqli('localhost','sameerdev2','1234','ajax-filteration');
if($conn->connect_error){
    echo'not connected'.$conn->connect_error;
}

?>