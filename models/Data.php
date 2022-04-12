<?php
class Data{
    private $_id;
    private $_name;
    private $_email;
    private $_class;
    private $_phone;
    private $_sex;
    private $_adress;
    private $_date;
    public function __construct(array $data){
      $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    // SETTERS
    public function setId($id){
        $id = (int) $id;
        if($id > 0){
            $this->_id = $id;
        }
    }
    public function setname($name){
        if(is_string($name)){
            $this->_name = $name;
        }
    }
    public function setemail($email){
        if(is_string($email)){
            $this->_email = $email;
        }
    }
    public function setclass($class){
        if(is_string($class)){
            $this->_class = $class;
        }
    }

    public function setphone($phone){
        $phone = (int) $phone;
        if($phone > 0){
            $this->_phone = $phone;
        }
    }
    public function setsex($sex){
        if(is_string($sex)){
            $this->_sex = $sex;
        }
    }
    public function setadress($adress){
        if(is_string($adress)){
            $this->_adress = $adress;
        }
    }
    public function setdate($date){
            $this->_date = $date;
    }
    // GETTERS
    public function id(){
        return $this->_id;
    }
    public function name(){
        return $this->_name;
    }
    public function email(){
        return $this->_email;
    }
    public function class(){
        return $this->_class;
    }
    public function phone(){
        return $this->_phone;
    }
    public function sex(){
        return $this->_sex;
    }
    public function adress(){
        return $this->_adress;
    }
    public function date(){
        return $this->_date;
    }
}
?>