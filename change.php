<?php
session_start();
	
	
	if(!isset($_SESSION['logged_user']))
	{
		include 'index.php';	
		
	}
	else
	{
		

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Change Password</title>
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
				<p class="block-heading">Change Password</p>
				<div class="block-body">
					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				
						<label>Old Password</label>
						<input type="password" name="pwd" class="span12" required>
						<label>New Password</label>
						<input type="password" name="pwd1" class="span12" required>
				
						<input name="s1" type="submit" class="btn btn-primary pull-right" value="Change"/>
						
						<div class="clearfix"></div>
					</form>
				</div>
			</div>

<?php
 if(isset($_POST['s1'])){
  include 'config.php';
   $user=$_SESSION['logged_user'];
   $pwd=$_POST['pwd1'];
   $f=mysql_query("update admin_detail set password='$pwd' where userid='$user'");
   if(!$f)
   {
     die('could not update :'.mysql_error());
	}
   echo "password changed";
 }
 }
  	?>	 
