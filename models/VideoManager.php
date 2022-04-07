<?php
 class VideoManager extends Model{

    // Methode GET pour recuperer les informations dans la BD
    
     public function getLists(){
         $this->getBdd();
         return $this->getAll('students', 'Video');
     }
     public function getInfobyId($table, $colum, $id, $obj){
        $this->getBdd();
        return $this->getbyId($table, $colum, $id, $obj);
    }
    public function getvideobydoubleId($table, $colum1, $id1, $colum2, $id2, $obj){
        $this->getBdd();
        return $this->getbydoubleId($table, $colum1, $id1, $colum2, $id2, $obj);
    }
    
    // Methode POST pour stocker les informations dans la BD

    public function postLists($tab){
        $this->getBdd();
        return $this->postAll('students', $tab);
    }


    // Methode DEL pour supprimer les informations dans la BD
    public function desabonne($table, $colum, $id){
        $this->getBdd();
        return $this->delbyId($table, $colum, $id);
    }

        // Methode Update pour mettre a jour les informations dans la BD
        public function upAll($name,$t1,$t2,$t3,$class,$tenue,$id){
            $this->getBdd();
            return $this->updateAll($name,$t1,$t2,$t3,$class,$tenue,$id);
        }

        public function upbyId($table,$colum,$val,$colum2,$id){
            $this->getBdd();
            return $this->updatebyId($table,$colum,$val,$colum2,$id);
        }
 }
?>