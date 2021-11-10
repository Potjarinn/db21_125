<?php
$controllers = array('home'=>['home','error'],
'hospital'=>['index','newhospital','addhospital','search','updateforms','update','deleteconfirm','delete'],
'doctor'=>['index','newdoctor','adddoctor','search','updateforms','update','deleteconfirm','delete'],
'homeisolation'=>['index','newhomeisolation','addhomeisolation','search','updateforms','update','deleteconfirm','delete']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller){
        case "home": require_once("models/homeisolationmodels.php");
            $controller = new HomeController();break;
        case "hospital": require_once("models/hospitalmodels.php");
            $controller = new hospital();break;
        case "doctor": require_once("models/doctormodels.php");
                    require_once("models/hospitalmodels.php");
            $controller = new doctor();break;
        case "homeisolation": require_once("models/homeisolationmodels.php");
                            require_once("models/doctormodels.php");
                            require_once("models/hospitalmodels.php");
                            require_once("models/patienmodels.php");
                            //require_once("models/atkmodels.php");
                            //require_once("models/colormodels.php");
                            //require_once("models/peoplemodels.php");
            $controller = new homeisolation();break;
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller])){
        call($controller,$action);
    }else{
        call('home','error');
    }
}else{
    call('home','error');
}
?>