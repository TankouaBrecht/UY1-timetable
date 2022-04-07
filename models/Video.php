<?php
class Video{
    private $_id;
    private $_name;
    private $_tenue;
    private $_class;
    private $_tranche1;
    private $_tranche2;
    private $_tranche3;
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
    public function settenue($tenue){
        if(is_string($tenue)){
            $this->_tenue = $tenue;
        }
    }
    public function setclass($class){
        if(is_string($class)){
            $this->_class = $class;
        }
    }

    public function settranche1($tranche1){
        $tranche1 = (int) $tranche1;
        if($tranche1 > 0){
            $this->_tranche1 = $tranche1;
        }
    }
    public function settranche2($tranche2){
        $tranche2 = (int) $tranche2;
        if($tranche2 > 0){
            $this->_tranche2 = $tranche2;
        }
    }
    public function settranche3($tranche3){
        $tranche3 = (int) $tranche3;
        if($tranche3 > 0){
            $this->_tranche3 = $tranche3;
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
    public function tenue(){
        return $this->_tenue;
    }
    public function class(){
        return $this->_class;
    }
    public function tranche1(){
        return $this->_tranche1;
    }
    public function tranche2(){
        return $this->_tranche2;
    }
    public function tranche3(){
        return $this->_tranche3;
    }
    public function date(){
        return $this->_date;
    }
}
?>