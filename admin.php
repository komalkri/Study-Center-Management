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
<style>
*{margin:0px; padding:0px;}
#main{border:0px;  width:380px; height:500px; margin:26px ;}
#msg_area{width:95%;padding:0% 1%; border:0px; height:420px; margin:10px ; overflow:scroll;}
#img{ position:relative; text-align:center; line-height:30px; background-color:#FFFFCC; border:4px solid #666; -webkit-border-radius:30px; -moz-border-radius:30px; border-radius:30px; -webkit-box-shadow:2px 2px 4px #888; -moz-box-shadow:2px 2px 4px #888; box-shadow:2px 2px 4px #888;}
#img1{ position:relative; text-align:center; line-height:30px; background-color:#CCFFCC; border:4px solid #666; -webkit-border-radius:30px; -moz-border-radius:30px; border-radius:30px; -webkit-box-shadow:2px 2px 4px #888; -moz-box-shadow:2px 2px 4px #888; box-shadow:2px 2px 4px #888;}
</style>




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
                        <h1>WELCOME!!!!</h1>
                    </div>
                </div>
                  <hr />
                    <!--BLOCK SECTION -->
                <?php include'admin_control/block_setting.php'; ?>
                 <!--END BLOCK SECTION -->
                <hr />
                   <div class="row">
                   <div class="col-lg-6">
                     <div class="chat-panel panel panel-success">
                            <div class="panel-heading">
                                <i class="icon-comments"></i>
                               Indivisual Students Response
                             <div class="btn-group pull-right">
                                <button type="button" data-toggle="dropdown">
                                    <i class="icon-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="admin.php">
                                            <i class="icon-refresh"></i> Refresh
                                        </a>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                            </div>
                            
                                  
                  <div id="main">
                      <div id="msg_area">
                        <?php
						    $q1="SELECT * FROM message ORDER BY id DESC;";
                            $r1=mysql_query($q1);
                            while($row = mysql_fetch_array($r1))
                            {
	                           $msg = $row['message'];
	                           $usr = $row['user_name'];
	                           $dt = $row['dt'];
							   if($usr==$_SESSION['logged_user'])
							   {?>
                               <div id="img"> 
                               <table width="100%"  >
                               <tr>
                               <td>
                               <table width="100%">
                               <tr>
                               <td  align="center"  width="55%">
							  <?php echo '<i class="icon-time"></i>'.$dt;?></td>
                              <td align="center">
	                          <?php echo $usr;?></td></tr></table></td></tr>
	                           <tr><td align="left" ><?php echo '<p> &nbsp;&nbsp;'.$msg.'</p>';
							  ?></td></tr>
							   </table>
                             </div>
                               <?php }
							   else
							   {?>
                               <div id="img1"> 
                               <table width="100%">
                               <tr>
                               <td>
                               <table width="100%">
                               <tr>
                               <td align="center" width="55%">
	                          <?php echo $usr;?></td>
                              <td  align="left">
							  <?php echo '<h6><i class="icon-time"></i>'.$dt.'</h6>';?></td></tr></table></td></tr>
	                           <tr><td align="left" ><?php echo '<p>&nbsp;&nbsp;'.$msg.'</p>';?></td></tr>
							   </table>
                               </div>
	                          <?php 
                             }
							}
                            if(isset($_POST['submit']))
                            { 
	                           $msg=$_POST['message'];
	                           $usr=$_SESSION['logged_user'];
							    date_default_timezone_set("Asia/Calcutta");
							   $dt=date('d.m.Y H:i:s A');
	                          
	                           $q="INSERT INTO `message` (`id`, `message`, `user_name`, `dt`) VALUES ('', '$msg', '$usr', '$dt')";
							  
		
	                           if(mysql_query($q))
							   {
								   ?>
                                   <div id="img">
		                          <?php echo'<h4 style="color:red">'.$usr.'</h4>';
		                           echo '<p>'.$msg.'</p>';?>
                                   </div>
                                   <?php
	                            }
							echo	"<meta http-equiv='refresh' content='0'>";
                            }
                      ?>
                </div>
                <div id ="format">
                     <form method="post" action="admin.php">
                        <input type="text" name="message" style="width:325px; height:50px;" placeholder="Type your message here..." />
                        <input type="submit" name="submit" value="send" class="btn btn-success btn-sm" id="btn-chat" />
                     </form>
                </div>
         </div>
         </div>
         </div>
         
                    <div class="col-lg-6">
                         <div class="chat-panel panel panel-primary">
                            <div class="panel-heading">
                                <i class="icon-comments"></i>
                                All Student Response
                            <div class="btn-group pull-right">
                                <button type="button" data-toggle="dropdown">
                                    <i class="icon-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="admin.php">
                                            <i class="icon-refresh"></i> Refresh
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            </div>
                     <div id="main">
                      <div id="msg_area">
                        <?php

                             
                              $q1="SELECT * FROM all_msg ORDER BY id DESC;";
                                 $r1=mysql_query($q1);
                                 while($row = mysql_fetch_array($r1))
                                   {
	                                 $msg = $row['message'];
	                                 $usr = $row['user_name'];
	                                 $dt = $row['dt'];
									  if($usr==$_SESSION['logged_user'])
							   {?>
                               <div id="img">
                               <table width="100%">
                               <tr>
                               <td>
                               <table width="100%">
                               <tr>
                               
                              <td  align="center"  width="55%">
							  <?php echo '<i class="icon-time"></i>'.$dt;?></td>
                              <td align="center">
	                          <?php echo $usr;?></td></tr></table></td></tr>
	                           <tr><td align="left" ><?php echo '<p>&nbsp;&nbsp;'.$msg.'</p>';?></td></tr>
							   </table>
                               </div>
                               <?php }
							   else
							   {?>
                               <div id="img1">
                               <table width="100%">
                               <tr>
                               <td>
                               <table width="100%">
                               <tr>
                               <td align="center" width="55%">
	                          <?php echo $usr;?></td>
                              <td  align="left">
							  <?php echo '<h6><i class="icon-time"></i>'.$dt.'</h6>';?></td></tr></table></td></tr>
	                           <tr><td align="left" ><?php echo '<p>&nbsp;&nbsp;'.$msg.'</p>';?></td></tr>
							   </table>
                               </div>
	                          <?php 
                             }
							}
if(isset($_POST['submit1']))
{ 
	$msg=$_POST['message'];
	$usr=$_SESSION['logged_user'];
	date_default_timezone_set("Asia/Calcutta");
							   $dt=date('d.m.Y H:i:s');
							  
	                          
	$q="INSERT INTO `all_msg` (`id`, `message`, `user_name`,`dt`) VALUES ('', '$msg', '$usr', '$dt')";
	if(mysql_query($q)){
		echo'<h4 style="color:red">'.$usr.'</h4>';
		echo '<p>'.$msg.'</p>';
	}
	
	echo	"<meta http-equiv='refresh' content='0'>";
}
?>
</div>
<div format>
<form method="post" action="admin.php">
<input type="text" name="message" style="width:325px; height:50px;" placeholder="Type your message here..." />
<input type="submit" name="submit1" value="send" class="btn btn-warning btn-sm" id="Button1"/>
</form>
</div>
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
</html>
<?php
	}
	?>