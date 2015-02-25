<!DOCTYPE html>
<?php
    session_start();
    include 'connection.php';
    if($_SESSION['role'] == 'admin'){
        $query = 'SELECT * FROM upload';
    }else{
        $query = "SELECT * FROM upload where uid = ".$_SESSION['uid'];
    }
    $res = $mysqli->query($query);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View All</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">View All</a></li>
                        <li><a href="signout.php">Sign Out</a></li>
                    </ul>             
                </div>
            </div>
        </nav>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Uploaded on</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $res->fetch_assoc()){
                        echo '<tr>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['size'].'bytes</td>';
                        echo '<td>'.$row['uploaded_on'].'</td>';
                        echo '<td><a target="_blank" href="download.php?id='.$row['id'].'"><span class="glyphicon glyphicon-download"></span></a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>