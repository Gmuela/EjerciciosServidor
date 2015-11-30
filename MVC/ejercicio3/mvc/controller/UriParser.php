<?php


//URI -> http://localhost/controller/action || http://server/app/BaseName/action

/*
$uriEnviada=$_SERVER["REQUEST_URI"];
$uriReescrita=$_SERVER["SCRIPT_NAME"];

uri enviada: /EjerciciosServidor/MVC/ejercicio3/pacopepe/dale
uri reescrita: /EjerciciosServidor/MVC/ejercicio3/index.php
*/

class UriParser{

    function static getBaseName(){

        $uriEnviada=$_SERVER["REQUEST_URI"];    
        $uriReescrita=$_SERVER["SCRIPT_NAME"];

        $arrayUriEnviada=explode("/",$uriEnviada);    
        $arrayUriReescrita=explode("/",$uriReescrita);

        $baseName="";

        if(sizeof($arrayUriEnviada) < sizeof($arrayUriReescrita)){

            $baseName="Home";

        }

        else{

            $baseName=$arrayUriEnviada[sizeof($arrayUriReescrita)-1];

        }

        return $baseName;


    }

    function static getActionName(){

        $uriEnviada=$_SERVER["REQUEST_URI"];    
        $uriReescrita=$_SERVER["SCRIPT_NAME"];

        $arrayUriEnviada=explode("/",$uriEnviada);    
        $arrayUriReescrita=explode("/",$uriReescrita);

        $actionName="";

        if(sizeof($arrayUriEnviada) < sizeof($arrayUriReescrita)){

            $actionName="index";

        }

        else{

            $actionName=$arrayUriEnviada[sizeof($arrayUriReescrita)];

        }

        return $actionName;


    }

    function static getControllerName(){

        $controllerName=UriParser::getBaseName();

        $controllerName.="Controller"

        return $controllerName;

    }


    function static getBaseUri(){



    }
}

?>
