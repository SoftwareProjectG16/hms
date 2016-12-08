<!DOCTYPE html>
<?php
include ('config/config.php');
require ('phpfunctions/validatesession.php');
$errMsg="";
 //$_SESSION['prePage']="http://".$host.$_SERVER['PHP_SELF'] ;
 //echo $_SESSION['prePage'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
       if ($_POST['fullName'] != "" && $_POST['username'] != "" &&
            $_POST['uPassword'] != "" && $_POST['email'] != "" &&
            $_POST['fullName'] != "" && $_POST['mobile'] != "") {


    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['uPassword']);
	$sql = "SELECT `id`, `fullName`, `userName`, `uPassword`, `gender`, `birthday`, `email`, `mobile`, `phone`, `city`, `address`, `type` FROM `person` WHERE `userName` = '$myusername' AND `uPassword` = '$mypassword'" ;

    }else {$errMsg="PLease Enter Valid Data !!";}



}
  //echo $_SESSION['user']->userName;


?>
       <head>
       <script>
            function validateForm() {
               var fullName = document.forms["myForm"]["fullName"].value;
               if(fullName == "") {alert("Please Enter Your Name"); return false;}
               //----------------------------------
                var pass = document.forms["myForm"]["uPassword"].value;
               if(pass== "") {alert("Please Enter Valid Password"); return false;}
              //--------------------------------
            var mail = document.forms["myForm"]["email"].value;
            var atpos = mail.indexOf("@"); var dotpos = mail.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length) {alert("Not a valid e-mail address"); return false; }
             //---------------------
            var mobile = document.forms["myForm"]["mobile"].value;
            var stripped = mobile.replace(/[\(\)\.\-\ ]/g, '');
            if (stripped == ""){alert("Please Enter Your Mobile Number"); return false;}
            else if (isNaN(parseInt(stripped))) {alert("Please Enter Valid Mobile number "); return false;}
            else if (!(stripped.length < 10)) {alert("Wrong Phone number !!"); return false ;}
}
</script>
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
                            <span class="title" style="width:100%;font-size: 28px;font-family: BebasNeueLight!important;letter-spacing: 2px;">Please&nbsp;fill the form<i class="" aria-hidden="true" style="float: right;padding-right: 20px;"></i></span>
                        </div>
                        <div class="box-content padded">
                        <i class="m-icon-swapright m-icon-white"></i>
                       <!----- // form ////////////// --------->
                        <form name="myForm" action="newpatient.php" accept-charset="utf-8" class="separate-sections" onsubmit="return validateForm();"  method="post">
                           <div style="background-color: #FF66CC; " ><h3><?php echo $errMsg ?></h3> </div>

                        <div class="input-prepend">
                        <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                              <input name="fullName" class="form-control" type="text" placeholder="full Name">
                                </div>

                        <div class="input-prepend">
                        <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                              <input name="username" class="form-control" type="text" placeholder="User name">
                                </div>

                                      <div class="input-prepend">
                                    <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                                    <input name="uPassword" class="form-control" type="password" placeholder="Password">
                                </div>

                                 <div style="font-size: x-large">
                                   Gender :&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" value="male" checked> Male  &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="gender" value="female"> Female
                                   </div>

                                <div style="font-size: x-large">
                                BirthDay&nbsp;:&nbsp;&nbsp;
                                 <input name="birthday" class="form-control" type="date" style="font-size: x-large; height: 40px;" >
                                </div>

                                <div class="input-prepend">
                                <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                              <input name="email" class="form-control" type="text" placeholder="Email">
                                </div>

                                <div class="input-prepend">
                                <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                              <input name="mobile" class="form-control" type="text" placeholder="Mobile Number">
                                </div>
                                <div class="input-prepend">
                                <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                              <input name="phone" class="form-control" type="text" placeholder="Land Phone Number">
                                </div>


                                <div class="input-prepend">
                                <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                              <input name="city" class="form-control" type="text" placeholder="City">
                                </div>

                                 <div class="input-prepend">
                                <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                              <input name="address" class="form-control" type="text" placeholder="Address">
                                </div


                                <div>
                                    <button type="submit" class="btn btn-blue btn-block">
                                        <i class="" aria-hidden="true"></i>&nbsp;Register </button>
                                </div>

                        </div>
                            </form>

                        <div style="margin-top: -40px;">    <div style="clear:both;color:#aaa; padding:20px;">
    	<hr><center>© 2016 <a target="_blank" href="#">Hospital Management System - <br>Developed &amp; Design by <br><img src="./login_files/logo(1).png" style="width:267px;margin-top:8px;"></a></center>
                        </div>  </div>

                   </center>
                    </div>
                    </div>



         
           
                     
           
           
         

        

    
<div class="ex-tooltip"></div>
<div id="galleryOverlay" style="display: none;"><div id="gallerySlider"></div><a id="prevArrow"><i class="icon-angle-left icon-4x"></i></a><a id="nextArrow"><i class="icon-angle-right icon-4x"></i></a></div></div>
</body>