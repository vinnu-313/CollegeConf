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
        <form class="form signup">
            <div class="form-group"
                 <label for="name">Name</label>
                <input type="text" class="form-control" name="uname" id="name"/>
            </div>
            <div class="form-group"
                 <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="phone" class="form-control" name="mobile" id="mobile"/>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" name="utype" id="utype">
                    <option value="-1">Select</option>
                    <option value="RnD" selected>R &amp; D/Corporate/Industrial Firms</option>
                    <option value="scholars">Faculty/Research Scholars</option>
                    <option value="students">UG/PG Students</option>
                </select>
            </div>
            <div class="form-group">
                <label for="passwd">Password</label>
                <input type="password" class="form-control" name="passwd" id="passwd"/>
            </div>
            <div class="form-group">
                <label for="repasswd">Retype Password</label>
                <input type="password" class="form-control" name="repasswd" id="repasswd"/>
            </div>
            <input type="submit" class="btn" value="Sign Up"/>
        </form>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script>
            $(function(){
               $('.signup').submit(function(){
                  alert("Submitted");
                  return false; 
               });
            });
        </script>
    </body>
</html>