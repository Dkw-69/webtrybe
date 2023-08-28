<?php

class Login extends Controller{
    // default fallback method 
    public function index(){
        // set page title
        $data['page_title'] = 'Log In';
        if(isset($_POST['username']) && !isset($_POST['email'])){

 	 		$admin = $this->loadModel("user");
 	 		$admin->login($_POST);
 	 	}
        // call the view method
        $this->view('admin-template/login', $data);
    }
}