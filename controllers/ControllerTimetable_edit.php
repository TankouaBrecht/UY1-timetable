<?php
class ControllerTimetable_edit{
    private $_DataManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->Edit_timetable();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU DataManager.php
    private function Edit_timetable(){
        $this->_DataManager = new DataManager;
        $amphi_list = $this->_DataManager->getAmphiList();
        $uelist = $this->_DataManager->getUeList();
        require_once('views/ViewEditTimetable.php');
    }

}
?>