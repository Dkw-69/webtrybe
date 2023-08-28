<?php

class App{
    // default index from home page controller
    private $controller = "home";
    private $method = "index";
    // store extra items in array
    private $params = [];
    // constructor method that runs immediately when App is instanciated
    public function __construct(){
        // call the spliturl fn
        $url = $this->splitURL();
        if(file_exists("../app/controllers/".strtolower($url[0]).".php")){
            $this->controller = strtolower($url[0]);
            // remove url from the array to allow extra vars
            unset($url[0]);
        }
        require "../app/controllers/".$this->controller.".php";
        // instanciate the controller
        $this->controller = new $this->controller;
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method =  $url[1];
                unset($url[1]);
            }
        }
        // run class and method
        $this->params = array_values($url);
        // fn that runs class & method at the same time
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    // method to split the urls
    private function splitURL(){
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url,"/"), FILTER_SANITIZE_URL));
    }
}