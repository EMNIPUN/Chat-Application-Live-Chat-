<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student DB</title>
    <style>
        body{
            font-size: 20px;
        }
    </style>
</head>
<body>
    
<?php

    require_once 'connector.php';

    $sql1 = "SELECT * FROM details;";

    if($result=$conncetion->query($sql1)){
        if($result->num_rows>0){
            echo("<table border='4' style='border-collapse:collapse;'");
            echo("<tr>");
            echo("<td> ID </td>");
            echo("<td> Name </td>");
            echo("<td> Stream </td>");
            echo("<td> Number </td>");
            echo("</tr>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                echo("<td>".$row['ID']."</td>");
                echo("<td>".$row['Name']."</td>");
                echo("<td>".$row['Stream']."</td>");
                echo("<td>".$row['Number']."</td>");
                echo("<td>".$row['datee']."</td>");
            }
        }
    }

?>

    <form action="home.php" method="post">
        <input type="date" name="dt">
        <button type="submit" name="btn-submit">submit</button>
    </form>

<?php
    $idd = 1122;
    if(isset($_POST['btn-submit'])){
        $dq = "INSERT INTO `details` (`datee`) VALUES('".$_POST['dt']."');";
        $conncetion->query($dq);
    }

?>
</body>
</html>