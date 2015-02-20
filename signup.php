<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>

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
        <h1>Sign Up</h1>
        <h3>Already have an account ? Click <a href="signin.php">here</a></h3>
        <form class="form signup">
            <div class="form-group"
                <label for="name">Name</label>
                <input type="text" class="form-control" name="uname" id="uname"/>
            </div>
            <div class="form-group"
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobile"/>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name="utype" id="utype">
                    <option value="-1" selected>Select</option>
                    <option value="RnD">R &amp; D/Corporate/Industrial Firms</option>
                    <option value="scholars">Faculty/Research Scholars</option>
                    <option value="students">UG/PG Students</option>
                </select>
            </div>
            <div class="form-group">
                <label for="passwd">Password</label>
                <input type="password" class="form-control" name="passwd" id="passwd"/>
                <span class="help-block">Password must have atleast 6 characters.</span>
            </div>
            <div class="form-group">
                <label for="repasswd">Retype Password</label>
                <input type="password" class="form-control" name="repasswd" id="repasswd"/>
            </div>
            <input type="submit" class="btn" value="Sign Up"/>
            <input type="reset" class="btn" value="Reset"/>
        </form>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script>
            $(function(){
               $('.signup').submit(function(){
                    var bool = true;
                    if($.trim($('#uname').val()).length<=0){
                        bool = false;
                        $('#uname').parent().removeClass().addClass('form-group has-error');
                    }else{
                        $('#uname').parent().removeClass().addClass('form-group has-success');
                    }
                    if($.trim($('#email').val()).length<=0){
                        bool = false;
                        $('#email').parent().removeClass().addClass('form-group has-error');
                    }else{
                        if(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($.trim($('#email').val()))){
                          $('#email').parent().removeClass().addClass('form-group has-success');
                        } else {
                            bool = false;
                            $('#email').parent().removeClass().addClass('form-group has-error');
                        }
                    }
                    if(($('#mobile').val().length === 10 || $('#mobile').val().length === 11) && (/^\d+$/.test($.trim($('#mobile').val())))){
                        $('#mobile').parent().removeClass().addClass('form-group has-success');
                    }else{
                        bool = false;
                        $('#mobile').parent().removeClass().addClass('form-group has-error');
                    }
                    if($('#utype').val() == -1){
                        bool = false;
                        $('#utype').parent().removeClass().addClass('form-group has-error');
                    }else{
                        $('#utype').parent().removeClass().addClass('form-group has-success');
                    }
                    if($.trim($('#passwd').val()).length<6){
                        bool = false;
                        $('#passwd').parent().removeClass().addClass('form-group has-error');
                    }else{
                        $('#passwd').parent().removeClass().addClass('form-group has-success');
                    }
                    if($.trim($('#repasswd').val()).length<6){
                        bool = false;
                        $('#repasswd').parent().removeClass().addClass('form-group has-error');
                    }else{
                        $('#repasswd').parent().removeClass().addClass('form-group has-success');
                    }
                    if(bool){
                        if($('#passwd').val() === $('#repasswd').val()){
                            $('#passwd').parent().removeClass().addClass('form-group has-success');
                            $('#repasswd').parent().removeClass().addClass('form-group has-success');
                        }else{
                            bool = false;
                            $('#repasswd').parent().removeClass().addClass('form-group has-error');
                            $('#passwd').parent().removeClass().addClass('form-group has-error');
                        }
                    }
                    if(bool){
                        $.post('register.php',{
                            'uname' : $.trim($('#uname').val()),
                            'email' : $.trim($('#email').val()),
                            'mobile' : $.trim($('#mobile').val()),
                            'utype' : $.trim($('#utype').val()),
                            'passwd' : $.trim($('#passwd').val())
                        }, function(response){
                           alert(response); 
                        });
                    }
                    return false; 
               });
            });
        </script>
    </body>
</html>