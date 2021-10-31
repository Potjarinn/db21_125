<?php
$controllers = array('home'=>['home','error'],
'hospital'=>['index','newhospital','addhospital','search','updateforms','update','deleteconfirm','delete']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller){
        case "home": $controller = new HomeController();break;
        case "hospital": require_once("models/hospitalmodels.php");
                         //require_once("./models/hospitalmodels.php");
            $controller = new hospital();break;
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