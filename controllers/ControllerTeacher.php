<?php
class ControllerTeacher{
    private $_DataManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->teacher_action();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU DataManager.php
    private function teacher_action(){
        $this->_DataManager = new DataManager;
        $faculty_list = $this->_DataManager->getFacultyList();
        require_once('views/ViewActionTeacher.php');
    }

}
?>