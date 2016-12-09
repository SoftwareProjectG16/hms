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
                                                            if(mysqli_num_rows($loginValidation)) { //echo"yes";
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
                                                                                                 $_SESSION['user']=$this;
                                                                                                 //print_r($user);
                                                                                                 return 1 ;

                                                                                                 }else{// Wrong user name or password
                                                                                                 $_SESSION['msg']="Wrong username or password" ;
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

                                         $sql="SELECT * FROM `person` WHERE `userName`='".$_POST['username']."'";// if username exists
                                            $result=mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($result)==1){$_SESSION['msg']="Exist username";return -1;}
                                        $sql="SELECT * FROM `person` WHERE `email`='".$_POST['email']."'";// if mail exists
                                        $result=mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($result)==1){$_SESSION['msg']="Exist E-mail address";return -1;}
                                        $sql="SELECT * FROM `person` WHERE `mobile`='".$_POST['mobile']."'";// if mobile exists
                                        $result=mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($result)==1){$_SESSION['msg']="Exist mobile Number";return -1;}

                                        $sql="INSERT INTO `hms`.`person` (`id`, `fullName`, `userName`, `uPassword`, `gender`, `birthday`, `email`, `mobile`, `address`, `type`) VALUES (NULL, '".$_POST['fullName']."', '".$_POST['username']."', '".$_POST['uPassword']."', '".$_POST['gender']."', '".$_POST['birthday']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['address']."', 'p');";
                                        $validate=mysqli_query($conn,$sql);
                                        $sqll="SELECT * FROM `person` WHERE `userName` = '".$_POST['username']."' AND `uPassword` = '".$_POST['uPassword']."'" ;
                                        if($validate==1){$this->login($sqll);$_SESSION['user']=$this;return 1;}else{$_SESSION['msg']="DataBase Error , Please try again"; return -1;}
                                    }else {return 0;}



                              }

                             }









}

?>