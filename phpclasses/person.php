<?php

 class person{
   var $id;
   var $fullName,$userName,$uPassword,$gender,$birthday,$email,$mobile,$address,$type;
    public function login($sql){include './config/config.php';
                               $loginValidation= mysqli_query($conn,$sql);
                               if(mysqli_num_rows($loginValidation)) { $row=mysqli_fetch_array($loginValidation);
                                                                       $this->id=$row[0];
                                                                       $this->fullName = $row[1];
                                                                       $this->userName=$row[2];
                                                                       $this->uPassword=$row[3];
                                                                       $this->gender=$row[4];
                                                                       $this->birthday=$row[5];
                                                                       $this->email=$row[6];
                                                                       $this->mobile=$row[7];
                                                                       $this->address=$row[8];
                                                                       $this->type=$row[9];
                                                                       return 1;}else {return 0;}
    }
    public function loginPost(){
                      include './config/config.php';
                      if($_SERVER["REQUEST_METHOD"]=="POST") {// echo "post"  ;
                                                        	$myusername = mysqli_real_escape_string($conn,$_POST['username']);
                                                            $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
                                                        	$sql = "SELECT * FROM `person` WHERE `userName` = '$myusername' AND `uPassword` = '$mypassword'" ;
                                                            $loginValidation= mysqli_query($conn,$sql);
                                                            if(mysqli_num_rows($loginValidation)) { echo"yes";
                                                                                                 $row=mysqli_fetch_array($loginValidation);
                                                                                                  $this->id=$row[0];
                                                                                                  $this->fullName = $row[1];
                                                                                                  $this->userName=$row[2];
                                                                                                  $this->uPassword=$row[3];
                                                                                                  $this->gender=$row[4];
                                                                                                  $this->birthday=$row[5];
                                                                                                  $this->email=$row[6];
                                                                                                  $this->mobile=$row[7];
                                                                                                  $this->address=$row[8];
                                                                                                  $this->type=$row[9];
                                                                                                 // login
                                                                                                 //print_r($user);
                                                                                                 return 1 ;

                                                                                                 }else{// Wrong user name or password
                                                                                                   return -1;}


                                                               }else {// there is no  post
                                                                      return 0 ; }
    }


}
  //-------------------------------------------
  class admin extends person{
                            var $nationalId,$salary;

  }
 //--------------------------------------------
class doctor extends person{
                            var $nationalId ,$department,$medicalCertification,$position,$salary,$notes;
                            public function viewAppointment(){}
                            public function viewPatients(){}
                            public function viewPatientProfile(){}
                            public function writePrescription(){}
                            public function reserveSurgery(){}

}

//-------------------------------------------------------------
class patient extends person{
                            var $currentStatus,$notes;
                             public function newPatient(){
                               include './config/config.php';
                               if($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if ($_POST['fullName'] != "" && $_POST['username'] != "" &&
                                        $_POST['uPassword'] != "" && $_POST['email'] != "" &&
                                        $_POST['fullName'] != "" && $_POST['mobile'] != "") {
                                        $sql="INSERT INTO `hms`.`person` (`id`, `fullName`, `userName`, `uPassword`, `gender`, `birthday`, `email`, `mobile`, `address`, `type`) VALUES (NULL, '".$_POST['fullName']."', '".$_POST['username']."', '".$_POST['uPassword']."', '".$_POST['gender']."', '".$_POST['birthday']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['address']."', 'p');";
                                        $validate=mysqli_query($conn,$sql);
                                        if($validate){return 1;}else{return 0;}
                                    }else {return -1;}



                              }

                             }









}

?>