<?php
include 'connection.php';
session_start();
$valid = false;
if(isset($_POST['email']) && isset($_POST['passwd'])){
    if($_POST['email'] == 'admin@admin.com' && $_POST['passwd'] == 'admin'){
        $_SESSION['role'] = 'admin';
        $_SESSION['uname'] = 'Administrator';
        $valid = true;
    }else{
//         echo "select * from user where email = '$_POST[email]'";
        $res = $mysqli->query("select * from user where email = '$_POST[email]'");        
        while($row = $res->fetch_assoc()){
//            echo $row['name'].' : '. $row['passwd'];
            if($row['passwd'] == $_POST['passwd']){
//                echo 'Match Found';
                $_SESSION['role'] = 'user';
                $_SESSION['uname'] = $row['name'];
                $_SESSION['uid'] = $row['uid'];
                $valid = true;
            }
        }
    }
//    echo $_SESSION['role'].' - '.!!$valid;
}else{
    echo 'ERR_0';
}
if($valid){
    if($_SESSION['role'] == 'admin'){
        header('Location:ahome.php');
        die();
    }else{
        header('Location:uhome.php');
        die();
    }
}else{
    header('Location:signin.php?err=1');
    die();
}
?>