<?php

    session_start();

    





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada+Big:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <div class="all-chat">

        <div class="head">

            <div class="title">
                <h1>Live Chat</h1>
            </div>

            <div class="logout">            
                <a href="index.php">Logout</a>
            </div>
            
        </div>

        <div id="chat_div">  
            
            <?php
    
            include 'connector.php';
    
    
            $readq = "SELECT * FROM chats;";
            $resuls = $conncetion->query($readq);
            while($row = $resuls->fetch_assoc()){
    
                if($_SESSION['userid']==$row['sid']){
                    echo "<div class='chat sender'>" .$row['chat'] ."</div>";
                }
    
                else{
                    echo "<div class='chat receiver'>";
                    echo "<p>Username : " .$row['sid'] ."<br>";
                    echo $row['chat'];
                    echo "</div>";
                }
    
                
            }
    
            ?>            
        </div>
    
        <div id="typehere">
            <form action="send.php" method="post">

                <div class="keyboard">
                    <textarea name="chat_input" id="typechat" placeholder="Type hear" required></textarea>
                </div>
                

                <input type="submit" name = "chat_submit" value="Send">


            </form>
        </div>

        <div class="contact">
            <div class="head">
                <h1>Users</h1>
            </div>
        </div>

    </div>
        


    <script src="script.js"></script>
</body>
</html>












