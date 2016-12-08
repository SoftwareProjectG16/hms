<?php

 class person{
   var $id;
   var $fullName,$userName,$uPassword,$birthday,$gender,$email,$mobile,$phone,$address,$city,$type;

   public function login($sql){
                      include './config/config.php';
                 $loginValidation= mysqli_query($conn,$sql);
                 if(mysqli_num_rows($loginValidation)) {
                         // login
					      $row=mysqli_fetch_array($loginValidation);
                           $this->id=$row[0];
                           $this->fullName = $row[1];
                           $this->userName=$row[2];
                           $this->uPassword=$row[3];
                           $this->gender=$row[4];
                           $this->birthday=$row[5];
                           $this->email=$row[6];
                           $this->mobile=$row[7];
                           $this->phone =$row[8];
                           $this->city=$row[9];
                           $this->address=$row[10];
                           $this->type=$row[11];
                           //echo $id;
                           return 1 ;
                   }else {
                         // fild to login wrong user or pass
                       //echo("fail");
                       return 0 ;
                 }
    }


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

?>