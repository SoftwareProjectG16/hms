<?php
 require('./phpclasses/person.php');
 session_start();
 if( isset( $_SESSION['user'] ) ){
       $sql = "SELECT * FROM `person` WHERE `userName` = '".$_SESSION['user']->userName ."' AND `uPassword` ='". $_SESSION['user']->uPassword."'" ;
       $user =new person ;
    if($user->login($sql)==1){
       $_SESSION['user']=$user;
       if ($_SERVER['PHP_SELF'] == "/hospital/login.php" ||$_SERVER['PHP_SELF'] == "/hospital/newpatient.php"){header("location:index.php");}
    }else{
      if ($_SERVER['PHP_SELF'] != "/hospital/login.php" && $_SERVER['PHP_SELF'] != "/hospital/newpatient.php"){header("location:login.php");}
       }
 }else{
   if ($_SERVER['PHP_SELF'] != "/hospital/login.php" && $_SERVER['PHP_SELF'] != "/hospital/newpatient.php"){header("location:login.php");}
 }


?>