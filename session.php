<?php
include 'connection.php';
session_start();
if(isset($_POST['uname']) && isset($_POST['passwd'])){
    if($_POST['uname'] == 'admin' && $_POST['passwd'] == 'admin'){
        $_SESSION['role'] = 'admin';
        $_SESSION['uname'] = 'Administrator';
        header('Location:adminhome.php');
    }else{
        echo "select * from user where uname = '$_POST[uname]'";
        $res = $mysqli->query("select * from user where uname = '$_POST[uname]'");
        
    }
}else{
    echo 'ERR_0';
}
?>