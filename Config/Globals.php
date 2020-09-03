<?php namespace Config; 

/**
 *    
 * Globals.php
 *    
 * Public variables
 * 
 * @author     Leiner Ceballos
 * @version    1.0
 * @category   Config file
 */


class Globals
{

    #Constructor
    public function __construct(){
    }

    // return index route
    public static function redirectIndex(){
        $index = "http://" . $_SERVER['HTTP_HOST'];
        return $index;
    }

    public function getHost(){
        $host = realpath("index.php");
        $array = explode("/", $host);
        // Delete last word (Config)
        $route = array_slice($array, 0, 4);
        $route = implode("/" ,$route);
        
        return $route;
    }

    // Return Head View JS and CSS
    public static function getHead(){
        $head = $_SERVER['DOCUMENT_ROOT'] . "/views/sections/head" . ".php";

        require_once $head;
    }

    // Return Header Menu 
    public static function getHeader(){
        $header = $_SERVER['DOCUMENT_ROOT'] . "/views/sections/header" . ".php";

        require_once $header;
    }

    // Return Header Menu 
    public static function getCarrousel(){
        $carrousel = $_SERVER['DOCUMENT_ROOT'] . "/views/sections/carrousel" . ".php";

        require_once $carrousel;
    }

    // Return Services images
    public static function getServices(){
        $services = $_SERVER['DOCUMENT_ROOT'] . "/views/sections/services" . ".php";

        require_once $services;
    }

    // Return Portfolio
    public static function getPortfolio(){
        $portfolio = $_SERVER['DOCUMENT_ROOT'] . "/views/sections/portfolio" . ".php";

        require_once $portfolio;

    }
    // Return Footer (info)
    public static function getFooter(){
        $footer = $_SERVER['DOCUMENT_ROOT'] . "/views/sections/footer" . ".php";

        require_once $footer;
    }


}



?>