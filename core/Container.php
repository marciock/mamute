<?php
namespace Core;

class Container
{
    public static function newController($controller){
        $newController="App\\Controllers\\".$controller;
        return new $newController;
    }

    public static function pageNotFound(){
        if(file_exists(__DIR__."/../app/Views/layouts/404.phtml")){
            return require_once __DIR__."/../app/Views/layouts/404.phtml";
        }else{
            echo "Página não econtrada";
        }
    }
}