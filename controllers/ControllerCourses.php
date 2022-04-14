<?php
class ControllerCourses{
    private $_DataManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->view_all_Course();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU DataManager.php
    private function view_all_Course(){
        $this->_DataManager = new DataManager;
        $faculty_list = $this->_DataManager->getFacultyList();
        require_once('views/viewAllCourse.php');
    }

}
?>