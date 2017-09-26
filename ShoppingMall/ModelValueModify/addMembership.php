<?php require_once "../ModelSearch/DBManager_C.php";
class addMembership extends DBManager_C{

    public function __construct(){
      parent::__construct();
    }

    private $id;
    private $password;
    private $name;
    private $phone;
    private $email;
    private $birthday;

    function setID($id){
        $this->id=$id;
    }
    function setPassWord($password){
        $this->password=$password;
    }
    function setName($name){
        $this->name=$name;
    }
    function setPhone($phone){
        $this->phone=$phone;
    }
    function setEmail($email){
        $this->eamil=$email;
    }
    function setBirthDay($birthday){
        $this->birthday=$birthday;
    }

    function getID(){
        return $this->id;
    }
    function getPassWord(){
        return $this->password;
    }
    function getName(){
        return $this->name;
    }
    function getPhone(){
        return $this->phone;
    }
    function getEmail(){
        return $this->eamil;
    }
    function getBirthDay(){
        return $this->birthday;
    }

    public function addMembership(){
      $sql="INSERT INTO members Values('{$this->getID()}', '{$this->getpassWord()}',
      '{$this->getName()}', '{$this->getPhone()}', '{$this->getEmail()}', '{$this->getBirthDay()}')";
      $stt=$this->dbh->prepare($sql, [PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL]);
      $result=$stt->execute();

      return $result;
    }
  }
 ?>
