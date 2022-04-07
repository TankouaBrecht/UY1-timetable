<?php
class Router{
    private $_ctrl;
    private $_view;

    public function routerReq(){
        try {
            // spl_autoload_register(function($class){
            //    require_once('models/'.$class.'.php');
            // });
            require_once('models/Model.php');
            require_once('models/VideoManager.php');
            require_once('models/Video.php');
           
            $url = '';

            if(isset($_GET['url'])){
                $url = explode('/', filter_var($_GET['url'],
                FILTER_SANITIZE_URL));   
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFile = "controllers/".$controllerClass.".php";
                if(file_exists($controllerFile)){
                    require_once("$controllerFile");
                    $this->_ctrl= new $controllerClass($url);
                }
                else{
                    print_r('page introuvable');
                }
            }
            else{
                require_once('controllers/ControllerAccueil.php');
                $this->_ctrl= new ControllerAccueil($url);
            }

        }
         catch (Exception $e) {
            $errorMsg = $e->getMessage();
            require_once('views/viewError.php');
        }
    }
}

?>