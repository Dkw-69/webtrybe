<?php

class Logout extends Controller{
    // default fallback method 
    public function index(){
        // load user model
        $admin = $this->loadModel("user");
        // now log the user out
        $admin->logout();
    }
}