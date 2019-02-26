<?php
session_start();
if(isset($_SESSION["user"])){
    header("location:beranda.php");
}
include("function.php");
?>
<head><title>LOGIN</title></head>
<body>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>User dan Password salah!</h3>';
        }
    }
    if(isset($_GET["notif"])){
        if($_GET["notif"] == "logout"){
            echo '<h3>Berhasil Logout!</h3>';
        }
    }
    if(isset($_POST['submit'])){
        echo do_login($_POST['username'], $_POST['password']);
    }
    ?>
    <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
    username: <input type = "Text" name = "Username"><br>
    pasword: <input type = "Password" name = "Password"><br>
    <input type = "submit" name = "Submit" value="SIGN IN"><br>
    </form>
    </body>