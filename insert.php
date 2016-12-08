<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>insert</title>
</head>

<body>
       <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

       $conn = mysqli_connect($servername,$username ,$password, $dbname);

   //check connection
  if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
function patientage($x,$y,$z){
    $m;
    $dd;
    $yy;
    $l;
    $ll;
    $lll;
   if ($x>date("d")){$l=date("d")+30;
   $ll=date("m")-1;
   $dd=$l-$x;
   } else{$dd=date("d")-$x;
   }
  if ($y>date("m")){$ll=date("m")+12;
          $lll=date("Y")-12;
     $yy=$ll-$y;
   } else{$yy=date("m")-$y;
   }

    $zz=date("Y")-$z;
  return $zz;

}
$name = $_REQUEST["username"];
$email = $_REQUEST["usermail"];
$date = $_REQUEST["date"];
$month = $_REQUEST["month"];
$year0fbirth= $_REQUEST["year0fbirth"];
$patientphone = $_REQUEST["patientphone"]   ;
$Gender=$_REQUEST["Gender"];
$password = $_REQUEST["pass"];
$patientCV=$_REQUEST["patientCV"];
$dateofbirth= $date."-".$month."-".$year0fbirth;
  $e=patientage($date,$month,$year0fbirth);
$sql="INSERT INTO patient (User name,age,E-mail,password,Gender,Phone number,Date of birth,cv)
VALUES('$name','$e','$email','$password','$Gender','$patientphone','$dateofbirth','$patientCV')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); /*
echo "your name is".$name."<br>";
echo "your Email is :" .$email ."<br>" ;
echo "your date of birth is : $date -$month -$year0fbirth <br>" ;
echo "your phone is  $patientphone <br>";
echo "you are a $Gender <br>";
echo "password is : $password <br>" ;
echo "your age is : ".patientage($date,$month,$year0fbirth)."<br>";
echo "cv:".$patientCV;
 */
?>
</body>

</html>
