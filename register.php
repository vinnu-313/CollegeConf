<?php
include 'connection.php';
if (isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['utype']) && isset($_POST['passwd'])) {  

    if (empty($_REQUEST['uid'])) {
        
        //if (!$mysqli->query("insert into user(name, email, mobile, category, passwd) values('$_POST[uname]','$_POST[email]','$_POST[mobile]','$_POST[utype]','$_POST[passwd]')")) {
        if (!$mysqli->query("insert into user(name, email, mobile, category, passwd) values('$_POST[uname]','$_POST[email]','$_POST[mobile]','$_POST[utype]','$_POST[passwd]')")) {
            echo $mysqli->error;
        }else{
            echo 'User Added Successfully.!';
        }      
        
    }
}
?>