<?php
function do_login($username, $password){
    if($username != "test" || $password != "test"){
        header("location:index.php?error=wrong");
    }
    if($username == "test" && $_POST["password"] == "test"){
        $_SESSION["user"] = $username;
        $_SESSION["pass"] = $password;

        header("location:beranda.php");
    }
}
function check_login(){
    if(!isset($_SESSION["user"])){
        header("location:index.php");
    }
}
?>