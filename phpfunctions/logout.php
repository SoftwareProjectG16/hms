<?php
   // include ('../config/config.php');
   session_start();

   if(session_destroy()) {
     //echo $_SERVER['SERVER_NAME']."&nbsp;".$_SERVER['DOCUMENT_ROOT']."&nbsp;".$_SERVER['SCRIPT_NAME'];
       // echo "<br /><br />";
      header("Location:/hospital/login.php");
   }
?>