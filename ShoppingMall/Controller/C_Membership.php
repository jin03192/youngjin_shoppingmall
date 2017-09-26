<?php
  require_once "../ModelValueModify/addMembership.php";
  require_once "../ModelSearch/members.php";
  class C_Membership{
    private $memberAddObj;
    private $memberObj;
      public function __construct(){
        $this->memberAddObj = new addMembership();
        $this->memberObj = new members();
      }

      public function addMember($id, $password, $name, $phone, $email, $birthday){
        $this->memberAddObj->setID($id);
        $this->memberAddObj->setPassWord($password);
        $this->memberAddObj->setName($name);
        $this->memberAddObj->setPhone($phone);
        $this->memberAddObj->setemail($email);
        $this->memberAddObj->setBirthDay($birthday);

        return $this->memberAddObj->addMembership();
      }

      public function MemberIDCheckCount($id){
        return $this->memberObj->id_Check_Count($id);
      }

      public function MemberNickCheckCount($nickName){
        return $this->memberObj->nickname_Check_Count($nickName);
      }

      public function MemberIDPWCheckCount($id, $password){
        return $this->memberObj->IDPW_Check_Count($id, $password);
      }

      public function memberSessionPrint($id){
        $row = $this->memberObj->memberSession($id);
        return array("id" => $row['id'], "password" => $row['password'],
        "name" => $row['name'], "phone" => $row['phone'],
        "email" => $row['email'], "birthday" => $row['birthday']);
      }


  }

 ?>
