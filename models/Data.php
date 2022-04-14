<?php
class Data{
    private $_id;
    private $_name;
    private $_faculty;
    private $_email;
    private $_libelle;
    private $_semester;
    private $_level;
    private $_teacher;
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
    public function setlevel($level){
        $level = (int) $level;
        if($level > 0){
            $this->_level = $level;
        }
    }
    public function setsemester($semester){
        $semester = (int) $semester;
        if($semester > 0){
            $this->_semester = $semester;
        }
    }
    public function setname($name){
        if(is_string($name)){
            $this->_name = $name;
        }
    }
    public function setfaculty($faculty){
        if(is_string($faculty)){
            $this->_faculty = $faculty;
        }
    }
    public function setlibelle($libelle){
        if(is_string($libelle)){
            $this->_libelle = $libelle;
        }
    }
    public function setteacher($teacher){
        if(is_string($teacher)){
            $this->_teacher = $teacher;
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
    public function level(){
        return $this->_level;
    }
    public function semester(){
        return $this->_semester;
    }
    public function name(){
        return $this->_name;
    }
    public function faculty(){
        return $this->_faculty;
    }
    public function teacher(){
        return $this->_teacher;
    }
    public function libelle(){
        return $this->_libelle;
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