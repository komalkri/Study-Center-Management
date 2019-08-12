
<?php
	session_start();
	
	
	if(!isset($_SESSION['logged_user']))
	{
		include 'index.php';	
		
	}
	else
	{
		
	?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>XCCS 0516 P</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53" bgcolor="#FFFFCC" >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="admin" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                   <?php include'admin_control/message_setting.php'; ?>
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                   <?php //include'admin_control/task_setting.php'; ?>
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                   <?php include'admin_control/alert_setting.php'; ?>
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->
					<?php include'admin_control/admin_setting.php'; ?>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



       <!-- MENU SECTION -->
      <?php include'admin_control/menu.php'; ?>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Update Profile</h2>



                    </div>
                </div>

                <hr />

				<form action="update.php" method="post" name="newad" enctype="multipart/form-data">
                                    	<table class="table table-bordered sortableTable responsive-table" >
                                        <tr>
                                        	<td><font color="#000099" size="+0">Student Pass Yr:</font></td>
                                          <td><input name="py" type="text" placeholder="Year" /></td>
                                        </tr>
                                        <tr>
                                        	<td><font color="#000099" size="+0">Student Contact :</font></td>
                                            <td><input name="mob" type="text" placeholder="Contact"/></td>
                                        </tr>
										 <tr>
                                        	<td><font color="#000099" size="+0">Session :</font></td>
                                            <td><input name="ses" type="text" placeholder="Session"/></td>
                                        </tr>
										 <tr>
                                        	<td><font color="#000099" size="+0">Program :</font></td>
                                            <td><input name="prg" type="text" placeholder="Program"/></td>
                                        </tr>
                                       
                                       
                                        <tr>
                                        	<td><font color="#000099" size="+0">Student E-mail :</font></td>
                                            <td><input name="mail" type="text" placeholder="Mail"/></td>
                                        </tr>
                                        <tr>
                                          <td><font color="#000099" size="+0">Student Address:</font></td>
                                          <td><textarea name="add" cols="35" rows="6" placeholder="Address"/></textarea></td>
                                        </tr>
                                        <tr>
                                        	<td><font color="#000099" size="+0">District :</font></td>
                                            <td><input name="dis" type="text" placeholder="District" /></td>
                                        </tr>
										<tr>
                                        	<td><font color="#000099" size="+0">City :</font></td>
                                            <td><input name="city" type="text" placeholder="City" /></td>
                                        </tr>
										<tr>
                                        	<td><font color="#000099" size="+0">Pincode:</font></td>
                                            <td><input name="pc" type="text" placeholder="Pincode"/></td>
                                        </tr>
										
                                        <tr>
                                        	<td><font color="#000099" size="+0">Country :</font></td>
                                            <td><input name="cd" type="text" placeholder="Country" /></td>
                                        </tr>
										
					
							
                                            <tr>
                                            	<td></td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td></td>
                                              <td><font size="+1"><input name="Submit" type="submit" value="UPDATE" class="alert-success"></font></td>
                                            </tr>
                                            <tr>
                                            	<td colspan="2">                                                	                                           </td>
                                          </tr>
                                        </table>
              </form>
			 
			  <?php
			 
			  if(isset($_POST['Submit']))
{
  include 'config.php';
  $usr=$_SESSION['logged_user'];
   $mob=$_POST['mob'];
  $add=$_POST['add'];
  $city=$_POST['city'];
  $dis=$_POST['dis'];
  $cd=$_POST['cd'];
  $mail=$_POST['mail'];
  $py=$_POST['py'];
   $pin1=$_POST['pc'];
   $prg=$_POST['prg'];
   echo $prg;
   echo $usr;
 
 $result= mysql_query("update stud_reg set mobile = '$mob', city = '$city',address = '$add',district = '$dis',country = '$cd',email = '$mail',passyrs = '$py',pincode = '$pin1' , prog = '$prg' where enrolment = '$usr'");
 //$res = mysql_query("update stud_reg set mobile='$mob' where enrolment='1'");
 
 if($result)
 {
  echo "record updated";
  }
  else{
     echo "data not updated";
	 }
  
  }
  ?>
</div>


            




        </div>
       <!--END PAGE CONTENT -->
          <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
             <!-- RIGHT BUTTON  SECTION -->
           	<?php include'admin_control/right_button.php'; ?>
            <!-- END RIGHT BUTTON  SECTION -->
            
			
            
          
            
         

        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
   <?php include'footer.php'; ?>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
</body>
    <!-- END BODY-->
    
</html>
<?php

	}
?>