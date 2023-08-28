<?php

class Controller{
    // method that reads from the 'views' folder
    protected function view($view, $data=[]){
        if(file_exists("../app/views/".$view.".php")){
            // include the file
            include "../app/views/".$view.".php";
        }else{
            include "../app/views/404.php";
        }
    }
    // fn to load model classes
    protected function loadModel($model){
        if(file_exists("../app/models/".$model.".php")){
            // include the file
            include "../app/models/".$model.".php";
            // instanciate the class
            return $model = new $model();
        }
        return false;
    }
}