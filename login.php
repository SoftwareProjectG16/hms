<!DOCTYPE html>
<?php
include ('config/config.php');
require ('phpfunctions/validatesession.php');
$errMsg="";
 //$_SESSION['prePage']="http://".$host.$_SERVER['PHP_SELF'] ;
 //echo $_SESSION['prePage'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
	$sql = "SELECT `id`, `fullName`, `userName`, `uPassword`, `gender`, `birthday`, `email`, `mobile`, `phone`, `city`, `address`, `type` FROM `person` WHERE `userName` = '$myusername' AND `uPassword` = '$mypassword'" ;
	$user =new person ;
    if($user->login($sql)== 1){
        $_SESSION['user']= $user;
         header("location: index.php");
    }else {$errMsg="Wrong Username or Password !!!";}

}
  //echo $_SESSION['user']->userName;


?>
       <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <link rel="stylesheet" href="./login_files/font.css">
	    <link href="./login_files/bayanno.css" media="screen" rel="stylesheet" type="text/css">
        <script src="./login_files/bayanno.js.download" type="text/javascript"></script>
        <link href="./login_files/css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="./login_files/font-awesome.min.css">
        <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
        <link rel="stylesheet" href="./css/1.css">        
                
                
                <title>Login | YOUR HOSPITAL NAME</title>
        



    </head>
    <body style="background: #123150;background-size: cover;background-position-y: -174px;">

                       
        <div class="container">

                <div class="padded">
                    <center>

                        <img src="./login_files/logo.png" style="border-radius: 50%;border: 5px solid whitesmoke;box-shadow: 1px 2px 3px #1F1F1F;max-width: 148px;min-height: 145px;">

                    <div class="login box" style="margin-top: 10px;" id="lform">
                        <div class="box-header" style="background: #0E0B29;color: white;text-shadow: none;">
                            <span class="title" style="width:100%;font-size: 28px;font-family: BebasNeueLight!important;letter-spacing: 2px;">Please&nbsp;Login<i class="fa fa-stethoscope" aria-hidden="true" style="float: right;padding-right: 20px;"></i></span>
                        </div>
                        <div class="box-content padded">
                        <i class="m-icon-swapright m-icon-white"></i>
                       <!----- // form ////////////// --------->
                        <form action="login.php" method="post" accept-charset="utf-8" class="separate-sections">
                           <div style="background-color: #FF66CC; " ><h3><?php echo $errMsg ?></h3> </div>

                        <div class="input-prepend">
                                <i ></i>


                 <span class="add-on" href="#">
                <i class="icon-envelope"></i>
                </span>
                <input name="username" class="form-control" type="text" placeholder="username">
                                </div>
                                <div class="input-prepend">
                                    <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                                    <input name="password" class="form-control" type="password" placeholder="Password">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-blue btn-block">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login                                    </button>
                                </div>
                            </form>                            <div>
                                <a data-toggle="modal" style="display:inherit;" href="#modal-password">
                                    Forgot Password?                                </a>
                                <h2>    <a data-toggle="modal" style="display:inherit;" href="/hospital/newpatient.php">
                                    New Patient ?                                </a></h2>
                            </div>
                        </div>
                        <div style="margin-top: -40px;">    <div style="clear:both;color:#aaa; padding:20px;">
    	<hr><center>© 2016 <a target="_blank" href="#">Hospital Management System - <br>Developed &amp; Design by <br><img src="./login_files/logo(1).png" style="width:267px;margin-top:8px;"></a></center>
    
                   </div></div>
                    </div></center>
                    
               
            
         
           
                     
           
           
         
        <!-----------password reset form ------>
        <div id="modal-password" class="modal hide fade">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h6 id="modal-tablesLabel">Reset Password</h6>
          </div>
          <div class="modal-body">
            <form action="http://hms.demoweb.work/index.php?/login/reset_password" method="post" accept-charset="utf-8"><div style="display:none">
<input type="hidden" name="authenticity_token" value="d0039bebd9763418206ab4f20f6860da">
</div>                
                <input type="email" name="email" placeholder="Email" style="margin-bottom: 0px !important;">
                <input type="submit" value="Reset" class="btn btn-blue btn-medium">
            </form>          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        </div>
        <!-----------password reset form ------>
        

    
<div class="ex-tooltip"></div>
<div id="galleryOverlay" style="display: none;"><div id="gallerySlider"></div><a id="prevArrow"><i class="icon-angle-left icon-4x"></i></a><a id="nextArrow"><i class="icon-angle-right icon-4x"></i></a></div></div>
</body>