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
<body class="padTop53 " >

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


                        <h2>User Profile</h2>



                    </div>
                </div>

                <hr />
                <?php 
				            include 'config.php';
							$sid=$_SESSION['logged_user'];
							 
                              $q1="SELECT * FROM stud_reg where enrolment=$sid";
                                
					
						     $r1=mysql_query($q1);
                            while($row = mysql_fetch_array($r1))
                            {
	                           $enrol = $row['enrolment'];
	                           $ses = $row['ses'];
							   $prog = $row['prog'];
							   $sem = $row['ses'];
							   $snm = $row['snm'];
							   $mob = $row['mobile'];
							   $mail = $row['email'];
							   $add = $row['address'];
							   $city = $row['city'];
							   $pin = $row['pincode'];
							   $dis = $row['district'];
							   $country = $row['country'];
							   $pact = $row['pr_activity'];
							   $feed = $row['feed'];
							   $pic = $row['uploadedfile'];?>

				<form action="" method="post" name="newad" enctype="multipart/form-data">
                                    	<table class="table table-bordered sortableTable responsive-table" >
                                        <tr>
                                        	<td width="17%">Enrollment No:</td>
                                          <td width="83%" ><?php echo $enrol;?></td>
                                        </tr>
                                        <tr>
                                          <td>Name:</td>
                                          <td><?php echo $snm; ?> </td>
                                        </tr>
                                        <tr>
                                        	<td>Session :</td>
                                          <td><?php echo $ses; ?></td>
                                        </tr>
                                        <tr>
                                        	<td>Program :</td>
                                            <td><?php echo $prog; ?></td>
                                        </tr>
                                        <tr>
                                        	<td>E-mail :</td>
                                            <td><?php echo $mail; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Mobile :</td>
                                          <td><?php echo $mob;?></td>
                                        </tr>
                                        <tr>
                                        	<td>Address :</td>
                                            <td><?php echo $add; ?></td>
                                        </tr>
                                            <tr>
                                            	<td>City :</td>
                                                <td><?php echo $city;?></td>
                                            </tr>
                                            <tr>
                                              <td>District :</td>
                                              <td><?php echo $dis; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Pincode :</td>
                                              <td><?php echo $pin; ?></td>
                                            </tr>
                                            <tr>
                                              <td>Country :</td>
                                              <td><?php echo $country;} ?></td>
                                            </tr>
                                            <tr>
                                            	<td colspan="2">                                                	                                           </td>
                                          </tr>
                                        </table>
              </form>


            </div>




        </div>
       <!--END PAGE CONTENT -->
          <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Visitor &nbsp; : <span>23,000</span></li>
                    <li>Users &nbsp; : <span>53,000</span></li>
                    <li>Registrations &nbsp; : <span>3,000</span></li>
                </ul>
            </div>
             <!-- RIGHT BUTTON  SECTION -->
           	<?php include'admin_control/right_button.php'; ?>
            <!-- END RIGHT BUTTON  SECTION -->
            <div class="well well-small">
                <span>Profit</span><span class="pull-right"><small>20%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                </div>
                <span>Sales</span><span class="pull-right"><small>40%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                </div>
                <span>Pending</span><span class="pull-right"><small>60%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                </div>
                <span>Summary</span><span class="pull-right"><small>80%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                </div>
            </div>
          
            
         

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