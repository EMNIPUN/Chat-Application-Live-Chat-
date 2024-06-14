<?php 

    $conncetion = new mysqli("localhost","root","","student");

    if($conncetion->connect_error){
        die("connection failed" . $conncetion->connect_error);
    }

    

?>