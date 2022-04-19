<?php
 class DataManager extends Model{

    // Methode GET pour recuperer les informations dans la BD
    
     public function getFacultyList(){
         $this->getBdd();
         return $this->getAllFaculty('class','Data');
     }
     public function getAmphiList(){
        $this->getBdd();
        return $this->getAll('amphi','Data');
    }
    public function getUeList(){
        $this->getBdd();
        return $this->getAll('ue','Data');
    }

     public function getInfobyId($table, $colum, $id, $obj){
        $this->getBdd();
        return $this->getbyId($table, $colum, $id, $obj);
    }
    
    public function getDatasbyId($table, $colum1, $id1, $colum2, $id2, $obj){
        $this->getBdd();
        return $this->getbydoubleId($table, $colum1, $id1, $colum2, $id2, $obj);
    }
        
    public function getDatasbyTripleId($table, $colum1, $id1, $colum2, $id2, $colum3, $id3, $obj){
        $this->getBdd();
        return $this->getbytripleId($table, $colum1, $id1, $colum2, $id2, $colum3, $id3, $obj);
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

    public function postAmphis($tab){
        $this->getBdd();
        return $this->postAmphi('amphi', $tab);
    }

    public function postCl($tab){
        $this->getBdd();
        return $this->postClass('class', $tab);
    }

    public function postTimes($tab){
        $this->getBdd();
        return $this->postTimetable('course', $tab);
    }



        // Methode Update pour mettre a jour les informations dans la BD
    public function updateTeacher($name,$email,$adress,$phone,$faculty,$pic,$sex,$id){
        $this->getBdd();
        return $this->updateTeachers('teachers',$name,$email,$adress,$phone,$faculty,$pic,$sex,$id);
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