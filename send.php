<?php

    session_start();
    $sid = $_SESSION['userid'];
    include 'connector.php';


    if(isset($_POST['chat_submit'])){

        $chattext = $_POST['chat_input'];
        $sendq = "INSERT INTO chats (sid,chat) VALUES ('$sid','$chattext');";
        $conncetion->query($sendq);

        header("location:chathome.php");

    }
    