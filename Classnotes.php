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
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Class Notes </h1>
                    </div>
                </div>
                  <hr />
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="chat-panel panel panel-success">
                            <div class="panel-heading">
                     
                             <b>BCA</b>
                            
                            </div>

                            <div class="panel-body">
                                <ul class="chat">
                                 
                                   <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#FRSTSEM-nav">
                        <i class="icon-tasks"> </i> 1st Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="FRSTSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc013.php"><i class="icon-angle-right"></i>FEG-02 </a></li>
                         <li class=""><a href="mc014.php"><i class="icon-angle-right"></i>ECO-01</a></li>
                          <li class=""><a href="mc011.php"><i class="icon-angle-right"></i>BCS-011</a></li>
                           <li class=""><a href="mc012.php"><i class="icon-angle-right"></i>BCS-012</a></li>
                            <li class=""><a href="mcl016.php"><i class="icon-angle-right"></i>BCSL-013</a></li>
                       
                    </ul>
                </li>
                                  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#SECSEM-nav">
                        <i class="icon-tasks"> </i> 2nd Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="SECSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc015.php"><i class="icon-angle-right"></i>ECO-02 </a></li>
                         <li class=""><a href="mc011.php"><i class="icon-angle-right"></i>MCS-011</a></li>
                          <li class=""><a href="mc012.php"><i class="icon-angle-right"></i>MCS-012</a></li>
                           <li class=""><a href="mc015.php"><i class="icon-angle-right"></i>MCS-015</a></li>
                            <li class=""><a href="mcsl017.php"><i class="icon-angle-right"></i>BCSL-021</a></li>
                             <li class=""><a href="mc021.php"><i class="icon-angle-right"></i>BCSL-022</a></li>
                       
                    </ul>
                </li>  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#THRSEM-nav">
                        <i class="icon-tasks"> </i> 3rd Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="THRSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc021.php"><i class="icon-angle-right"></i>MCS-021 </a></li>
                         <li class=""><a href="mc023.php"><i class="icon-angle-right"></i>MCS-023</a></li>
                          <li class=""><a href="mc014.php"><i class="icon-angle-right"></i>MCS-014</a></li>
                           <li class=""><a href="mc022.php"><i class="icon-angle-right"></i>BCS-031</a></li>
                            <li class=""><a href="mc023.php"><i class="icon-angle-right"></i>BCSL-032</a></li>
                             <li class=""><a href="mc024.php"><i class="icon-angle-right"></i>BCSL-033</a></li>
                              <li class=""><a href="mcl025.php"><i class="icon-angle-right"></i>BCSL-034</a></li>
                       
                    </ul>
                </li>
                                 
                                  </li>  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#FRTHSEM-nav">
                        <i class="icon-tasks"> </i> 4th Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="FRTHSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc31.php"><i class="icon-angle-right"></i>BCS-040 </a></li>
                         <li class=""><a href="mc024.php"><i class="icon-angle-right"></i>MCS-024</a></li>
                          <li class=""><a href="mc32.php"><i class="icon-angle-right"></i>BCS-041</a></li>
                           <li class=""><a href="mc33.php"><i class="icon-angle-right"></i>BCS-042</a></li>
                            <li class=""><a href="mcl016.php"><i class="icon-angle-right"></i>MCSL-016</a></li>
                             <li class=""><a href="mc34.php"><i class="icon-angle-right"></i>BCSL-043</a></li>
                              <li class=""><a href="mc35.php"><i class="icon-angle-right"></i>BCSL-044</a></li>
                               <li class=""><a href="mcl36.php"><i class="icon-angle-right"></i>BCSL-045</a></li>
                       
                    </ul>
                </li>
                                    </li>  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#FFTHSEM-nav">
                        <i class="icon-tasks"> </i> 5th Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="FFTHSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc41.php"><i class="icon-angle-right"></i>BCS-051 </a></li>
                         <li class=""><a href="mc42.php"><i class="icon-angle-right"></i>BCS-052</a></li>
                          <li class=""><a href="mc43.php"><i class="icon-angle-right"></i>BCS-053</a></li>
                           <li class=""><a href="mc44.php"><i class="icon-angle-right"></i>BCS-054</a></li>
                            <li class=""><a href="mcl45.php"><i class="icon-angle-right"></i>BCS-055</a></li>
                             <li class=""><a href="mc51.php"><i class="icon-angle-right"></i>BCSL-056</a></li>
                              <li class=""><a href="mc52.php"><i class="icon-angle-right"></i>BCSL-057</a></li>
                               <li class=""><a href="mc53.php"><i class="icon-angle-right"></i>BCSL-058</a></li>
                       
                    </ul>
                </li> 
                                     </li>  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#SXTHSEM-nav">
                        <i class="icon-tasks"> </i> 6th Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="SXTHSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mcl54.php"><i class="icon-angle-right"></i>BCS-062 </a></li>
                         <li class=""><a href="mc022.php"><i class="icon-angle-right"></i>MCS-022</a></li>             
                              <li class=""><a href="mcl61.php"><i class="icon-angle-right"></i>BCSL-063</a></li>
                               <li class=""><a href="bcsp64.php"><i class="icon-angle-right"></i>BCSL-064</a></li>
                       
                    </ul>
                </li>
                                </ul>
                            </div>

                           
                        </div>

                    </div>

                    
                     <div class="col-lg-6">

                        <div class="chat-panel panel panel-primary">
                            <div class="panel-heading">
                                <b>MCA</b>
                            </div>

                            <div class="panel-body">
                                <ul class="chat">
                                     <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#FRSSEM-nav">
                        <i class="icon-tasks"> </i> 1st Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="FRSSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc011.php"><i class="icon-angle-right"></i>MCS-011 </a></li>
                         <li class=""><a href="mc012.php"><i class="icon-angle-right"></i>MCS-012</a></li>
                          <li class=""><a href="mc013.php"><i class="icon-angle-right"></i>MCS-013</a></li>
                           <li class=""><a href="mc014.php"><i class="icon-angle-right"></i>MCS-014</a></li>
                            <li class=""><a href="mc015.php"><i class="icon-angle-right"></i>MCS-015</a></li>
                             <li class=""><a href="mcl016.php"><i class="icon-angle-right"></i>MCSL-016</a></li>
                        <li class=""><a href="mcsl017.php"><i class="icon-angle-right"></i>MCSL-017</a></li>
                    </ul>
                </li>
                                  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#SCSEM-nav">
                        <i class="icon-tasks"> </i> 2nd Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="SCSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc021.php"><i class="icon-angle-right"></i>MCS-021 </a></li>
                         <li class=""><a href="mc022.php"><i class="icon-angle-right"></i>MCS-022</a></li>
                          <li class=""><a href="mc023.php"><i class="icon-angle-right"></i>MCS-023</a></li>
                           <li class=""><a href="mc024.php"><i class="icon-angle-right"></i>MCS-024</a></li>
                            <li class=""><a href="mcl025.php"><i class="icon-angle-right"></i>MCSL-025</a></li>
                       
                    </ul>
                </li>  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#THSEM-nav">
                        <i class="icon-tasks"> </i> 3rd Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="THSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc31.php"><i class="icon-angle-right"></i>MCS-031 </a></li>
                         <li class=""><a href="mc32.php"><i class="icon-angle-right"></i>MCS-032</a></li>
                          <li class=""><a href="mc33.php"><i class="icon-angle-right"></i>MCS-033</a></li>
                           <li class=""><a href="mc34.php"><i class="icon-angle-right"></i>MCS-034</a></li>
                            <li class=""><a href="mc35.php"><i class="icon-angle-right"></i>MCS-035</a></li>
                             <li class=""><a href="mcl36.php"><i class="icon-angle-right"></i>MCSL-036</a></li>
                       
                    </ul>
                </li>
                                 
                                  </li>  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#FTHSEM-nav">
                        <i class="icon-tasks"> </i> 4th Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="FTHSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc41.php"><i class="icon-angle-right"></i>MCS-041 </a></li>
                         <li class=""><a href="mc42.php"><i class="icon-angle-right"></i>MCS-042</a></li>
                          <li class=""><a href="mc43.php"><i class="icon-angle-right"></i>MCS-043</a></li>
                           <li class=""><a href="mc44.php"><i class="icon-angle-right"></i>MCS-044</a></li>
                            <li class=""><a href="mcl45.php"><i class="icon-angle-right"></i>MCSL-045</a></li>
                             
                       
                    </ul>
                </li>
                                    </li>  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#FFHSEM-nav">
                        <i class="icon-tasks"> </i> 5th Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="FFHSEM-nav" style="list-style-type:none">
                       
                        <li class=""><a href="mc51.php"><i class="icon-angle-right"></i>MCS-051 </a></li>
                         <li class=""><a href="mc52.php"><i class="icon-angle-right"></i>MCS-052</a></li>
                          <li class=""><a href="mc53.php"><i class="icon-angle-right"></i>MCS-053</a></li>
                               <li class=""><a href="mcl54.php"><i class="icon-angle-right"></i>MCSL-054</a></li>
                       
                    </ul>
                </li> 
                                     </li>  <li class="panel ">
                    <a href="#" data-parent="#classnotes" data-toggle="collapse" class="accordion-toggle" data-target="#STHSEM-nav">
                        <i class="icon-tasks"> </i> 6th Semester    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="STHSEM-nav" style="list-style-type:none">
                               <li class=""><a href="mcl61.php"><i class="icon-angle-right"></i>MCSL-061</a></li>
                       
                    </ul>
                </li>
                                </ul>
                            </div>

                         </div>
                    </div>
                </div>
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
                 <!--TABLE, PANEL, ACCORDION AND MODAL -->
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