<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

  </head>

  
  <body> 
    
    <div class="navbar">
        <div class="navbar-inner">
			<ul class="nav pull-right"></ul>
			<a class="brand" href="#"><span class="first">XCSS</span> <span class="second">0516P</span></a>
        </div>
    </div>
    


    

    
        <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">Reset your password</p>
            <div class="block-body">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <label>Email Address</label>
                    <input type="text"name="email" class="span12"></input>
                    <input name="submit" type="submit" class="btn btn-primary pull-right" value="Send"/>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <a href="index.php">Sign in to your account</a>
    </div>
</div>


				
    


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


