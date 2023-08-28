<?php

class Admin extends Controller{
    // default fallback method 
    public function index(){
        // load user model first
        $admin = $this->loadModel('user');
        // check if the admin is logged in first
        if(!$result = $admin->check_logged_in()){
            // all is not good so redirect to login page
            header("Location:".ROOT."login");
            die;
        }
        // set page title
        $data['page_title'] = 'Admin' ;
        // call the view method
        $this->view('admin-template/index', $data);
    }
}