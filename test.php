<?php
include 'config\config.php';

class person{
   var $id;
   var $fullName,$userName,$uPassword,$birthday,$gender,$email,$mobile,$phone,$address,$city,$type;

   public function login($sql){
                 include 'config\config.php';
                 $loginValidation= mysqli_query($conn,$sql);
                 if($loginValidation) {
                         // login
                         echo("login") ;
                         $row=mysqli_fetch_array($loginValidation);
                           $this->id=$row[0];
                           $this->fullName = $row[1];
                           $this->userName=$row[2];
                           $uPassword=$row[3];
                           $this->birthday=$row[4];
                           $this->gender=$row[5];
                           $this->email=$row[6];
                           $this->mobile=$row[7];
                           $this->phone =$row[8];
                           $this->address=$row[9];
                           $this->city=$row[10];
                           $this->type=$row[11];
                           //echo $id;
                   }else {
                         // fild to login wrong user or pass
                       echo("fail");
                 }
    }
  public function getname(){return $this->fullName;}

}

 //--------------------------------------------
class doctor extends person{
                            var $department,$nationality ,$medicalCertification,$position,$salary;
                            public function viewAppointment(){}
                            public function viewPatients(){}
                            public function viewPatientProfile(){}
                            public function writePrescription(){}
                            public function reserveSurgery(){}

}



 //--------------------------------------


 // echo("hello $db");
$user =new person ;
$user->login("Select * from person") ;
echo $user->getname();
echo "<br />";
$doc =new doctor ;
//unset($user);
//$d = new doctor = $user ;

?>