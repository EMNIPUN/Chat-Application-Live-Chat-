<?php

    include 'connector.php';

    if(isset($_POST['login-submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

       $loginq = "SELECT * FROM users";
       $results = $conncetion->query($loginq);
       while($row = $results->fetch_assoc()){
        if(($row['username']==$username)&&($row['password']==$password)){
            // echo "login success";
            session_start();
            $_SESSION['userid'] = $row['uid'];
            header("location:chathome.php");
            break;
        }
        else{
            echo "login failed";
        }
       }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>


    <div class="card">

        <div class="title">
            <h1>Log In</h1>
        </div>

        <div id="login">
    
            <form action="index.php" method="post">
    
                <div class="user">
                    <input type="text" id="username" name="username" placeholder="Enter your Username" autocomplete="off" required>
                </div>
    
                <div class="user">
                    <input type="password" id="name" name="password" placeholder="Enter your password"  autocomplete="off" required>
                </div>
    
                <div class="user">
                    <input type="submit" name="login-submit" value="Continue to Chat">
                </div>
    
                <div class="account">
                    <p>Not Yet signup ?
                       <a href="index.php">Signup Now</a>
                    </p>
                </div>
    
            </form>
    
            
        </div>

    </div>

    
</body>
</html>