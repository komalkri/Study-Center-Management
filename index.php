<?php
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../member/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../member/stylesheets/theme.css">
    <link rel="stylesheet" href="../member/lib/font-awesome/css/font-awesome.css">
    <script src="../member/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
</head>

<body>

	<div class="navbar">
        <div class="navbar-inner">
			<ul class="nav pull-right"></ul>
			<a class="brand" href="#"><span class="first">XCCS</span> <span class="second">0516P</span></a>
        </div>
    </div>
        
    <div class="row-fluid">
		<div class="dialog">
			<div class="block">
				<p class="block-heading">Sign In</p>
				<div class="block-body">
					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
						<label>Username</label>
						<input type="text" class="span12" name="user" required>
						<label>Password</label>
						<input type="password" name="pwd" class="span12" required>
						<input name="submit" type="submit" class="btn btn-primary pull-right" value="Submit"/>
						
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
			<p><a href="forgot.php">Forgot your password?</a></p>
			<div>
				 <?php
					if(isset($_POST['submit']))
					{
						include 'config.php';
						$username = mysql_real_escape_string($_POST['user']);
						$pwd = mysql_real_escape_string($_POST['pwd']);
						$query = "Select * from admin_detail where userid='".$username."' and password='".$pwd."'";
						$result = mysql_query($query);
						if (mysql_num_rows($result) < 1)
						{
								echo "Wrong password plz try again";
								echo '<meta http-equiv="refresh" content="0; url=index"/>';
						}
						else
						{
							session_start();
							$_SESSION['logged_user'] = $username;
							echo '<meta http-equiv="refresh" content="0; url=admin"/>';
						}
						include 'closedb.php';
					}
				?>
			</div>
		</div>
	</div>

    <script src="../member/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
	
</body>
</html>
