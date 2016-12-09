<!DOCTYPE html >
 <?php
  require ('phpfunctions/validatesession.php');
  //echo "Helllo ".$_SESSION['user']->fullName;
    //print_r($_SESSION);
  // echo $_SERVER['PHP_SELF'];
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<link rel="stylesheet" href="./Admin Dashboard _ YOUR HOSPITAL NAME_files/font.css">
		<link rel="stylesheet" href="./css/2.css">
        <link href="./Admin Dashboard _ YOUR HOSPITAL NAME_files/bayanno.css" media="screen" rel="stylesheet" type="text/css">
         <link href="./Admin Dashboard _ YOUR HOSPITAL NAME_files/css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./Admin Dashboard _ YOUR HOSPITAL NAME_files/font-awesome.min.css">
        <link href="./Admin Dashboard _ YOUR HOSPITAL NAME_files/css(1)" rel="stylesheet" type="text/css">
        <script src="./Admin Dashboard _ YOUR HOSPITAL NAME_files/bayanno.js.download" type="text/javascript"></script>
                <link rel="stylesheet" href="./Admin Dashboard _ YOUR HOSPITAL NAME_files/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
                <link rel="stylesheet" href="./Admin Dashboard _ YOUR HOSPITAL NAME_files/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


                <title>Admin Dashboard | YOUR HOSPITAL NAME</title>
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">/* This is not a zero-length file! */</style><style type="text/css">/* This is not a zero-length file! */</style></head>


<body>


<!-- Latest compiled and minified CSS -->

<!-- Optional theme -->
<div class="navbar navbar-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href="#">YOUR HOSPITAL NAME			</a>
			<!-- the new toggle buttons -->
			<ul class="nav pull-right">
				<li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>
				<li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i ></i></button></li>
			</ul>
			<div class="nav-collapse nav-collapse-top collapse">
			  <ul class="nav pull-right">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
					<!-- Account Selector -->
                    <ul class="dropdown-menu">
                    	<li class="with-image">
                        	<span>
                            Admin                            </span>
                        </li>
                    	<li class="divider"></li>
						<li><a href="#">
                        		<i ></i><span>Profile</span></a></li>
						<li><a href="phpfunctions/logout.php">
                        		<i ></i><span>Logout</span></a></li>
					</ul>
                	<!-- Account Selector -->
					</li>
				</ul>
<ul class="nav pull-right">
			<li class="dropdown">
					<a href="#"><i ></i>Admin Panel </a>
		  </li>
			  </ul>
			</div>
		</div>
	</div>
</div>    <div class="sidebar-background">
	<div class="primary-sidebar-background">
	</div>
</div>
<div class="primary-sidebar">
	<!-- Main nav -->
    <br>
    <div style="text-align:center;">
        	<img src="./Admin Dashboard _ YOUR HOSPITAL NAME_files/logo.png" style="border-radius: 50%;border: 5px solid whitesmoke;box-shadow: 1px 2px 3px #1F1F1F;max-width: 148px;min-height: 145px;">

    </div>
   	<br>
	<ul class="nav nav-collapse collapse nav-collapse-primary">

        <!------department----->
		<li class="">
			<span class="glow"></span>
				<a href="#">
					<i></i>
					<span>Department</span>
				</a>
		</li>
        
        <!------doctor----->
		<li class="">
			<span class="glow"></span>
				<a href="#">
					<i ></i>
					<span>Doctor</span>
				</a>
		</li>
        
        <!------patient----->
		<li class="">
			<span class="glow"></span>
				<a href="#">
					<i></i>
					<span>Patient</span>
				</a>
		</li>

        <!------nurse----->
		<li class="">
			<span class="glow"></span>
				<a href="#">
					<i></i>
					<span>Nurse</span>
				</a>
		</li>

        <!------pharmacist----->
		<li class="">
			<span class="glow"></span>
				<a href="#">
					<i></i>
					<span>Pharmacist</span>
				</a>
		</li>
        
        <!------laboratorist----->
		<li class="">
			<span class="glow"></span>
				<a href="#">
					<i></i>
					<span>Laboratorist</span>
				</a>
		</li>
        
        <!------accountant----->
		<li class="">
			<span class="glow"></span>
				<a href="#">
					<i></i>
					<span>Accountant</span>
				</a>
		</li>
        
        
		<!------manage hospital------>
		<li class="dark-nav ">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#">
                <i></i>
                <span>Monitor Hospital</span>
            </a>
            
            <ul id="view_hospital_submenu" class="collapse ">
                <li class="">
                  <a href="#">
                      <i ></i> View Appointment                  </a>
                </li>
                <li class="">
                  <a href="#">
                       View Payment                  </a>
                </li>
                <li class="">
                  <a href="#">
                       View Bed Status                  </a>
                </li>
                <li class="">
                  <a href="#">
                       View Blood Bank                  </a>
                </li>
                <li class="">
                  <a href="#">
                      View Medicine                  </a>
                </li>
                <li class="">
                  <a href="#">
                      View Operation                  </a>
                </li>
                <li class="">
                  <a href="#">
                       View Birth Report                  </a>
                </li>
                <li class="">
                  <a href="#">
                       View Death Report                  </a>
                </li>
            </ul>
		</li>
         <!------Ambulance----->
		<li class="">
			<span class="glow"></span>
				<a href="#">
                         <i></i>
					<span> Ambulance</span>
				</a>
		</li>
        
        <!------system settings------>
		<li class="dark-nav ">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#">
                          <i></i>
                <span>Settings</span>
            </a>
            
            <ul id="settings_submenu" class="collapse ">

                <li class="">
                  <a href="#">
                      Manage Noticeboard                  </a>
                </li>
                <li class="">
                  <a href="#">
                       System Settings                  </a>
                </li>
                <li class="">
                  <a href="#">
                       Manage Language                  </a>
                </li>
                <li class="">
                  <a href="#">
                       Backup Restore                  </a>
                </li>
            </ul>
		</li>

		<!------manage own profile--->
		<li class="">
			<span class="glow"></span>
				<a href="#"> <i></i>
								<span>Profile</span>
				</a>
		</li>
		
	</ul>
    </div>
     <!--------------------side bar end--------------------->
    <div class="main-content">
  <div class="container-fluid1">
            <div class="row-fluid">
                <div class="area-top clearfix">
                    <div class="pull-left header">
                        <h3 class="title">
                        <i></i>
                        Admin Dashboard </h3>
                    </div>
                    <ul class="inline pull-right sparkline-box">
                        <li class="sparkline-row">
                            <h4 class="green">
                                <span>Doctor</span> 
                                33                            </h4>
                        </li>
                        <li class="sparkline-row">
                            <h4 class="red">
                                <span>Patient</span>
                                20                            </h4>
                        </li>
                         <li class="sparkline-row">
                            <h4 class="purple">
                                <span>Ambulance</span> 
                                4                            </h4>
                        </li>
                        <!--<li class="sparkline-row">
                            <h4 class="blue">
                                <span>Appointment</span>
                                20                            </h4>
                        </li>-->
                        <li class="sparkline-row">
                            <h4 class="green">
                                <span>Nurse</span> 
                                12                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>


        
                <div class="container-fluid padded">
<p></p>
 </div>


<div class="ex-tooltip"></div><div id="galleryOverlay" style="display: none;"><div id="gallerySlider"></div><a id="prevArrow"><i ></i></a><a id="nextArrow"><i class="icon-angle-right icon-4x"></i></a></div></body></html>