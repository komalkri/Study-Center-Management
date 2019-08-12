

 <div id="left" >
            <div class="media user-media well-small">
                 <a class="user-link" href="#">
                
                     <?php  
					 include 'config.php';
					 $sid=$_SESSION['logged_user'];
					 $q1="SELECT * FROM stud_reg where enrolment=$sid";
                            $select=mysql_query($q1);
																	while($row = mysql_fetch_array($select))
																	{
																	?>
                                                           <table>   <tr>
                                                               
                                                                <td><img src="<?php echo $row['uploadedfile']; ?>" width="79" height="70" border="1"/></td>
                                                                <input type="hidden" name="image" value="<?php echo $row['uploadedfile'];}?>" />
                                                              </tr></table>
                                                              
                </a>
               
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php 
					                                  
													 
														 $n=$_SESSION['logged_user'];
														 $q1="SELECT * FROM stud_reg where enrolment=$n";
                                                         $r1=mysql_query($q1);
                                                         while($row = mysql_fetch_array($r1))
                                                         {
	                                                        $snm = $row['snm'];
														    echo $snm;
															}
												?>
											
					</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="admin" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Employee Management    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                     
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="add_employee.php"><i class="icon-angle-right"></i> Create Profile </a></li>
                         <li class=""><a href="icon.html"><i class="icon-angle-right"></i> Manage Profile </a></li>
						 
                       
                    </ul>
                </li>
                
                
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav1">
                        <i class="icon-pencil"></i> Notice Management
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                        
                    </a>
                    <ul class="collapse" id="form-nav1">
                        <li class=""><a href="forms_general.html"><i class="icon-angle-right"></i> Add Notice </a></li>
                        <li class=""><a href="forms_advance.html"><i class="icon-angle-right"></i> Manage Notice </a></li>
                       
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Time Table Management
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="pages_calendar.html"><i class="icon-angle-right"></i> Add Time Table </a></li>
                        <li><a href="pages_timeline.html"><i class="icon-angle-right"></i> Manage Time Table </a></li>
                        
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Student Management
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         
                    </a>
                    <ul class="collapse" id="chart-nav">



                        <li><a href="charts_line.html"><i class="icon-angle-right"></i> Add Student </a></li>
                       <li><a href="charts_line.html"><i class="icon-angle-right"></i> Manage Student </a></li>
                       <li><a href="charts_line.html"><i class="icon-angle-right"></i> Generate Password</a></li>
                    </ul>
                </li>

				<li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Class Notes 
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                        
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="Classnotes.php"><i class="icon-angle-right"></i> Download Notes </a></li>
                       
                       
                    </ul>
                </li>



                <li><a href="addimage"><i class="icon-film"></i> Image Gallery </a></li>
               
                
                 
                <li><a href="logout"><i class="icon-signin"></i> Logout </a></li>

            </ul>

        </div>
		