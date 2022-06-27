<?php    
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($email == "nikhil.nandam@gmail.com" && $password == "123456") {
        header("location:../php/home.php");
    } else {
        echo "Wrong Credentials!!!";
    }
?>