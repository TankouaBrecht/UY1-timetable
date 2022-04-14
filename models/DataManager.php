<?php
 class DataManager extends Model{

    // Methode GET pour recuperer les informations dans la BD
    
     public function getFacultyList(){
         $this->getBdd();
         return $this->getbyId('class', 'level', '1', 'Data');
     }

     public function getInfobyId($table, $colum, $id, $obj){
        $this->getBdd();
        return $this->getbyId($table, $colum, $id, $obj);
    }
    
    public function getDatabydoubleId($table, $colum1, $id1, $colum2, $id2, $obj){
        $this->getBdd();
        return $this->getbydoubleId($table, $colum1, $id1, $colum2, $id2, $obj);
    }
    
    // Methode POST pour stocker les informations dans la BD

    public function postTeachers($tab){
        $this->getBdd();
        return $this->postTeacher('teachers', $tab);
    }

    public function postCourses($tab){
        $this->getBdd();
        return $this->postCourse('ue', $tab);
    }



        // Methode Update pour mettre a jour les informations dans la BD
    public function updateTeacher($name,$adress,$phone,$email,$faculty,$pic,$sex,$id){
        $this->getBdd();
        return $this->updateTeachers('teachers',$name,$adress,$phone,$email,$faculty,$pic,$sex,$id);
    }

    public function updateCourse($name,$libelle,$semester,$class,$level,$teacher,$id){
        $this->getBdd();
        return $this->updateCourses('ue',$name,$libelle,$semester,$class,$level,$teacher,$id);
    }

        
    // Methode DEL pour supprimer les informations dans la BD
    public function desabonne($table, $colum, $id){
        $this->getBdd();
        return $this->delbyId($table, $colum, $id);
    }
 }
?>