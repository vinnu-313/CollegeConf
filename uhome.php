<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Upload</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery.fileupload.css">
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
                        <li class="active"><a href="#">Upload<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">View All</a></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>             
                </div>
            </div>
        </nav>
        <form action="uploadhandler.php" method="post" enctype="multipart/form-data">
        <!-- The fileinput-button span is used to style the file input field as button -->
        <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Add files...</span>
            <!-- The file input field used as target for the file upload widget -->
            <input id="fileupload" type="file" name="file">
        </span>
        <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-upload"></i>
            <span>Upload</span>
            <input type="submit" id="upload"/>
        </span>
        <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-upload"></i>
            <span>Remove</span>
            <input type="reset" id="reset"/>
        </span>
        </form>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>        
        <script>
            $(function () {
                $('#upload').parent().hide();
                $('#reset').parent().hide();
                $('#fileupload').change(function(){
                   if($('#fileupload').val().length >0){
                       $('#upload').parent().show();
                       $('#reset').parent().show();
                   }else{
                       $('#upload').parent().hide();
                       $('#reset').parent().hide();
                   }
                });
            });
        </script>
    </body>
</html>