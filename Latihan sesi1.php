<?php
$usr = "";
$ps = "";
if(isset ($_GET["txUSER"])){ 
$usr=$_GET["txUSER"];
$ps =$_GET["txpass"];
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="latihan sesi1.php">
        
    <div>
        User name
        <input type="text" name="txUSER"required> 
    </div>

    <div>
        password
        <input type="password" name="txpass"required> 
    </div>
    <div>
    <button type="submit"> login </button>
</div>
</form>
<div>
    <pre>
    User Name:<?=$usr?>
    Password: <?=$ps?>
    <pre>
</div>
    
</body>
</html>