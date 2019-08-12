<?php
	session_start();
	
	
	if(!isset($_SESSION['logged_user']))
	{
		include 'index.php';	
		
	}
	else
	{
		include'config.php';
	 	
	?>

	 	
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
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
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
       <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
				<header class="navbar-header">

                    <a href="admin" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" />
                        
                        </a>
                </header>
                
         
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
             
            <div class="inner" style="min-height: 900px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Class Notes </h1>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                <?php include'admin_control/block_setting.php'; ?>
                 <!--END BLOCK SECTION -->
                <hr />
                   <!-- CHART & CHAT  SECTION -->
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="chat-panel panel panel-success">
                            <div class="panel-heading">
                               
                              <center><h1> MCSL016</h1></center>
                             
                            </div>

                            <div class="panel-body">
                                
                                                                                                                                                                                            <div class="header">
                                                <strong class="primary-font "><a href="#" download> Click here to download your notes </a></strong>
                                                <hr/>
                                            </div>
                                                 
                                         </div>

                              </div>

                    </div>

                    
                     <div class="col-lg-6">

                        <div class="chat-panel panel panel-primary">
                            <div class="panel-heading">
                               
                                <center><h1>BCSL013</h1></center>
                            
                            </div>

                            <div class="panel-body">
                                <ul class="chat">
                                   
                                        
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <strong class="primary-font"><a href="#">Click Here To download Notes</a> </strong>
												<hr/>
                                               
                                            </div>
                                            
                                            
                                        </div>
                                    
                                    
                                    
                                                                        </ul>
                            </div>

                            

                        </div>


                    </div>
                </div>
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                <div class="row">
                  <div class="col-lg-12">
                  
                  </div>
                   
                </div>
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                

                

                 <!--  STACKING CHART  SECTION   -->
              <div class="row"></div>
                 <!--END STACKING CHART SCETION  -->

                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->
              <div class="row"></div>
                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Total Alumini &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span><?php 
														echo $ename=mysql_result(mysql_query("select count(enrolment) from stud_reg"),0,0);
												?></span></li>
                    <li>Total Employee &nbsp; : <span><?php 
														//echo $ename=mysql_result(mysql_query("select count(enrolment) from stud_reg"),0,0);
												?></span></li>
                    <li>Current Student &nbsp; : <span><?php 
														//echo $ename=mysql_result(mysql_query("select count(enrolment) from stud_reg"),0,0);
												?></span></li>
                </ul>
            </div>
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

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
<?php

	}
?>
