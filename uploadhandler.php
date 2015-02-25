<?php
session_start();
if ($_FILES['file']['size'] > 0) {
    $fileName = $_FILES['file']['name'];
    $tmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }
    include('connection.php');
    $query = "INSERT INTO upload (uid, name, size, type, content ) " .
            "VALUES ('$_SESSION[uid]','$fileName', '$fileSize', '$fileType', '$content')";

    $mysqli->query($query) or die('Error, query failed');

    header('Location:vall.php');
}
?>