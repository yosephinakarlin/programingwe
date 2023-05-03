<?php
include("konfigurasi.php");
$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("gagal koneksi ke dbms");

$Jpage ="list";
$page = "user-list.php";

if(isset($_GET["opsi"])){
    Switch($_GET["opsi"]){
        case "store";
        $p1 = $_POST["txPASS1"];
        $p1 = $_POST["txPASS2"];
        if($p1 == $p2){
            $name = $POST["txNAME"];
            $email = $POST["txemail"];
            $username= $POST["txusename"];
            $iduser = md5["$email"];

        $sql= "INSERT INTO tbuser(nama, email, username, passkey, iduser)value ('$email', '$username', '$passkey', '$iduser');";
        $hasil=mysqly_query($cnn,$sql);

        }
        break;
    }
}


if(isset($_GET["aksi"])){
    Switch($_GET["aksi"]){
        case "new":
            $page="user-new.php";
            $jdpage="Tambah";
            break;
            case "edit";
            break;
            case "del";
            break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>[aksi] -tabel user</title>
</head>
<body>

    <?php
    include ($page);

    ?>
    </body>
    </html>