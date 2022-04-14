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

        require_once('views/ViewEditTimetable.php');
    }

}
?>