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
    private $_amphi;
    private $_phone;
    private $_capacity;
    private $_sex;
    private $_adress;
    private $_id_amphi;
    private $_id_class;
    private $_id_teacher;
    private $_id_ue;
    private $_time;
    private $_day;
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
    public function setcapacity($capacity){
        $capacity = (int) $capacity;
        if($capacity > 0){
            $this->_capacity = $capacity;
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
    public function setamphi($amphi){
        if(is_string($amphi)){
            $this->_amphi = $amphi;
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
    public function setid_ue($id_ue){
        if(is_string($id_ue)){
            $this->_id_ue = $id_ue;
        }
    }
    public function setid_teacher($id_teacher){
        if(is_string($id_teacher)){
            $this->_id_teacher = $id_teacher;
        }
    }
    public function setid_amphi($id_amphi){
        if(is_string($id_amphi)){
            $this->_id_amphi = $id_amphi;
        }
    }
    public function setid_class($id_class){
        if(is_string($id_class)){
            $this->_id_class = $id_class;
        }
    }
    public function setday($day){
        if(is_string($day)){
            $this->_day = $day;
        }
    }
    public function settime($time){
        if(is_string($time)){
            $this->_time = $time;
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
    public function amphi(){
        return $this->_amphi;
    }
    public function capacity(){
        return $this->_capacity;
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
    public function id_ue(){
        return $this->_id_ue;
    }
    public function id_amphi(){
        return $this->_id_amphi;
    }
    public function id_class(){
        return $this->_id_class;
    }
    public function id_teacher(){
        return $this->_id_teacher;
    }
    public function time(){
        return $this->_time;
    }
    public function day(){
        return $this->_day;
    }
    public function date(){
        return $this->_date;
    }
}
?>