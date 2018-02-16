<?php
    require "defines.php";
    //adelante, hace que empiece siemre desde aqui
    /*
    use MVC_Clinica\Controller\FooController as WhateVer;
    $foo = new WhateVer();
    $foo->saySomething();
    */
    $principal = 'View';
    if(!(isset($_REQUEST['c']))){
        require_once('Controller/'.$principal.'Controller.php');
        $view = $principal.'Controller';
        $view = new $view;
        $view->index();
    }else{
        $cont = ucwords($_REQUEST['c']);
      // require_once('Controller/' . $cont.'Controller.php');
        $controller = $cont.'Controller';
        $accion = isset($_REQUEST['a'])? $_REQUEST['a']: 'index';
        $controller =new $controller;
        $controller ->$accion();
    }
?>