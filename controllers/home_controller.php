<?php
class HomeController{
    public function home(){
        $homeisolationmodellist = homeisolationModels::getAllshow();
        require_once('views/home/home.php');
    }
    public function error(){
        require_once('views/home/error.php');
    }
}
?>