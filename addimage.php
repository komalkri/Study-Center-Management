<?php
	session_start();
	$n=$_SESSION['logged_user'];
	
	if(!isset($_SESSION['logged_user']))
	{
		include 'index.php';	
		
	}
	else
	{
	define ("MAX_SIZE","100");
function getExtension($str)
{
	$i = strrpos($str,".");
	if (!$i) { return ""; }
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);
	return $ext;
}
function resizeImage($imgSrc,$thumbnail_width,$thumbnail_height)
{ //$imgSrc is a FILE - Returns an image resource.
    //getting the image dimensions 
    list($width_orig, $height_orig) = getimagesize($imgSrc);  
    $myImage = imagecreatefromjpeg($imgSrc);
    $ratio_orig = $width_orig/$height_orig;
      
    if ($thumbnail_width/$thumbnail_height > $ratio_orig)
	{
       $new_height = $thumbnail_width/$ratio_orig;
       $new_width = $thumbnail_width;
    }
	else
	{
       $new_width = $thumbnail_height*$ratio_orig;
       $new_height = $thumbnail_height;
    }
      
    $x_mid = $new_width/2;  //horizontal middle
    $y_mid = $new_height/2; //vertical middle
      
    $process = imagecreatetruecolor(round($new_width), round($new_height));
      
    imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
    $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
    imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);
  
    imagedestroy($process);
    imagedestroy($myImage);
    return $thumb;
}
 $errors=0;
//checks if the form has been submitted
 if(isset($_POST['Submit']))
 {
    $image=$_FILES['image']['name'];
    //if it is not empty
    if ($image)
    {
        $filename = stripslashes($_FILES['image']['name']);
    	//get the extension of the file in a lower case format
        $extension = getExtension($filename);
        $extension = strtolower($extension);
    	if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
        {
            echo '<h1>Unknown extension!</h1>';
            $errors=1;
        }
    	else
        {
            $size=filesize($_FILES['image']['tmp_name']);
			$temp=resizeImage($_FILES['image']['tmp_name'],500,400);
			$temp2=resizeImage($_FILES['image']['tmp_name'],79,70);
			$RandomNumber = uniqid();
			$imgfile="GalleryImage/big/".$RandomNumber.$image;
			$imgfile2="GalleryImage/small/".$RandomNumber.$image;
			imagejpeg($temp, $imgfile);
            imagejpeg($temp2, $imgfile2);
			
			
			
			include 'config.php';
			
			
			$query= "INSERT INTO tblgallery(large_image,small_image,status) VALUES('$imgfile','$imgfile2','True')";
			mysql_query($query)or die(mysql_error());
        }
    }
    else
    {
        //echo "<h1>Select Image File</h1>";
        $errors=1;
    }
}
  
//If no errors registred, print the success message
 if(isset($_POST['Submit']) && !$errors)
 {
    //echo "<h1>File Uploaded Successfully! Try again!</h1>";
 }
  
   
   

 ?>
 <?php
	include 'config.php';
	
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
	$start_from = ($page-1) * 4;
														
  error_reporting(E_ALL ^ E_NOTICE);
  $select = mysql_query("SELECT * from tblgallery where status='True' order by ID LIMIT $start_from, 4");
  if(isset($_POST['submit']))
  { 
  		for($i=1;$i<=$_POST['hidden'];$i++)
		{
			$query2 = mysql_query("SELECT * from tblgallery WHERE ID = ' ".$_POST["hioddenid$i"]." ' ");
			while($file = mysql_fetch_array($query2))
			{
				$unlink = unlink($file['large_image']);
				$unlink = unlink($file['small_image']);
  				if($unlink)
  				{
					$query1 = mysql_query("DELETE from tblgallery WHERE ID = ' ".$_POST["hioddenid$i"]." ' ");
  					echo '<meta http-equiv=refresh content=0; url=Action.php';
				}
			} 
		}
	} 	
	 	
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


                        <h2>GaLLERY</h2>



                    </div>
                </div>

                <hr />

			  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="newad" enctype="multipart/form-data">
                                   	  <table class="table table-bordered sortableTable responsive-table"  border="0" cellpadding="0" cellspacing="0" >
                                        <tr>
															<td>
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
															  <tr>
																<td style="width:15%">&nbsp; Upload Image :</td>
																<td style="width:25%"><input type="file" name="image"></td>
																<td><input name="Submit" type="submit" value="Upload image"></td>
															  </tr>
															</table>                                                            </td>
														  </tr>
                                         				<tr>
                                                        	<td><table cellpadding='0' cellspacing ='0' border='1' width='99%' >
                                                        	  
                                                        	  <tr>
                                                                <td width="69%" style='color:#098C36; font-weight:bold; text-align:center; height:30px; background-color:#708EB2; color:White; width:24%'>Select</td>
                                                        	    <td width="5%" style='color:#098C36; font-weight:bold; text-align:center; height:30px; background-color:#708EB2; color:White; width:42%'>ID</td>
                                                        	    <td width="26%" style='height:30px; background-color:#708EB2; color:White; width:22%; font-weight:bold; text-align:center;'>Photo</td>
                                                      	    </tr>
                                                              <?php $i = 0;
																	while($row = mysql_fetch_array($select))
																	{
																		$i = $i + 1; ?>
                                                              <tr>
                                                                <td style="text-align:center"><input type="checkbox" name="hioddenid<?php echo $i; ?>" value="<?php echo $row['ID']; ?>" /></td>
                                                                <td style='color:#098C36; height:30px; text-align:center;'><b><?php echo $row['ID']; ?></b></td>
                                                                <td><img src="<?php echo $row['small_image']; ?>" width="79" height="70" border="1"/></td>
                                                                <input type="hidden" name="image<?php echo $i; ?>" value="<?php echo $row['small_image'];?>" />
                                                              </tr>
                                                              <?php 
																	} ?>
                                                              <tr>
                                                                <td colspan="3" align="center"><input type="hidden" name="hidden" value="<?php echo $i; ?>" />
                                                                    <input type="submit" name="submit" value="Delete"  class="button"/></td>
                                                              </tr>
                                                             <?php
															include 'config.php';
																$query = "SELECT COUNT(ID) FROM tblgallery";
																$list = mysql_query($query);
																$row = mysql_fetch_row($list);
																$total_records = $row[0];
																$total_pages = ceil($total_records / 4);
																for ($i=1; $i<=$total_pages; $i++)
																{
																	echo "<a href='addimage.php?page=".$i."' style='text-decoration:none;'>&nbsp;".$i."&nbsp;</a> ";
																};
															?>
                                                            </table>
                                                        	</td>
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