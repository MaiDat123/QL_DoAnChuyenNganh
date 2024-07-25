<?php
    // require "./Core/Database.php";
    // require "./Models/BaseModel.php";
    require "./Controllers/BaseController.php";
    $controller_name = ucfirst((strtolower($_REQUEST['controller']) ?? 'home').'Controller'); 
    // echo $controller_name;
    $action_name = (strtolower($_REQUEST['action']) ?? 'index');
    // echo $action_name;
    require "./Controllers/".$controller_name.".php";
    $controllerObject = new $controller_name;
    echo $controllerObject->$action_name();
    
?>