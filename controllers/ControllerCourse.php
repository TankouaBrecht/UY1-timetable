<?php
class ControllerCourse{
    private $_DataManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->Course_action();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU DataManager.php
    private function Course_action(){
        $this->_DataManager = new DataManager;
        $faculty_list = $this->_DataManager->getFacultyList();
        require_once('views/ViewActionCourse.php');
    }

}
?>